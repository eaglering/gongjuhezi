<?php
declare (strict_types = 1);

namespace app\frontend\controller;

use app\core\enum\link\Type as TypeEnum;
use app\frontend\service\ToolsService;
use think\App;

class Index extends Base
{
    private $toolsListService;

    public function __construct(ToolsService $toolsListService)
    {
        parent::__construct();
        $this->toolsListService = $toolsListService;
    }

    public function index()
    {
        $type = intval($this->request->get('type'));
        $typeEnum = TypeEnum::data();
        $toolsList = $this->toolsListService->getList($type);
        return view()->assign(compact('typeEnum', 'toolsList'));
    }
}
