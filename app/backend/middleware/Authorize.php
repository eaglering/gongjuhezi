<?php
declare(strict_types=1);

namespace app\backend\middleware;

use app\backend\facade\Auth;
use think\exception\HttpException;
use think\Request;

class Authorize
{
    protected $allowAction = [
        // 入口
        'index/index',
        // 用户登录
        'passport/login',
        // 退出登录
        'passport/logout',
        // 修改当前用户信息
        'store.user/renew',
        // 文件库
        'upload.library/*',
        // 图片上传
        'upload/image',
        // 数据选择
        'data/*',
    ];

    public function handle(Request $request, \Closure $next)
    {
        $url = $request->controller(true) . '/' . $request->action(true);
        if (!Auth::checkAccess($url, $this->allowAction)) {
            throw new HttpException(403);
        }
        return $next($request);
    }
}
