<?php
declare (strict_types = 1);

namespace app\core\model\tools;

use think\Model;
use app\core\enum\tools\link\Type as TypeEnum;

/**
 * @mixin \think\Model
 */
class Link extends Model
{
    protected $name = 'tools_link';

    public function getTypeTextAttr($value, $data) {
        $map = TypeEnum::data();
        $type = intval($data['type']);
        return isset($map[$type]) ? $map[$type]['text'] : '其他';
    }
}
