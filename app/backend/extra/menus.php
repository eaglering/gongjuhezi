<?php

return [
    'index' => [
        'name' => '首页',
        'icon' => 'icon-home',
        'index' => 'index/index'
    ],
    'tools' => [
        'name' => '工具管理',
        'icon' => 'icon-tools',
        'submenu' => [
            [
                'name' => '工具列表',
                'index' => 'tools/index',
                'uris' => [
                    'tools/add',
                    'tools/edit',
                    'tools/delete'
                ]
            ],
            [
                'name' => '回收站',
                'index' => 'tools/recycle'
            ]
        ]
    ],
    'setting' => [
        'name' => '系统设置',
        'icon' => 'icon-setting',
        'submenu' => [
            [
                'name' => '权限管理',
                'index' => 'setting.auth/index',
                'submenu' => [
                    [
                        'name' => '用户列表',
                        'index' => 'setting.auth.user/index',
                        'uris' => [
                            'setting.auth.user/add',
                            'setting.auth.user/edit',
                            'setting.auth.user/delete'
                        ]
                    ],
                    [
                        'name' => '角色列表',
                        'index' => 'setting.auth.role/index',
                        'uris' => [
                            'setting.auth.role/add',
                            'setting.auth.role/edit',
                            'setting.auth.role/delete'
                        ]
                    ],
                    [
                        'name' => '权限列表',
                        'index' => 'setting.auth.user/index',
                        'uris' => [
                            'setting.auth.permission/add',
                            'setting.auth.permission/edit',
                            'setting.auth.permission/delete'
                        ]
                    ]
                ]
            ],
            [
                'name' => '清理缓存',
                'index' => 'setting.cache/clear'
            ],
            [
                'name' => '环境检测',
                'index' => 'setting.science/index'
            ],
        ],
    ]
];
