<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{$base_asset}/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$base_asset}/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$base_asset}/css/adminlte.min.css">
    <link rel="stylesheet" href="{$base_asset}/css/skin-blue.min.css">
    <link rel="stylesheet" href="{$base_asset}/css/app.css">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{$core_asset}/plugins/html5shiv.min.js"></script>
    <script type="text/javascript" src="{$core_asset}/plugins/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    {include file="layout/nav" /}
    {include file="layout/sidebar" /}
    <div class="content-wrapper">
        {include file="layout/breadcrumb" /}
        <section class="content" id="pjax-container">
        {__CONTENT__}
        </section>
    </div>
    {include file="layout/footer" /}
</div>
<script type="text/javascript" src="{$base_asset}/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="{$base_asset}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{$base_asset}/plugins/jquery.slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="{$base_asset}/plugins/fastclick/lib/fastclick.js"></script>
<script type="text/javascript" src="{$base_asset}/js/adminlte.min.js"></script>
<script type="text/javascript" src="{$base_asset}/js/app.js"></script>
</body>
</html>
