<?php
use app\core\Provider\ExceptionHandle;
use app\core\Provider\Request;

// 容器Provider定义文件
return [
    'think\Request'          => Request::class,
    'think\exception\Handle' => ExceptionHandle::class,
];
