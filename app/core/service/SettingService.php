<?php
declare(strict_types=1);

namespace app\core\service;

use app\core\model\Setting as SettingModel;
use app\core\enum\setting\Describe as DescribeEnum;
use think\facade\Cache;

class SettingService
{
    private $settingModel;

    public function __construct(SettingModel $settingModel)
    {
        $this->settingModel = $settingModel;
    }

    /**
     * 获取指定项设置
     * @param $key
     * @return array|mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function getItem($key)
    {
        $data = $this->all();
        return isset($data[$key]) ? $data[$key]['values'] : [];
    }

    /**
     * 获取设置项信息
     * @param $key
     * @return array|\think\Model|null
     */
    public function view($key)
    {
        return $this->findModel($key);
    }

    /**
     * 全局缓存: 系统设置
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function all()
    {
        if (!$data = Cache::get('setting')) {
            $setting = $this->settingModel->select()->toArray();
            $data = array_column($setting, null, 'key');
            Cache::set('setting', $data);
        }
        return $this->getMergeData($data);
    }

    /**
     * 合并用户设置与默认数据
     * @param $userData
     * @return array
     */
    protected function getMergeData($userData)
    {
        $defaultData = $this->settingModel->defaultData();
        return array_merge_multiple($defaultData, $userData);
    }

    public function update($key, $values)
    {
        $model = $this->findModel($key);
        if (!$model) $model = $this->settingModel;
        Cache::delete('setting');
        return $model->save([
            'key' => $key,
            'describe' => DescribeEnum::data()[$key]['text'],
            'values' => $values,
        ]);
    }

    protected function findModel($key)
    {
        return $this->settingModel->where('key', '=', $key)->find();
    }
}
