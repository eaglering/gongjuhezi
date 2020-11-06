<?php
declare(strict_types=1);

namespace app\backend\service;

use app\backend\facade\Auth;

class MenuService
{
    protected $menus;

    public function __construct()
    {
        $this->menus = config('menus');
    }

    /**
     * 后台菜单配置
     * @param $routeUri
     * @param $group
     * @return array|mixed
     * @throws \Casbin\Exceptions\CasbinException
     */
    public function getMenus($routeUri, $group)
    {
        $menus = $this->menus;
        $this->first($menus, $routeUri, $group);
        return $menus;
    }

    /**
     * 获取面包屑
     * @param $routeUri
     * @param $group
     * @return array
     */
    public function getBreadcrumb($routeUri, $group)
    {
        if (empty($this->menus[$group])) return [];
        return $this->getSubBreadcrumb($this->menus[$group], $routeUri);
    }

    protected function getSubBreadcrumb($menus, $routeUri) {
        $breadcrumb = [$this->getAttribute($menus)];
        if (!empty($menus['index']) && $menus['index'] == $routeUri) {
            return $breadcrumb;
        }
        if (!empty($menus['uris'])) {
            foreach ($menus['uris'] as $index => $item) {
                if ($index == $routeUri) {
                    $breadcrumb[] = $this->getAttribute($item);
                    return $breadcrumb;
                }
            }
        }
        if (!empty($menus['submenu'])) {
            foreach ($menus['submenu'] as $subMenu) {
                $subBreadcrumb = $this->getSubBreadcrumb($subMenu, $routeUri);
                if ($subBreadcrumb) {
                    return array_merge($breadcrumb, $subBreadcrumb);
                }
            }
        }
        return [];
    }

    protected function getAttribute($menus)
    {
        return [
            'icon' => $menus['icon'] ?? '', 'title' => $menus['title'] ?? '',
            'index' => $menus['index'] ?? '', 'subtitle' => $menus['subtitle'] ?? ''
        ];
    }

    /**
     * 一级菜单
     * @param $menus
     * @param $routeUri
     * @param $group
     * @throws \Casbin\Exceptions\CasbinException
     */
    protected function first(&$menus, $routeUri, $group)
    {
        foreach ($menus as $key => &$first) {
            // 一级菜单索引url
            $indexData = $this->getMenusIndexUrls($first, 1);
            // 权限验证
            $first['index'] = $this->getAuthUrl($indexData);
            if ($first['index'] === false) {
                unset($menus[$key]);
                continue;
            }
            // 菜单聚焦
            $first['active'] = $key === $group;
            // 遍历：二级菜单
            if (isset($first['submenu'])) {
                $this->second($first['submenu'], $routeUri);
            }
        }
    }

    /**
     * 二级菜单
     * @param array $menus
     * @param $routeUri
     * @throws \Casbin\Exceptions\CasbinException
     */
    protected function second(&$menus, $routeUri)
    {
        foreach ($menus as $key => &$second) {
            // 二级菜单索引url
            $indexData = $this->getMenusIndexUrls($second, 2);
            // 权限验证
            $second['index'] = $this->getAuthUrl($indexData);
            if ($second['index'] === false) {
                unset($menus[$key]);
                continue;
            }
            // 二级菜单所有uri
            $secondUris = [];
            // 遍历：三级菜单
            if (isset($second['submenu'])) {
                $this->third($second['submenu'], $routeUri, $secondUris);
            } else {
                if (isset($second['index'])) {
                    $secondUris[] = $second['index'];
                }
                if (isset($second['uris'])) {
                    $secondUris = array_merge($secondUris, array_keys($second['uris']));
                }
            }
            // 二级菜单：active
            !isset($second['active']) && $second['active'] = in_array($routeUri, $secondUris);
        }
        // 删除空数组
        $menus = array_filter($menus);
    }

    /**
     * 三级菜单
     * @param array $menus
     * @param $routeUri
     * @param $secondUris
     * @throws \Casbin\Exceptions\CasbinException
     */
    protected function third(&$menus, $routeUri, &$secondUris)
    {
        foreach ($menus as $key => &$third) {
            // 三级菜单索引url
            $indexData = $this->getMenusIndexUrls($third, 3);
            // 权限验证
            $third['index'] = $this->getAuthUrl($indexData);
            if ($third['index'] === false) {
                unset($menus[$key]);
                continue;
            }
            // 三级菜单所有uri
            $thirdUris = [];
            if (isset($third['index'])) {
                $secondUris[] = $third['index'];
                $thirdUris[] = $third['index'];
            }
            if (isset($third['uris'])) {
                $uris = array_keys($third['uris']);
                $secondUris = array_merge($secondUris, $uris);
                $thirdUris = array_merge($thirdUris, $uris);
            }
            $third['active'] = in_array($routeUri, $thirdUris);
        }
    }

    /**
     * 获取指定菜单下的所有索引url
     * @param array $menus
     * @param int $level
     * @return array|null
     */
    protected function getMenusIndexUrls(&$menus, $level = 1)
    {
//        // 三级
//        if ($level === 3) {
//            return isset($menus['index']) ? [$menus['index']] : null;
//        }
        // 判断是否存在url
        if (!isset($menus['index']) && !isset($menus['submenu'])) {
            return null;
        }
        $data = [];
        if (isset($menus['index']) && !empty($menus['index'])) {
            $data[] = $menus['index'];
        }
        if (isset($menus['submenu']) && !empty($menus['submenu'])) {
            foreach ($menus['submenu'] as $submenu) {
                $submenuIndex = $this->getMenusIndexUrls($submenu, ++$level);
                !is_null($submenuIndex) && $data = array_merge($data, $submenuIndex);
            }
        }
        return array_unique($data);
    }

    /**
     * 取出通过权限验证urk作为index
     * @param $urls
     * @return bool
     * @throws \Casbin\Exceptions\CasbinException
     */
    protected function getAuthUrl($urls)
    {
        // 取出通过权限验证urk作为index
        foreach ($urls as $url) {
            if (Auth::checkPrivilege($url)) {
                return $url;
            }
        }
        return false;
    }
}
