<?php
namespace app\core\provider;

// 应用请求对象类
class Request extends \think\Request
{
    public function acceptHtml() {
        $accept = $this->header('accept', 'text/html');
        return is_string($accept) && strpos($accept, 'text/html') !== false;
    }
}
