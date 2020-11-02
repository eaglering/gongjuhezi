<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>{block name="title"}Bootstrap中文网{/block}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{block name='description'}Bootstrap是Twitter推出的一个用于前端开发的开源工具包。{/block}">
    <meta name="keywords" content="{block name='keyword'}Bootstrap,CSS,CSS框架,CSS framework,javascript,bootcss,bootstrap开发,bootstrap代码,bootstrap入门{/block}">
    <meta name="author" content="{block name='author'}Bootstrap中文网{/block}">
    <meta name="robots" content="index,follow">
    <meta name="application-name" content="{$Request.server.http_host}">

    <!--[if lt IE 9]>
    <script src="{$core_asset}/plugins/html5shiv.min.js"></script>
    <script src="{$core_asset}/plugins/respond.min.js"></script>
    <![endif]-->

    <!-- Favicons -->
    <!--    <link rel="apple-touch-icon-precomposed" href="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/ico/apple-touch-icon-precomposed.png">-->
    <!--    <link rel="shortcut icon" href="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/ico/favicon.ico">-->
    <link rel="canonical" href="http{if $Request.server.https}s{/if}://{$Request.server.http_host}/" />

    {block name="stylesheet"}
    <link href="{$base_asset}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{$base_asset}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{$base_asset}/css/site.min.css" rel="stylesheet">
    {/block}
    {block name="external_stylesheet"}
    {/block}
</head>
<body>

<div class="navbar navbar-fixed-top {block name='navbar'}navbar-inverse{/block}">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hidden-sm" href="http://www.bootcss.com" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'navbar-首页'])">Bootstrap中文网</a>
        </div>
        <div class="navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav">

                <li><a href="https://v3.bootcss.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'v3doc'])">Bootstrap3中文文档</a></li>
                <li><a href="https://v4.bootcss.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'v4doc'])">Bootstrap4中文文档</a></li>
                <li><a href="https://www.sasscss.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'sass'])">Sass 教程</a></li>
                <li><a href="https://less.bootcss.com" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'less'])">Less 教程</a></li>
                <li><a href="https://www.jquery123.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'jquery'])">jQuery API</a></li>
                <li><a class="reddot" href="https://www.youzhan.org/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'youzhan-main-nav'])">网站实例</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right hidden-sm">
                <li><a href="/about/" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'about'])">关于</a></li>
            </ul>
        </div>
    </div>
</div>

{block name="content"}{/block}

<footer class="footer ">
    <div class="container">
        <div class="row footer-top">
            <div class="col-md-6 col-lg-6">
                <h4>
                    <img src="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/img/logo.png">
                </h4>
                <p>我们一直致力于为广大开发者提供更多的优质技术文档和辅助开发工具！</p>
            </div>
            <div class="col-md-6  col-lg-6">
                <div class="row about">
                    <div class="col-sm-3">
                        <h4>关于</h4>
                        <ul class="list-unstyled">
                            <li><a href="/about/">关于我们</a></li>
                            <li><a href="/ad/">广告合作</a></li>
                            <li><a href="/links/">友情链接</a></li>
                            <li><a href="/hr/">招聘</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h4>联系方式</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://weibo.com/bootcss" title="Bootstrap中文网官方微博" target="_blank">新浪微博</a></li>
                            <li><a href="mailto:admin@bootcss.com">电子邮件</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h4>旗下网站</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://www.bootcdn.cn/" target="_blank">BootCDN</a></li>
                            <li><a href="https://pkg.phpcomposer.com/" target="_blank">Packagist中国镜像</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h4>特别致谢</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://www.maoyuncloud.com/" target="_blank">猫云</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <hr/>
        <div class="row footer-bottom">
            <ul class="list-inline text-center">
                <li><a href="http://www.beian.miit.gov.cn/" target="_blank">京ICP备11008151号-6</a></li><li>京公网安备11010802014853</li>
            </ul>
        </div>
    </div>
</footer>

{block name="javascript"}
<script type="text/javascript" src="{$base_asset}/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="{$base_asset}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{$base_asset}/plugins/jquery.unveil/js/jquery.unveil.min.js"></script>
<script type="text/javascript" src="{$base_asset}/plugins/jquery.scrollUp/js/jquery.scrollUp.min.js"></script>
<script type="text/javascript" src="{$base_asset}/plugins/toc.min.js"></script>
<script type="text/javascript" src="{$base_asset}/plugins/jquery.matchHeight/js/jquery.matchHeight.min.js"></script>
<script type="text/javascript" src="{$base_asset}/js/site.min.js"></script>
{/block}
{block name="external_javascript"}{/block}
</body>
</html>

