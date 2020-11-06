<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <button data-toggle-target="#filter-box" data-toggle-off="展开筛选" data-toggle-on="收起筛选" type="button" class="btn btn-flat btn-xs btn-default"><i class="fa fa-filter"></i> <span>展开筛选</span></button>
                <div class="pull-right">
                    <button type="button" class="btn btn-flat btn-xs btn-primary"><i class="fa fa-plus"></i> 新增</button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <form name="form" data-pjax method="get" id="filter-box" style="display: none">
                    <div class="row filter-box">
                        <div class="col-sm-3 col-md-1">编号：</div>
                        <div class="col-sm-9 col-md-5">
                            <div class="checkable-btn-group" data-value="0">
                                <div class="checkable-btn">
                                    <input type="radio" name="radio1" value="1">
                                    <label>Radio</label>
                                </div>
                                <div class="checkable-btn">
                                    <input type="radio" name="radio1" value="2">
                                    <label>Radio</label>
                                </div>
                                <div class="checkable-btn">
                                    <input type="radio" name="radio1" value="3">
                                    <label>Radio</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-1">开始时间：</div>
                        <div class="col-sm-9 col-md-5">
                            <div class="checkable-btn-group" data-value="0">
                                <div class="checkable-btn">
                                    <input type="checkbox" name="check1" value="1">
                                    <label>选项一</label>
                                </div>
                                <div class="checkable-btn">
                                    <input type="checkbox" name="check1" value="2">
                                    <label>选项二</label>
                                </div>
                                <div class="checkable-btn">
                                    <input type="checkbox" name="check1" value="3">
                                    <label>选项三</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-1">结束时间：</div>
                        <div class="col-sm-9 col-md-11">
                            <div class="form-group-sm form-inline">
                                <input type="text" class="form-control" style="width: 300px" id="reservationtime">
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-1">&nbsp;</div>
                        <div class="col-sm-9 col-md-11">
                            <button type="button" class="btn btn-flat btn-xs btn-info"><i class="fa fa-search"></i> 搜索</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-flat btn-xs btn-default"><i class="fa fa-close"></i> 重置</button>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Progress</th>
                        <th style="width: 40px">Label</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Update software</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-red">55%</span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Clean database</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-yellow">70%</span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Cron job running</td>
                        <td>
                            <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-light-blue">30%</span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Fix and squish bugs</td>
                        <td>
                            <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-green">90%</span></td>
                    </tr>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
