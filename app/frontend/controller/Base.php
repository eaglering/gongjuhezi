<?php
declare(strict_types=1);

namespace app\frontend\controller;

use app\core\controller\Controller;
use think\App;
use think\facade\View;

abstract class Base extends Controller
{
    // 初始化
    protected function initialize()
    {
        $module = $this->app->http->getName();
        View::assign([
            'base_url' => '/',
            'core_asset' => '/static',
            'base_asset' => '/static/' . $module,
            'upload_url' => '/uploads'
        ]);
    }
}
