<?php

namespace app\core\enum\toolsList;

class Type
{
    public static function data()
    {
        return [
            1 => [
                'text' => '站长类',
                'pinyin' => 'zzl',
                'value' => 1,
            ],
            2 => [
                'text' => '开发类',
                'pinyin' => 'kfl',
                'value' => 2
            ],
            3 => [
                'text' => '娱乐类',
                'pinyin' => 'yll',
                'value' => 3
            ],
            4 => [
                'text' => '便民',
                'pinyin' => 'bm',
                'value' => 4
            ]
        ];
    }
}
