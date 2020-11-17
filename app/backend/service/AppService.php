<?php
declare(strict_types=1);

namespace app\backend\service;

use think\Service;

class AppService extends Service
{
    public function register()
    {
        // 服务注册
        echo 'xxx';die;
    }

    public function boot()
    {
        // 服务启动
    }
}
