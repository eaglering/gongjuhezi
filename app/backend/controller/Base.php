<?php
declare(strict_types=1);

namespace app\backend\controller;

use app\backend\facade\Menu;
use app\core\controller\Controller;
use think\facade\View;

abstract class Base extends Controller
{
    private $controller;
    private $action;
    private $group;
    private $routeUri;

    protected $noLayoutAction = [
        'passport/login'
    ];

    public function initialize()
    {
        $this->getRouteInfo();
        $this->layout();
    }

    protected function layout()
    {
        if (!$this->request->isAjax()) {
            !in_array($this->routeUri, $this->noLayoutAction) && View::config(['layout_on' => true]);
            $module = $this->app->http->getName();
            View::assign([
                'base_url' => '/' . $module,
                'core_asset' => '/static',
                'base_asset' => '/static/' . $module,
                'upload_url' => '/uploads',
                'menus' => $this->menus()
            ]);
        }
    }

    /**
     * 解析当前路由参数 （分组名称、控制器名称、方法名）
     */
    protected function getRouteInfo()
    {
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

    protected function menus() {
        static $menus = [];
        if (empty($menus)) {
            $menus = Menu::getMenus($this->routeUri, $this->group);
        }
        return $menus;
    }

    protected function renderError($msg, $data = [], $url = null, $code = 0)
    {
        return $this->renderJson(false, $code, $msg, $data, $url);
    }

    protected function renderSuccess($msg, $data = [], $url = null, $code = 0)
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
