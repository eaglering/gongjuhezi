<?php
declare(strict_types=1);

namespace app\backend\controller\tools;

use app\backend\controller\Base;
use app\backend\service\tools\LinkService;
use app\core\enum\tools\link\Type as TypeEnum;

class Link extends Base
{
    private $linkService;

    public function __construct(LinkService $linkService)
    {
        parent::__construct();
        $this->linkService = $linkService;
    }

    public function index()
    {
        $params = $this->request->get();
        $list = $this->linkService->list($params);
        $types = TypeEnum::data();
        return view()->assign(compact('list', 'types'));
    }

    public function view($id)
    {
        $view = $this->linkService->view($id);
        return view()->assign(compact('view'));
    }

    public function create()
    {
        if ($this->request->acceptHtml()) {
            return view();
        }
        $params = $this->request->post();
        $fn = $this->linkService->create($params);
        if (!$fn['success']) {
            return $this->renderError($fn['msg']);
        }
        return $this->renderSuccess();
    }

    public function update($id)
    {
        if ($this->request->acceptHtml()) {
            $view = $this->linkService->view($id);
            $types = TypeEnum::data();
            return view()->assign(compact('view', 'types'));
        }
        $params = $this->request->post();
        $fn = $this->linkService->update($id, $params);
        if (!$fn['success']) {
            return $this->renderError($fn['msg']);
        }
        return $this->renderSuccess();
    }

    public function delete($id)
    {
        $fn = $this->linkService->delete($id);
        if (!$fn['success']) {
            return $this->renderError($fn['msg']);
        }
        return $this->renderSuccess();
    }

    public function online($id)
    {
        $fn = $this->linkService->online($id);
        if (!$fn['success']) {
            return $this->renderError($fn['msg']);
        }
        return $this->renderSuccess();
    }

    public function offline($id)
    {
        $fn = $this->linkService->offline($id);
        if (!$fn['success']) {
            return $this->renderError($fn['msg']);
        }
        return $this->renderSuccess();
    }
}
