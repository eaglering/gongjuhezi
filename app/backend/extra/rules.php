<?php

return [
    ['name' => '工具管理', 'submenu' => [
        ['name' => '工具列表', 'index' => 'tools/index'],
        ['name' => '查看工具', 'index' => 'tools/view'],
        ['name' => '新增工具', 'index' => 'tools/add'],
        ['name' => '编辑工具', 'index' => 'tools/edit'],
        ['name' => '删除工具', 'index' => 'tools/delete'],
        ['name' => '回收站', 'index' => 'tools/recycle']]
    ],
    ['name' => '系统设置', 'submenu' => [
        ['name' => '管理员管理', 'submenu' => [
            ['name' => '管理员列表', 'index' => 'setting.auth.admin/index'],
            ['name' => '新增管理员', 'index' => 'setting.auth.admin/add'],
            ['name' => '编辑管理员', 'index' => 'setting.auth.admin/edit'],
            ['name' => '删除管理员', 'index' => 'setting.auth.admin/delete']
        ]],
        ['name' => '角色管理', 'submenu' => [
            ['name' => '角色列表', 'index' => 'setting.auth.role/index'],
            ['name' => '新增角色', 'index' => 'setting.auth.role/add'],
            ['name' => '编辑角色', 'index' => 'setting.auth.role/edit'],
            ['name' => '删除角色', 'index' => 'setting.auth.role/delete']
        ]],
        ['name' => '授权管理', 'submenu' => [
            ['name' => '授权列表', 'index' => 'setting.auth.permission/index'],
            ['name' => '新增授权', 'index' => 'setting.auth.permission/add'],
            ['name' => '编辑授权', 'index' => 'setting.auth.permission/edit'],
            ['name' => '删除授权', 'index' => 'setting.auth.permission/delete']
        ]],
        ['name' => '清理缓存', 'index' => 'setting.cache/clear'],
        ['name' => '环境检测', 'index' => 'setting.science/index']]
    ]
];
