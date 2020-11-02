<?php
declare(strict_types=1);

namespace app\backend\service;

use tauthz\facade\Enforcer;
use think\Request;

class AuthService
{
    private $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    /**
     * 检测是否有权限
     * @param $url
     * @param bool $strict 批量验证下是否需要全部验证通过
     * @return bool
     * @throws \Casbin\Exceptions\CasbinException
     */
    public function checkPrivilege($url, $strict = true)
    {
        if (!is_array($url)) {
            return $this->checkAccess($url);
        }
        foreach ($url as $val) {
            if ($strict && !$this->checkAccess($val)) {
                return false;
            }
            if (!$strict && $this->checkAccess($val)) {
                return true;
            }
        }
        return false;
    }

    /**
     * 获取用户信息
     * @return array|null
     */
    protected function getIdentifier()
    {
        return $this->request->middleware('identifier');
    }

    /**
     * 检测权限
     * @param $url
     * @param array $allowAction
     * @return bool
     * @throws \Casbin\Exceptions\CasbinException
     */
    public function checkAccess($url, $allowAction = [])
    {
        $identifier = $this->getIdentifier();
        if ($identifier && $identifier['is_super']) {
            return true;
        }
        // 验证当前请求是否在白名单
        if ($allowAction && in_array($url, $allowAction)) {
            return true;
        }
        // 通配符支持
        foreach ($allowAction as $action) {
            if (strpos($action, '*') !== false
                && preg_match('/^' . str_replace('/', '\/', $action) . '/', $url)
            ) {
                return true;
            }
        }
        // 获取当前用户的权限url列表
        list($controller, $action) = explode('/', $url);
        if ($identifier && Enforcer::enforce($identifier['username'], $controller, $action)) {
            return true;
        }
        return false;
    }
}
