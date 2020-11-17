<?php
namespace app\backend\library\paginator\driver;

use think\facade\Request;

class Bootstrap extends \think\paginator\driver\Bootstrap
{
    protected static $listRowsRange = [
        15, 50, 100
    ];

    public static function getListRows()
    {
        $listRows = Request::get('limit');
        return in_array($listRows, self::$listRowsRange) ? $listRows : 15;
    }

    /**
     * 批量生成页码按钮.
     *
     * @param  array $urls
     * @return string
     */
    protected function getUrlLinks(array $urls): string
    {
        $html = '';
        foreach ($urls as $page => $url) {
            $html .= $this->getPageLinkWrapper($page, $page);
        }
        return $html;
    }

    /**
     * 生成一个可点击的按钮
     *
     * @param  string $url
     * @param  string $page
     * @return string
     */
    protected function getAvailablePageWrapper(string $url, string $page): string
    {
        return '<li><a href="javascript:void(0)" data-widget="paginator-page" data-page="' . $url . '">' . $page . '</a></li>';
    }

    /**
     * 上一页按钮
     * @param string $text
     * @return string
     */
    protected function getPreviousButton(string $text = "&laquo;"): string
    {
        if ($this->currentPage() <= 1) {
            return $this->getDisabledTextWrapper($text);
        }
        return $this->getPageLinkWrapper($this->currentPage() - 1, $text);
    }

    /**
     * 下一页按钮
     * @param string $text
     * @return string
     */
    protected function getNextButton(string $text = '&raquo;'): string
    {
        if (!$this->hasMore) {
            return $this->getDisabledTextWrapper($text);
        }
        return $this->getPageLinkWrapper($this->currentPage() + 1, $text);
    }

    /**
     * 渲染分页器
     * @return string
     */
    protected function listRowsRange()
    {
        $select = '<select class="form-control" data-widget="paginator-list-rows" name="listRows">';
        foreach (self::$listRowsRange as $listRow) {
            $selected = $listRow == $this->listRows() ? 'selected' : '';
            $select .= sprintf('<option value="%d" %s>%d</option>', $listRow, $selected, $listRow);
        }
        $select .= '</select>';
        return $select;
    }

    /**
     * 电梯
     * @return string
     */
    protected function elevator()
    {
        return sprintf('前往 <input data-widget="paginator-elevator" type="tel" min="1" max="%d" name="page" class="form-control" style="width:50px"/> 页</div>', $this->lastPage());
    }

    /**
     * 渲染分页html
     * @return mixed
     */
    public function render()
    {
        if ($this->simple) {
            return sprintf(
                '<ul class="pager">%s %s</ul>',
                $this->getPreviousButton(),
                $this->getNextButton()
            );
        } else {
            return sprintf(
                '共 %d 条数据，当前 %d/%d 页<div class="form-group-sm form-inline pull-right">每页 %s 条 <ul class="pagination pagination-sm" style="vertical-align:bottom;margin:0 10px">%s %s %s</ul> %s',
                $this->total(),
                $this->currentPage(),
                $this->lastPage(),
                $this->listRowsRange(),
                $this->getPreviousButton('上一页'),
                $this->getLinks(),
                $this->getNextButton('下一页'),
                $this->elevator()
            );
        }
    }
}
