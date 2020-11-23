{include file="layout/breadcrumb" /}
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <button data-toggle-target="#filter-box" data-toggle-off="展开筛选" data-toggle-on="收起筛选" type="button" class="btn btn-flat btn-sm btn-default"><i class="fa fa-filter"></i> <span>收起筛选</span></button>
                    <div class="pull-right">
                        <button type="button" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-plus"></i> 新增</button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <form name="form" action="{:url('')}" data-pjax method="get" id="filter-box">
                        <input type="hidden" name="page" value="1"/>
                        <div class="row filter-box">
                            <div class="col-xs-3 col-md-2">搜索：</div>
                            <div class="col-xs-9 col-md-4">
                                <div class="form-group-sm form-inline">
                                    <input type="text" name="keyword" class="form-control" style="width: 200px" placeholder="搜索标题|子标题|关键字" value="{$Request.get.keyword}">
                                </div>
                            </div>
                            <div class="col-xs-3 col-md-2">分类：</div>
                            <div class="col-xs-9 col-md-4">
                                <div class="checkable-btn-group" data-value="{$Request.get.type|default=-1}">
                                    <div class="checkable-btn">
                                        <input type="radio" name="type" value="-1">
                                        <label>不限</label>
                                    </div>
                                    {foreach $types as $item}
                                    <div class="checkable-btn">
                                        <input type="radio" name="type" value="{$item.value}">
                                        <label>{$item.text}</label>
                                    </div>
                                    {/foreach}
                                </div>
                            </div>
                            <div class="col-xs-3 col-md-2">状态：</div>
                            <div class="col-xs-9 col-md-4">
                                <div class="checkable-btn-group" data-value="{$Request.get.is_publish|default=-1}">
                                    <div class="checkable-btn">
                                        <input type="radio" name="is_publish" value="-1">
                                        <label>不限</label>
                                    </div>
                                    <div class="checkable-btn">
                                        <input type="radio" name="is_publish" value="0">
                                        <label>禁用</label>
                                    </div>
                                    <div class="checkable-btn">
                                        <input type="radio" name="is_publish" value="1">
                                        <label>启用</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-md-2">外链：</div>
                            <div class="col-xs-9 col-md-4">
                                <div class="checkable-btn-group" data-value="{$Request.get.is_external|default=-1}">
                                    <div class="checkable-btn">
                                        <input type="radio" name="is_external" value="-1">
                                        <label>不限</label>
                                    </div>
                                    <div class="checkable-btn">
                                        <input type="radio" name="is_external" value="0">
                                        <label>内链</label>
                                    </div>
                                    <div class="checkable-btn">
                                        <input type="radio" name="is_external" value="1">
                                        <label>外链</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-md-2">创建时间：</div>
                            <div class="col-xs-9 col-md-21">
                                <div class="form-group-sm form-inline">
                                    <input type="text" class="form-control" readonly placeholder="请选择创建时间" style="width: 200px"
                                           name="created_at" value="{$Request.get.created_at}"
                                           data-widget="daterangepicker" data-from="created_at_from" data-to="created_at_to">
                                    <input type="hidden" name="created_at_from"/>
                                    <input type="hidden" name="created_at_to"/>
                                </div>
                            </div>

                        </div>
                        <div class="text-right" style="padding: 10px">
                            <button type="submit" class="btn btn-flat btn-xs btn-info"><i class="fa fa-search"></i> 搜索</button>&nbsp;&nbsp;&nbsp;
                            <button type="reset" class="btn btn-flat btn-xs btn-default"><i class="fa fa-close"></i> 重置</button>
                        </div>
                    </form>
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>分类</th>
                            <th>图标</th>
                            <th>标题</th>
                            <th>关键字</th>
                            <th>排序</th>
                            <th>状态</th>
                            <th>统计</th>
                            <th style="width: 150px;">操作</th>
                        </tr>
                        {foreach $list as $view}
                        <tr>
                            <td>{$view.id}</td>
                            <td>{$view.type_text}</td>
                            <td>
                                <img src="{$view.icon}" alt="{$view.icon}" height="30"/>
                            </td>
                            <td>
                                <a href="{$view.url}" target="_blank" title="{$view.url}">{$view.title}</a><br/>
                                <small>{$view.subtitle}</small>
                            </td>
                            <td>{$view.keyword}</td>
                            <td>{$view.sort}</td>
                            <td>
                                {if $view.is_publish}
                                <button type="button" class="btn btn-xs btn-flat btn-success" data-ajax data-url="{:url('offline', ['id'=>$view.id])}" data-body="确定要禁用【{$view.title}】吗？"><i class="fa fa-play"></i> 启用</button>
                                {else /}
                                <button type="button" class="btn btn-xs btn-flat btn-danger" data-ajax data-url="{:url('online', ['id'=>$view.id])}" data-body="确定要启用【{$view.title}】吗？"><i class="fa fa-stop"></i> 禁用</button>
                                {/if}
                            </td>
                            <td>
                                <small>查看：{$view.visit_count}</small><br/>
                                <small>收藏：{$view.favorite}</small>
                            </td>
                            <td>
                                <a class="btn btn-xs btn-flat btn-primary" href="{:url('update', ['id'=>$view.id])}" data-pjax><i class="fa fa-edit"></i> 编辑</a>
                                <button class="btn btn-xs btn-flat btn-danger" data-ajax data-url="{:url('delete', ['id'=>$view.id])}" data-body="确定要删除【{$view.title}】吗？"><i class="fa fa-trash-o"></i> 删除</button>
                            </td>
                        </tr>
                        {/foreach}
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {$list->render()|raw}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>
