<?php
declare(strict_types=1);

namespace app\core\model;

use think\Model;

class Setting extends Model
{
    /**
     * 获取器: 转义数组格式
     * @param $value
     * @return mixed
     */
    public function getValuesAttr($value)
    {
        return json_decode($value, true);
    }

    /**
     * 修改器: 转义成json格式
     * @param $value
     * @return string
     */
    public function setValuesAttr($value)
    {
        return json_encode($value);
    }

    public function defaultData()
    {
        return [
            'site' => [
                'key' => 'site',
                'describe' => '网站设置',
                'values' => [
                    'title' => '工具盒子',
                ]
            ],
            'mail' => [
                'key' => 'mail',
                'describe' => '邮箱设置',
                'values' => [
                    'default' => 'aliyun',
                    'engine' => [
                        'aliyun' => [
                            'host' => 'smtpdm.aliyun.com',
                            'port' => 25,
                            'username' => '',
                            'password' => '',
                            'from' => '',
                        ]
                    ]
                ]
            ],
            'storage' => [
                'key' => 'storage',
                'describe' => '上传设置',
                'values' => [
                    'default' => 'local',
                    'engine' => [
                        'local' => [],
                        'qiniu' => [
                            'bucket' => '',
                            'access_key' => '',
                            'secret_key' => '',
                            'domain' => 'http://'
                        ],
                        'aliyun' => [
                            'bucket' => '',
                            'access_key_id' => '',
                            'access_key_secret' => '',
                            'domain' => 'http://'
                        ],
                        'qcloud' => [
                            'bucket' => '',
                            'region' => '',
                            'secret_id' => '',
                            'secret_key' => '',
                            'domain' => 'http://'
                        ],
                    ]
                ],
            ],
        ];
    }
}
