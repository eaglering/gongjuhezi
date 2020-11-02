<?php
declare (strict_types = 1);

namespace app\core\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class Admin extends Model
{
    protected $hidden = [
        'password_hash',
        'is_deletet'
    ];
}
