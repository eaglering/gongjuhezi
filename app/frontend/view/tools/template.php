{extend name="tools/layout" /}

{block name="content"}
{__block__}
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-9">
            <div class="bs-docs-section">
                <h1 id="glyphicons" class="page-header">Glyphicons 字体图标</h1>
                <h2 id="glyphicons-glyphs">所有可用的图标</h2>
                <p>包括250多个来自 Glyphicon Halflings 的字体图标。<a href="http://glyphicons.com/">Glyphicons</a> Halflings 一般是收费的，但是他们的作者允许 Bootstrap 免费使用。为了表示感谢，希望你在使用时尽量为 <a href="http://glyphicons.com/">Glyphicons</a> 添加一个友情链接。</p>

                <div class="bs-callout bs-callout-danger">
                    <h4>不要和其他组件混合使用</h4>
                    <p>图标类不能和其它组件直接联合使用。它们不能在同一个元素上与其他类共同存在。应该创建一个嵌套的 <code>&lt;span&gt;</code> 标签，并将图标类应用到这个 <code>&lt;span&gt;</code> 标签上。</p>
                </div>
                <div class="bs-callout bs-callout-danger">
                    <h4>不要和其他组件混合使用</h4>
                    <p>图标类不能和其它组件直接联合使用。它们不能在同一个元素上与其他类共同存在。应该创建一个嵌套的 <code>&lt;span&gt;</code> 标签，并将图标类应用到这个 <code>&lt;span&gt;</code> 标签上。</p>
                </div>
                <div class="bs-callout bs-callout-info" id="callout-glyphicons-location">
                    <h4>改变图标字体文件的位置</h4>
                    <p>Bootstrap 假定所有的图标字体文件全部位于 <code>../fonts/</code> 目录内，相对于预编译版 CSS 文件的目录。如果你修改了图标字体文件的位置，那么，你需要通过下面列出的任何一种方式来更新 CSS 文件：</p>
                    <ul>
                        <li>在 Less 源码文件中修改 <code>@icon-font-path</code> 和/或 <code>@icon-font-name</code> 变量。</li>
                        <li>利用 Less 编译器提供的 <a href="http://lesscss.org/usage/#command-line-usage-relative-urls">相对 URL 地址选项</a>。</li>
                        <li>修改预编译 CSS 文件中的 <code>url()</code> 地址。</li>
                    </ul>
                    <p>根据你自身的情况选择一种方式即可。</p>
                </div>
                <div class="bs-callout bs-callout-warning" id="callout-glyphicons-accessibility">
                    <h4>图标的可访问性</h4>
                    <p>现代的辅助技术能够识别并朗读由 CSS 生成的内容和特定的 Unicode 字符。为了避免 屏幕识读设备抓取非故意的和可能产生混淆的输出内容（尤其是当图标纯粹作为装饰用途时），我们为这些图标设置了 <code>aria-hidden="true"</code> 属性。</p>
                    <p>如果你使用图标是为了表达某些含义（不仅仅是为了装饰用），请确保你所要表达的意思能够通过被辅助设备识别，例如，包含额外的内容并通过 <code>.sr-only</code> 类让其在视觉上表现出隐藏的效果。</p>
                    <p>如果你所创建的组件不包含任何文本内容（例如， <code>&lt;button&gt;</code> 内只包含了一个图标），你应当提供其他的内容来表示这个控件的意图，这样就能让使用辅助设备的用户知道其作用了。这种情况下，你可以为控件添加 <code>aria-label</code> 属性。</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-danger">
                <div class="panel-heading"><h4>优选推荐</h4></div>
                <div class="list-group bs-list-group">
                    <a href="#" class="list-group-item">
                        <h5 class="list-group-item-heading">在线MD5工具</h5>
                        <small class="list-group-item-text text-muted">提供便捷的在线md5方案，是一款很新奇的玩法</small>
                    </a>
                    <a href="#" class="list-group-item">
                        <h5 class="list-group-item-heading">在线MD5工具</h5>
                        <small class="list-group-item-text text-muted">提供便捷的在线md5方案，是一款很新奇的玩法</small>
                    </a>
                    <a href="#" class="list-group-item">
                        <h5 class="list-group-item-heading">在线MD5工具</h5>
                        <small class="list-group-item-text text-muted">提供便捷的在线md5方案，是一款很新奇的玩法</small>
                    </a>
                    <a href="#" class="list-group-item">
                        <h5 class="list-group-item-heading">在线MD5工具</h5>
                        <small class="list-group-item-text text-muted">提供便捷的在线md5方案，是一款很新奇的玩法</small>
                    </a>
                </div>
            </div>
            <!--            <ul style="padding: 0">-->
            <!--                <li>-->
            <!--                    <a>在线MD5工具</a>-->
            <!--                    <p class="text-muted"><small>提供便捷的在线md5方案，是一款很新奇的玩法</small></p>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a>在线MD5工具</a>-->
            <!--                    <p class="text-muted"><small>提供便捷的在线md5方案，是一款很新奇的玩法</small></p>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a>在线MD5工具</a>-->
            <!--                    <p class="text-muted"><small>提供便捷的在线md5方案，是一款很新奇的玩法</small></p>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a>在线MD5工具</a>-->
            <!--                    <p class="text-muted"><small>提供便捷的在线md5方案，是一款很新奇的玩法</small></p>-->
            <!--                </li>-->
            <!--            </ul>-->

        </div>
    </div>
</div>
{/block}
