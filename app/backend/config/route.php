<?php

return [
    'middleware' => [
        \app\backend\middleware\Login::class,
        \app\backend\middleware\Authorize::class
    ]
];
