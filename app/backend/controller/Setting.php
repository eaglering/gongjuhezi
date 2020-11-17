<?php
declare(strict_types=1);

namespace app\backend\controller;

use app\core\service\SettingService;

class Setting extends Base
{
    private $settingService;

    public function __construct(SettingService $settingService)
    {
        parent::__construct();
        $this->settingService = $settingService;
    }

    public function site()
    {
        return $this->updateEvent('site');
    }

    public function mail()
    {
        return $this->updateEvent('mail');
    }

    public function storage()
    {
        return $this->updateEvent('storage');
    }

    /**
     * 更新设置事件
     * @param $key
     * @param array $vars
     * @return \think\response\Json|\think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    private function updateEvent($key, $vars = [])
    {
        if (!$this->request->isAjax()) {
            $vars['values'] = $this->settingService->getItem($key);
            return view($key)->assign($vars);
        }
        $params = $this->request->post($key);
        $fn = $this->settingService->update($key, $params);
        if ($fn['success']) return $this->renderSuccess();
        return $this->renderError($fn['msg']);
    }
}
