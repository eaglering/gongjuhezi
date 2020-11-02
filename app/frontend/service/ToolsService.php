<?php

namespace app\frontend\service;

use app\core\model\ToolsList;

class ToolsService
{
    private $toolsList;

    public function __construct(ToolsList $toolsList)
    {
        $this->toolsList = $toolsList;
    }

    public function getList($type) {
        $type && $this->toolsList->where('type', '=', $type);
        return $this->toolsList->where('is_publish', '=', 1)
            ->order(['sort' => 'desc'])
            ->append(['type_text', 'type_pinyin', 'name_pinyin'])
            ->select();
    }
}
