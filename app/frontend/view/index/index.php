{extend name="layout/layout" /}

{block name="content"}
<div class="jumbotron masthead">
    <div class="container">
        <h1>Bootstrap</h1>
        <h3 class="clearfix">&nbsp;</h3>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" placeholder="请输入工具名称">
                    <span class="input-group-btn">
                        <button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
                    </span>
                </div>
                <div class="clearfix">&nbsp;</div>
                <ul class="masthead-links">
                    <li>
                        <a href="https://v2.bootcss.com/" target="_blank" role="button" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'masthead-Bootstrap2中文文档'])">Bootstrap2中文文档(v2.3.2)</a>
                    </li><li>
                        <a href="https://v2.bootcss.com/" target="_blank" role="button" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'masthead-Bootstrap2中文文档'])">Bootstrap2中文文档(v2.3.2)</a>
                    </li><li>
                        <a href="https://v2.bootcss.com/" target="_blank" role="button" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'masthead-Bootstrap2中文文档'])">Bootstrap2中文文档(v2.3.2)</a>
                    </li><li>
                        <a href="https://v2.bootcss.com/" target="_blank" role="button" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'masthead-Bootstrap2中文文档'])">Bootstrap2中文文档(v2.3.2)</a>
                    </li><li>
                        <a href="https://v2.bootcss.com/" target="_blank" role="button" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'masthead-Bootstrap2中文文档'])">Bootstrap2中文文档(v2.3.2)</a>
                    </li><li>
                        <a href="https://v2.bootcss.com/" target="_blank" role="button" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'masthead-Bootstrap2中文文档'])">Bootstrap2中文文档(v2.3.2)</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">热狗</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">热狗</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">热狗</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">热狗</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">热狗</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="container projects">

    <div class="projects-header page-header">
        <h2>Bootstrap相关优质项目推荐</h2>
        <p>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
    </div>

    <div class="row">
        {foreach $toolsList as $vo}
        <div class="col-sm-6 col-md-4 col-lg-3 ">
            <div class="thumbnail">
                <a href="https://www.youzhan.org/" class="d-block" style="background-color:#f0ad4e" title="Bootstrap 优站精选" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'youzhan-tile'])">
                    <img class="lazy" src="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/img/null.png" width="300" height="150" data-src="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/img/expo.png" alt="Bootstrap 优站精选">
                </a>
                <div class="caption">
                    <h3>
                        <a href="https://www.youzhan.org/" title="Bootstrap 优站精选" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'youzhan-tile'])">{$vo.title}<br><small>{$vo.subtitle}</small></a>
                    </h3>
                    <p>{$vo.keyword}</p>
                    <div class="tools">
                        <a href="javascript:void(0)" class="pull-left">[{$vo.type_text}]</a>
                        <a href="javascript:void(0)" class="pull-right"><i class="fa fa-star-o"></i> 加入收藏</a>
                    </div>
                </div>
            </div>
        </div>
        {/foreach}
        <div class="col-sm-6 col-md-4 col-lg-3 ">
            <div class="thumbnail">
                <a href="https://www.youzhan.org/" title="Bootstrap 优站精选" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'youzhan-tile'])">
                    <img class="lazy" src="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/img/null.png" width="300" height="150" data-src="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/img/expo.png" alt="Bootstrap 优站精选">
                </a>
                <div class="caption">
                    <h3>
                        <a href="https://www.youzhan.org/" title="Bootstrap 优站精选" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'youzhan-tile'])">正则表达式<br><small>开发类</small></a>
                    </h3>
                    <p>Bootstrap 优站精选频道收集了众多基于 Bootstrap 构建、设计精美的、有创意的网站。</p>
                    <div>
                        <a href="javascript:void(0)" class="pull-right"><i class="fa fa-heart-o"></i> 收藏</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 ">
            <div class="thumbnail">
                <a href="https://www.youzhan.org/" title="Bootstrap 优站精选" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'youzhan-tile'])">
                    <img class="lazy" src="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/img/postcss.png" width="300" height="150" data-src="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/img/postcss.png" alt="Bootstrap 优站精选">
                </a>
                <div class="caption">
                    <h3>
                        <a href="https://www.youzhan.org/" title="Bootstrap 优站精选" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'youzhan-tile'])">javascript工具<br><small> 开发工具类</small></a>
                    </h3>
                    <p>在线js美化、解压缩、混淆</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 ">
            <div class="thumbnail">
                <a href="https://www.webpackjs.com/" title="Webpack 是前端资源模块化管理和打包工具" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'webpack'])">
                    <img class="lazy" src="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/img/null.png" width="300" height="150" data-src="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/img/webpack.png" alt="Webpack 是前端资源模块化管理和打包工具">
                </a>
                <div class="caption">
                    <h3>
                        <a href="https://www.webpackjs.com/" title="Webpack 是前端资源模块化管理和打包工具" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'webpack'])">Webpack<br><small>是前端资源模块化管理和打包工具</small></a>
                    </h3>
                    <p>Webpack 是当下最热门的前端资源模块化管理和打包工具。它可以将许多松散的模块按照依赖和规则打包成符合生产环境部署的前端资源。</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 ">
            <div class="thumbnail">
                <a href="https://reactjs.bootcss.com/" title="React - 用于构建用户界面的 JavaScript 框架" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'react'])">
                    <img class="lazy" src="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/img/null.png" width="300" height="150" data-src="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.31/dist/img/react.png" alt="React - 用于构建用户界面的 JavaScript 框架">
                </a>
                <div class="caption">
                    <h3>
                        <a href="https://reactjs.bootcss.com/" title="React - 用于构建用户界面的 JavaScript 框架" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'react'])">React<br><small>用于构建用户界面的 JavaScript 框架</small></a>
                    </h3>
                    <p>React 起源于 Facebook 的内部项目，是一个用于构建用户界面的 JavaScript 库。</p>
                </div>
            </div>
        </div>

    </div>
</div>
{/block}



