{include file="layout/breadcrumb" /}
<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="fields-group">

                        <div class="form-group ">
                            <label class="col-sm-2  control-label">ID</label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        1&nbsp;
                                    </div>
                                    <!-- /.box-body -->
                                </div>


                            </div>
                        </div>
                        <div class="form-group  ">

                            <label for="slug" class="col-sm-2 asterisk control-label">标识</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                    <input type="text" id="slug" name="slug" value="administrator" class="form-control slug" placeholder="输入 标识" required="1">
                                </div>


                            </div>
                        </div>
                        <div class="form-group  ">

                            <label for="name" class="col-sm-2 asterisk control-label">名称</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                    <input type="text" id="name" name="name" value="Administrator" class="form-control name" placeholder="输入 名称" required="1">
                                </div>


                            </div>
                        </div>
                        <div class="form-group  ">

                            <label for="permissions" class="col-sm-2  control-label">权限</label>

                            <div class="col-sm-8">


                                <div class="bootstrap-duallistbox-container row moveonselect"> <div class="box1 col-md-6">   <label for="bootstrap-duallistbox-nonselected-list_permissions[]" style="display: none;"></label>   <span class="info-container">     <span class="info">总共 12 项</span>     <button type="button" class="btn clear1 pull-right btn-default btn-xs">显示全部</button>   </span>   <input class="filter form-control" type="text" placeholder="过滤">   <div class="btn-group buttons">     <button type="button" class="btn moveall btn-default" title="Move all">       <i class="glyphicon glyphicon-arrow-right"></i>       <i class="glyphicon glyphicon-arrow-right"></i>     </button>     <button type="button" class="btn move btn-default" title="Move selected">       <i class="glyphicon glyphicon-arrow-right"></i>     </button>   </div>   <select multiple="multiple" id="bootstrap-duallistbox-nonselected-list_permissions[]" class="form-control" name="permissions[]_helper1" style="height: 102px;"><option value="2">Dashboard</option><option value="3">Login</option><option value="4">User setting</option><option value="5">Auth management</option><option value="6">Admin Config</option><option value="7">Scheduling</option><option value="8">Logs</option><option value="9">Api tester</option><option value="10">Media manager</option><option value="11">Admin helpers</option><option value="12">Exceptions reporter</option><option value="13">ssssssssssssssssssssss</option></select> </div> <div class="box2 col-md-6">   <label for="bootstrap-duallistbox-selected-list_permissions[]" style="display: none;"></label>   <span class="info-container">     <span class="info">总共 1 项</span>     <button type="button" class="btn clear2 pull-right btn-default btn-xs">显示全部</button>   </span>   <input class="filter form-control" type="text" placeholder="过滤">   <div class="btn-group buttons">     <button type="button" class="btn remove btn-default" title="Remove selected">       <i class="glyphicon glyphicon-arrow-left"></i>     </button>     <button type="button" class="btn removeall btn-default" title="Remove all">       <i class="glyphicon glyphicon-arrow-left"></i>       <i class="glyphicon glyphicon-arrow-left"></i>     </button>   </div>   <select multiple="multiple" id="bootstrap-duallistbox-selected-list_permissions[]" class="form-control" name="permissions[]_helper2" style="height: 102px;"><option value="1" selected="">All permission</option></select> </div></div><select class="form-control permissions" style="width: 100%; display: none;" name="permissions[]" multiple="" data-placeholder="输入 权限" data-value="1"><option value="1" selected="">All permission</option>
                                    <option value="2">Dashboard</option>
                                    <option value="3">Login</option>
                                    <option value="4">User setting</option>
                                    <option value="5">Auth management</option>
                                    <option value="6">Admin Config</option>
                                    <option value="7">Scheduling</option>
                                    <option value="8">Logs</option>
                                    <option value="9">Api tester</option>
                                    <option value="10">Media manager</option>
                                    <option value="11">Admin helpers</option>
                                    <option value="12">Exceptions reporter</option>
                                    <option value="13">ssssssssssssssssssssss</option></select><input type="hidden" name="permissions[]">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="col-sm-2  control-label">创建时间</label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        &nbsp;
                                    </div>
                                    <!-- /.box-body -->
                                </div>


                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2  control-label">更新时间</label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        &nbsp;
                                    </div>
                                    <!-- /.box-body -->
                                </div>


                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
