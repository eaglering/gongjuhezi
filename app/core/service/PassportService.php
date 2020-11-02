<?php

namespace app\core\service;

use app\core\model\Admin as AdminModel;

class PassportService
{
    private $adminModel;

    public function __construct(AdminModel $adminModel)
    {
        $this->adminModel = $adminModel;
    }

    public function doLogin($username, $password, $ip)
    {
        $admin = $this->adminModel
            ->where('username', '=', $username)
            ->where('password_hash', '=', gjhz_hash($password))
            ->where('is_delete', '=', 0)
            ->find();
        if (!$admin) {
            return fnRet(false, '账号或密码不正确');
        }
        if (!$admin['status']) {
            return fnRet(false, '您的账号已被禁用');
        }
        session(config('session.identifier_key'), $admin);
        $admin->save([
            'last_login_at' => date('Y-m-d H:i:s'),
            'last_login_ip' => $ip
        ]);
        return fnRet(true);
    }
}
