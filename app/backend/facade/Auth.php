<?php

namespace app\backend\facade;

use app\backend\service\AuthService;
use think\Facade;

/**
 * Class Auth
 * @see AuthService
 * @package app\backend\facade
 * @mixin AuthService
 */
class Auth extends Facade
{
    protected static function getFacadeClass()
    {
        return AuthService::class;
    }
}
