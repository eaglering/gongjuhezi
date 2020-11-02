<?php
declare(strict_types=1);

namespace app\backend\middleware;

use think\Request;

class Login
{
    protected $allowAction = [
        'passport/login',
        'passport/getCode'
    ];

    public function handle(Request $request, \Closure $next)
    {
        $url = $request->controller(true) . '/' . $request->action(true);
        if (in_array($url, $this->allowAction)) {
            return $next($request);
        }
        $identifier = session(config('session.identifier_key'));
        if ($identifier) {
            $request->identifier = $identifier;
            return $next($request);
        }
        return redirect(url('passport/login')->build());
    }
}
