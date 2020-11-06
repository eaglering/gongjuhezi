<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{$user.avatar}" class="img-circle" alt="{$user.username}">
            </div>
            <div class="pull-left info">
                <p>{$user.username}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> 在线中</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            {foreach $menus as $first}
            {if empty($first.submenu)}
                {if $first.active}
                <li class="active"><a href="javascript:void(0)"><i class="fa {$first.icon|default='fa-circle-o'}"></i> <span>{$first.title}</span></a></li>
                {else /}
                <li><a href="{$first.index|u}"><i class="fa {$first.icon|default='fa-circle-o'}"></i> <span>{$first.title}</span></a></li>
                {/if}
            {else /}
            <li class="treeview {$first.active?'menu-open active':''}">
                <a href="{$first.index|u}">
                    <i class="fa {$first.icon|default='fa-circle-o'}"></i> <span>{$first.title}</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu" {$first.active?'style="display:block"':''}>
                    {foreach $first.submenu as $secondary}
                    {if empty($secondary.submenu)}
                        {if $secondary.active}
                        <li class="active"><a href="javascript:void(0)"><i class="fa {$secondary.icon|default='fa-circle-o'}"></i> {$secondary.title}</a></li>
                        {else /}
                        <li><a href="{$secondary.index|u}"><i class="fa {$secondary.icon|default='fa-circle-o'}"></i> {$secondary.title}</a></li>
                        {/if}
                    {else /}
                    <li class="treeview {$secondary.active?'menu-open':''}">
                        <a href="{$secondary.index|u}"><i class="fa {$secondary.icon|default='fa-circle-o'}"></i> {$secondary.title}
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu" {$secondary.active?'style="display:block"':''}>
                            {foreach $secondary.submenu as $third}
                            {if $third.active}
                            <li class="active"><a href="javascript:void(0)"><i class="fa {$third.icon|default='fa-circle-o'}"></i> {$third.title}</a></li>
                            {else /}
                            <li><a href="{$third.index|u}"><i class="fa {$third.icon|default='fa-circle-o'}"></i> {$third.title}</a></li>
                            {/if}
                            {/foreach}
                        </ul>
                    </li>
                    {/if}
                    {/foreach}
                </ul>
            </li>
            {/if}
            {/foreach}
            <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
