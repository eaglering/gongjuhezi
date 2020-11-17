<?php
declare(strict_types=1);

namespace app\core\enum\setting;

class Describe
{
    public static function data()
    {
        return [
            'site' => [
                'text' => '网站设置',
                'value' => 'site'
            ],
            'mail' => [
                'text' => '邮箱设置',
                'value' => 'mail'
            ],
            'storage' => [
                'text' => '存储设置',
                'value' => 'storage'
            ]
        ];
    }
}
