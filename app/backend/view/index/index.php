<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table text-sm table-simple">
                    <tbody>
                    <tr>
                        <td>编号:</td>
                        <td>
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
                        </td>
                    </tr>
                    <tr>
                        <td>开始时间:</td>
                        <td>
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
                        </td>
                    </tr>
                    <tr>
                        <td>结束时间:</td>
                        <td>
                            <div class="form-group-sm form-inline">
                                <input type="text" class="form-control" style="width: 300px" id="reservationtime">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-sm btn-info"><i class="fa fa-search"></i> 搜索</button>
                            <button type="button" class="btn btn-sm btn-default"><i class="fa fa-close"></i> 重置</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a href="{php}echo url('test'){/php}" data-pjax>去测试页面</a>
                <div id="pjax-container"></div>
                <!--              <table class="table table-bordered">-->
                <!--                <tr>-->
                <!--                  <th style="width: 10px">#</th>-->
                <!--                  <th>Task</th>-->
                <!--                  <th>Progress</th>-->
                <!--                  <th style="width: 40px">Label</th>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                  <td>1.</td>-->
                <!--                  <td>Update software</td>-->
                <!--                  <td>-->
                <!--                    <div class="progress progress-xs">-->
                <!--                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>-->
                <!--                    </div>-->
                <!--                  </td>-->
                <!--                  <td><span class="badge bg-red">55%</span></td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                  <td>2.</td>-->
                <!--                  <td>Clean database</td>-->
                <!--                  <td>-->
                <!--                    <div class="progress progress-xs">-->
                <!--                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>-->
                <!--                    </div>-->
                <!--                  </td>-->
                <!--                  <td><span class="badge bg-yellow">70%</span></td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                  <td>3.</td>-->
                <!--                  <td>Cron job running</td>-->
                <!--                  <td>-->
                <!--                    <div class="progress progress-xs progress-striped active">-->
                <!--                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>-->
                <!--                    </div>-->
                <!--                  </td>-->
                <!--                  <td><span class="badge bg-light-blue">30%</span></td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                  <td>4.</td>-->
                <!--                  <td>Fix and squish bugs</td>-->
                <!--                  <td>-->
                <!--                    <div class="progress progress-xs progress-striped active">-->
                <!--                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>-->
                <!--                    </div>-->
                <!--                  </td>-->
                <!--                  <td><span class="badge bg-green">90%</span></td>-->
                <!--                </tr>-->
                <!--              </table>-->
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
