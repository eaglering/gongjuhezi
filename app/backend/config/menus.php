<?php

return [
    'index' => [
        'title' => '首页',
        'icon' => 'fa-home',
        'index' => 'index/index'
    ],
    'tools' => [
        'title' => '工具管理',
        'icon' => 'fa-external-link',
        'submenu' => [
            [
                'title' => '好玩工具',
                'submenu' => [
                    [
                        'title' => '工具列表',
                        'index' => 'tools.link/index',
                        'uris' => [
                            'tools.link/create' => ['title' => '新增', 'subtitle' => ''],
                            'tools.link/view' => ['title' => '查看', 'subtitle' => '']
                        ]
                    ]
                ]
            ],
            [
                'title' => '回收站',
                'index' => 'tools.link/recycle'
            ]
        ]
    ],
    'setting' => [
        'title' => '系统设置',
        'icon' => 'fa-cogs',
        'submenu' => [
            [
                'title' => '权限管理',
                'icon' => 'fa-user',
                'index' => 'setting.auth/index',
                'submenu' => [
                    [
                        'title' => '用户列表',
                        'index' => 'setting.auth.user/index',
                        'uris' => [
                            'setting.auth.user/create' => ['title' => '新增', 'subtitle' => ''],
                            'setting.auth.user/view' => ['title' => '查看', 'subtitle' => '']
                        ]
                    ],
                    [
                        'title' => '角色列表',
                        'index' => 'setting.auth.role/index',
                        'uris' => [
                            'setting.auth.role/create' => ['title' => '新增', 'subtitle' => ''],
                            'setting.auth.role/view' => ['title' => '查看', 'subtitle' => '']
                        ]
                    ],
                    [
                        'title' => '权限列表',
                        'index' => 'setting.auth.user/index',
                        'uris' => [
                            'setting.auth.permission/create' => ['title' => '新增', 'subtitle' => ''],
                            'setting.auth.permission/view' => ['title' => '查看', 'subtitle' => '']
                        ]
                    ]
                ]
            ],
            [
                'title' => '清理缓存',
                'icon' => 'fa-recycle',
                'index' => 'setting.cache/clear'
            ],
            [
                'title' => '环境检测',
                'icon' => 'fa-envira',
                'index' => 'setting.science/index'
            ],
        ],
    ]
];
