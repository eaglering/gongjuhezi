<?php

namespace app\backend\facade;

use app\backend\service\MenuService;
use think\Facade;

/**
 * Class Menu
 * @see MenuService
 * @package app\backend\facade
 * @mixin MenuService
 */
class Menu extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeClass()
    {
        return MenuService::class;
    }
}
