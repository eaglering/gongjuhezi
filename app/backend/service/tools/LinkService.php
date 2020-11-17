<?php
declare(strict_types=1);

namespace app\backend\service\tools;

use app\backend\library\paginator\driver\Bootstrap;
use app\core\model\tools\Link as LinkModel;
use think\exception\HttpException;

class LinkService
{
    private $linkModel;

    public function __construct(LinkModel $linkModel)
    {
        $this->linkModel = $linkModel;
    }

    /**
     * @param $params
     * @return \think\Paginator
     * @throws \think\db\exception\DbException
     */
    public function list($params)
    {
        $params = array_merge([
            'keyword' => '',
            'type' => -1,
            'is_publish' => -1,
            'is_external' => -1,
            'listRows' => 15,
            'sort_by' => 'created_at_desc'
        ], $params);
        $where = $this->filterList($params);
        if ($params['sort_by'] == 'created_at_desc') {
            $sort = ['created_at' => 'desc'];
        } else {
            $sort = ['created_at' => 'asc'];
        }
        return $this->linkModel->append(['type_text'])
            ->where($where)
            ->order($sort)
            ->paginate(Bootstrap::getListRows());
    }

    protected function filterList($params)
    {
        $where = [];
        $params['keyword'] && $where[] = ['title|subtitle|keyword', 'like', "%{$params['keyword']}%"];
        $params['type'] > -1 && $where[] = ['type', '=', $params['type']];
        $params['is_publish'] > -1 && $where[] = ['is_publish', '=', $params['is_publish']];
        $params['is_external'] > -1 && $where[] = ['is_external', '=', $params['is_external']];
        !empty($params['created_at_from']) && $where[] = ['created_at', '>=', format_date($params['created_at_from'], false)];
        !empty($params['created_at_to']) && $where[] = ['created_at', '<=', format_date($params['created_at_to'], true)];
        return $where;
    }

    public function view($id)
    {
        $data = $this->findModel($id);
        return fnRet(true, '', $data);
    }

    public function create($data)
    {
        $whitelist = ['title', 'subtitle', 'keyword', 'type', 'url', 'icon', 'sort', 'is_publish', 'is_external'];
        $this->linkModel->allowField($whitelist)->save($data);
        return fnRet(true);
    }

    public function update($id, $data)
    {
        $whitelist = ['title', 'subtitle', 'keyword', 'type', 'url', 'icon', 'sort', 'is_publish', 'is_external'];
        $this->findModel($id)->allowField($whitelist)->save($data);
        return fnRet(true);
    }

    public function delete($id)
    {
        try {
            $model = $this->findModel($id);
            $model->delete();
        } catch (\Throwable $e) {
        }
        return fnRet(true);
    }

    public function offline($id)
    {
        $this->findModel($id)->save(['is_publish' => 0]);
        return fnRet(true);
    }

    public function online($id)
    {
        $this->findModel($id)->save(['is_publish' => 1]);
        return fnRet(true);
    }

    protected function findModel($id)
    {
        $tools = $this->linkModel->where('id', '=', $id)->find();
        if (!$tools) {
            throw new HttpException(400, '查询数据失败');
        }
        return $tools;
    }
}
