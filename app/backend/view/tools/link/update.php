{include file="layout/breadcrumb" /}
<div class="content tools-link-update">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-default">
                <div class="box-body">
                    <form data-ajax method="post" class="form form-horizontal">
                        <div class="widget widget-primary">
                            <div class="widget-head">基本信息</div>
                            <div class="widget-body">
                                <div class="row">
                                    <div class="col-xs-12 col-md-2">
                                        <div class=""></div>
                                    </div>
                                    <div class="col-xs-12 col-md-10">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1 text-right">
                                                <label class="control-label required">标题</label>
                                            </div>
                                            <div class="col-xs-9 col-md-5">
                                                <div class="form-group">
                                                    <input name="title" type="text" class="form-control" placeholder="请输入标题"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-md-1 text-right">
                                                <label class="control-label required">子标题</label>
                                            </div>
                                            <div class="col-xs-9 col-md-5">
                                                <div class="form-group">
                                                    <input name="title" type="text" class="form-control" placeholder="请输入子标题"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-md-1 text-right">
                                                <label class="control-label required">关键字</label>
                                            </div>
                                            <div class="col-xs-9 col-md-11">
                                                <div class="form-group">
                                            <textarea name="keyword" class="form-control" placeholder="请输入关键字"
                                                      required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-md-1 text-right">
                                                <label class="control-label required">分类</label>
                                            </div>
                                            <div class="col-xs-9 col-md-5">
                                                <div class="form-group">
                                                    <select name="type" class="form-control" data-widget="select2" required>
                                                        <option value="">请选择分类</option>
                                                        {foreach $types as $item}
                                                        <option value="{$item.value}">{$item.text}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-md-1 text-right">
                                                <label class="control-label required">排序</label>
                                            </div>
                                            <div class="col-xs-9 col-md-5">
                                                <div class="form-group">
                                                    <input name="title" type="number" min="0" class="form-control"
                                                           placeholder="请输入排序值，大值在前" required>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-md-1 text-right">
                                                <label class="control-label required">外链</label>
                                            </div>
                                            <div class="col-xs-9 col-md-5">
                                                <div class="form-group">
                                                    <input name="is_external" data-widget="switch"
                                                           data-on-text="是" data-off-text="否" type="checkbox"
                                                           class="form-control" value="1" required>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-md-1 text-right">
                                                <label class="control-label required">地址</label>
                                            </div>
                                            <div class="col-xs-9 col-md-5">
                                                <div class="form-group">
                                                    <input name="url" type="text" class="form-control" placeholder="请输入链接地址"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-md-1 text-right">
                                                <label class="control-label">查看数</label>
                                            </div>
                                            <div class="col-xs-9 col-md-5">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="visit_count" type="number" min="0" class="form-control"
                                                               disabled placeholder="请输入查看数">
                                                        <span class="input-group-addon" data-toggle-disabled>
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-md-1 text-right">
                                                <label class="control-label">收藏数</label>
                                            </div>
                                            <div class="col-xs-9 col-md-5">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="favorite" type="number" min="0" class="form-control" disabled
                                                               placeholder="请输入收藏数">
                                                        <span class="input-group-addon" data-toggle-disabled>
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-foot">
                                <button type="submit" class="btn btn-sm btn-flat btn-info">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('.tools-link-update span[data-toggle-disabled]').click(function () {
            var $this = $(this), input = $this.siblings('input'), disabled = input.prop('disabled');
            if (disabled) {
                input.removeAttr('disabled');
            } else {
                input.attr('disabled', true);
            }
        });
    });
</script>
