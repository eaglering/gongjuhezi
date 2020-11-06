<?php

return [
    'index' => [
        'title' => '首页',
        'subtitle' => '',
        'icon' => 'fa-home',
        'index' => 'index/index'
    ],
    'tools' => [
        'title' => '工具管理',
        'subtitle' => '',
        'icon' => 'fa-external-link',
        'submenu' => [
            [
                'title' => '好玩工具',
                'subtitle' => '',
                'submenu' => [
                    [
                        'title' => '工具列表',
                        'subtitle' => '',
                        'index' => 'tools.link/index',
                        'uris' => [
                            'tools.link/add' => ['title' => '新增', 'subtitle' => ''],
                            'tools.link/edit' => ['title' => '编辑', 'subtitle' => ''],
                            'tools.link/delete' => ['title' => '删除', 'subtitle' => '']
                        ]
                    ]
                ]
            ],
            [
                'title' => '回收站',
                'subtitle' => '',
                'index' => 'tools.link/recycle'
            ]
        ]
    ],
    'setting' => [
        'title' => '系统设置',
        'subtitle' => '',
        'icon' => 'fa-cogs',
        'submenu' => [
            [
                'title' => '权限管理',
                'subtitle' => '',
                'icon' => 'fa-user',
                'index' => 'setting.auth/index',
                'submenu' => [
                    [
                        'title' => '用户列表',
                        'subtitle' => '',
                        'index' => 'setting.auth.user/index',
                        'uris' => [
                            'setting.auth.user/add' => ['title' => '新增', 'subtitle' => ''],
                            'setting.auth.user/edit' => ['title' => '编辑', 'subtitle' => ''],
                            'setting.auth.user/delete' => ['title' => '删除', 'subtitle' => '']
                        ]
                    ],
                    [
                        'title' => '角色列表',
                        'subtitle' => '',
                        'index' => 'setting.auth.role/index',
                        'uris' => [
                            'setting.auth.role/add' => ['title' => '新增', 'subtitle' => ''],
                            'setting.auth.role/edit' => ['title' => '编辑', 'subtitle' => ''],
                            'setting.auth.role/delete' => ['title' => '删除', 'subtitle' => '']
                        ]
                    ],
                    [
                        'title' => '权限列表',
                        'subtitle' => '',
                        'index' => 'setting.auth.user/index',
                        'uris' => [
                            'setting.auth.permission/add' => ['title' => '新增', 'subtitle' => ''],
                            'setting.auth.permission/edit' => ['title' => '编辑', 'subtitle' => ''],
                            'setting.auth.permission/delete' => ['title' => '删除', 'subtitle' => '']
                        ]
                    ]
                ]
            ],
            [
                'title' => '清理缓存',
                'subtitle' => '',
                'icon' => 'fa-recycle',
                'index' => 'setting.cache/clear'
            ],
            [
                'title' => '环境检测',
                'subtitle' => '',
                'icon' => 'fa-envira',
                'index' => 'setting.science/index'
            ],
        ],
    ]
];
