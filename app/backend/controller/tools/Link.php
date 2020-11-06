<?php
declare(strict_types=1);

namespace app\backend\controller\tools;

use app\backend\controller\Base;
use app\backend\service\tools\LinkService;

class Link extends Base
{
    private $toolsService;

    public function __construct(LinkService $toolsService)
    {
        parent::__construct();
        $this->toolsService = $toolsService;
    }

    public function index()
    {
        $params = $this->request->get();
//        $this->toolsService->list($params);
        return view();
    }
}
