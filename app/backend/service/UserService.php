<?php
declare(strict_types=1);

namespace app\backend\service;

class UserService
{
    private $userModel;

    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }
}
