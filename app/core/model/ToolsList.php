<?php
declare (strict_types = 1);

namespace app\core\model;

use think\Model;
use app\core\enum\toolsList\Type as TypeEnum;

/**
 * @mixin \think\Model
 */
class ToolsList extends Model
{
    public function getTypeTextAttr($value, $data) {
        $map = TypeEnum::data();
        $type = intval($data['type']);
        return isset($map[$type]) ? $map[$type]['text'] : '其他';
    }

    public function getTypePinyinAttr($value, $data) {
        $map = TypeEnum::data();
        $type = intval($data['type']);
        return isset($map[$type]) ? $map[$type]['pinyin'] : 'qt';
    }

    public function getNamePinyinAttr($value, $data) {
        return pinyin($data['name'], 'first');
    }
}
