<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{$base_asset}/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$base_asset}/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$base_asset}/css/adminlte.min.css">
    <!--[if lt IE 9]>
    <script src="{$core_asset}/plugins/html5shiv.min.js"></script>
    <script src="{$core_asset}/plugins/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{$base_url}"><b>Admin</b>LTE</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">请输入账号密码登录</p>

        <form name="loginForm" action="" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="请输入账号" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="请输入密码" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <div class="help-block with-errors"></div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div>
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> 使用飞书登录</a>
        </div>
    </div>
</div>

<script src="{$base_asset}/plugins/jquery/jquery.min.js"></script>
<script src="{$base_asset}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{$base_asset}/js/adminlte.min.js"></script>
<script src="{$base_asset}/js/adminlte.min.js"></script>
<script>
    $(function () {
        $('form[name=loginForm]').validator().submit(function (e) {
            if (!e.isDefaultPrevented()) {
                e.preventDefault();
                var _this = $(this), $submit_btn = _this.find(':submit');
                $submit_btn.button('loading');
                $.ajax({
                    url: _this.attr('action'),
                    type: _this.attr('method'),
                    data: _this.serialize(),
                    success: function (resp) {
                        if (resp.success) {
                            toastr.success(resp.msg);
                            setTimeout(function () {
                                window.location.replace(resp.url);
                            }, 1000);
                        } else {
                            toastr.error(resp.msg);
                        }
                    },
                    error: function (error) {
                        toastr.error('请求君走丢了，请稍后再试...');
                        console.log(error);
                    },
                    complete: function () {
                        $submit_btn.button('reset');
                    }
                })
            }
        });
    });
</script>
</body>
</html>
