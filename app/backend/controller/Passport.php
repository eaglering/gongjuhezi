<?php
declare(strict_types=1);

namespace app\backend\controller;

use app\core\service\PassportService;

class Passport extends Base
{
    private $passportService;

    public function __construct(PassportService $passportService)
    {
        parent::__construct();
        $this->passportService = $passportService;
    }

    /**
     * 登录
     * @return \think\response\Json|\think\response\View
     */
    public function login()
    {
        if (!$this->request->isAjax()) {
            return view();
        }
        $params = $this->request->param();
        $validator = $this->validate($params, [
            'username' => 'require',
            'password' => 'require'
        ], [
            'username.require' => '账号必填',
            'password.require' => '密码必填'
        ]);
        if ($validator->getError()) {
            return $this->renderError($validator->getError());
        }
        $ip = $this->request->ip();
        $fnRet = $this->passportService->doLogin($params['username'], $params['password'], $ip);
        if ($fnRet['success']) {
            return $this->renderSuccess('登录成功，正在准备跳转..', [], url('index/index')->build());
        }
        return $this->renderJson($fnRet);
    }
}
