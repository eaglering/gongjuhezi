<?php
declare(strict_types=1);

namespace app\backend\controller;

class User extends Base
{
    private $userService;

    public function __construct()
    {
        parent::__construct();
    }
}
