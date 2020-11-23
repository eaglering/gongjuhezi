<?php
declare(strict_types=1);

namespace app\backend\controller;

use app\backend\facade\Menu;
use app\core\controller\Controller;
use think\facade\View;

abstract class Base extends Controller
{
    protected $module;
    protected $controller;
    protected $action;
    protected $group;
    protected $routeUri;
    protected $identifier;

    protected $noLayoutAction = [
        'passport/login'
    ];

    /**
     * @throws \Casbin\Exceptions\CasbinException
     */
    public function initialize()
    {
        $this->getRouteInfo();
        $this->getUser();
        $this->layout();
    }

    /**
     * 获取登录用户信息
     */
    protected function getUser()
    {
        $this->identifier = $this->request->middleware('identifier');
        if ($this->identifier && empty($this->identifier['avatar'])) {
            $this->identifier['avatar'] = "/static/{$this->module}/img/user" . rand(1, $this->identifier['id'] % 8 + 1) . '.jpg';
        }
    }

    /**
     * 获取布局数据
     * @throws \Casbin\Exceptions\CasbinException
     */
    protected function layout()
    {
        if ($this->request->acceptHtml()) {
            !in_array($this->routeUri, $this->noLayoutAction) && View::config(['layout_on' => true]);
            View::assign([
                'base_url' => '/' . $this->module,
                'core_asset' => '/static',
                'base_asset' => '/static/' . $this->module,
                'upload_url' => '/uploads',
                'menus' => $this->menus(),
                'user' => $this->identifier,
                'breadcrumb' => $this->breadcrumb()
            ]);
        }
    }

    /**
     * 解析当前路由参数 （分组名称、控制器名称、方法名）
     */
    protected function getRouteInfo()
    {
        // 模块名称
        $this->module = $this->app->http->getName();
        // 控制器名称
        $this->controller = $this->request->controller(true);
        // 方法名称
        $this->action = $this->request->action(true);
        // 控制器分组 (用于定义所属模块)
        $groupStr = strstr($this->controller, '.', true);
        $this->group = $groupStr !== false ? $groupStr : $this->controller;
        // 当前uri
        $this->routeUri = $this->controller . '/' . $this->action;
    }

    /**
     * 获取菜单
     * @return array
     * @throws \Casbin\Exceptions\CasbinException
     */
    protected function menus() {
        static $menus = [];
        if (empty($menus)) {
            $menus = Menu::getMenus($this->routeUri, $this->group);
        }
        return $menus;
    }

    /**
     * 获取面包屑
     * @return array
     */
    protected function breadcrumb() {
        static $breadcrumb = [];
        if (empty($breadcrumb)) {
            $breadcrumb = Menu::getBreadcrumb($this->routeUri, $this->group);
        }
        return $breadcrumb;
    }

    protected function renderError($msg, $url = null, $data = [], $code = 0)
    {
        return $this->renderJson(false, $code, $msg, $data, $url);
    }

    protected function renderSuccess($msg = '', $data = [], $url = null, $code = 0)
    {
        return $this->renderJson(true, $code, $msg, $data, $url);
    }

    /**
     * @param array|boolean $success
     * @param int $code
     * @param string $msg
     * @param array $data
     * @param null $url
     * @return \think\response\Json
     */
    protected function renderJson($success, $code = 0, $msg = '', $data = [], $url = null)
    {
        $resp = compact('success', 'code', 'msg', 'data', 'url');
        if (is_array($success)) {
            $resp = array_intersect_key($success, $resp);
        }
        return json($resp);
    }
}
