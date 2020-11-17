<aside class="main-sidebar">
    <div class="sidebar-first">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
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
            <ul class="sidebar-menu" data-widget="expand-tree">
                <li class="header">MAIN NAVIGATION</li>
                {foreach $menus as $first}
                {if empty($first.submenu)}
                <li><a href="{$first.index|u}" data-pjax><i class="fa {$first.icon|default='fa-circle-o'}"></i> <span>{$first.title}</span></a></li>
                {else /}
                <li class="expend-tree-view {$first.active?'active':''}">
                    <a href="javascript:void(0)">
                        <i class="fa {$first.icon|default='fa-circle-o'}"></i> <span>{$first.title}</span>
                        <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                    </a>
                    <ul class="sidebar-menu hidden">
                        <li class="header">{$first.title}</li>
                        {foreach $first.submenu as $secondary}
                        {if empty($secondary.submenu)}
                        <li><a href="{$secondary.index|u}" data-pjax>{$secondary.title}</a></li>
                        {else /}
                        <li class="treeview {$secondary.active?'menu-open':''}">
                            <a href="javascript:void(0)">{$secondary.title}
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu" {$secondary.active?'style="display:block"':''}>
                            {foreach $secondary.submenu as $third}
                                <li><a href="{$third.index|u}" data-pjax>&nbsp;&nbsp;{$third.title}</a></li>
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
    </div>
    <div class="sidebar-secondary">
        <section class="sidebar">
            {foreach $menus as $first}
            {if !empty($first.submenu) && $first.active}
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">{$first.title}</li>
                {foreach $first.submenu as $secondary}
                {if empty($secondary.submenu)}
                <li><a href="{$secondary.index|u}" data-pjax>{$secondary.title}</a></li>
                {else /}
                <li class="treeview">
                    <a href="javascript:void(0)">{$secondary.title}
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                    {foreach $secondary.submenu as $third}
                        <li><a href="{$third.index|u}" data-pjax>&nbsp;&nbsp;{$third.title}</a></li>
                    {/foreach}
                    </ul>
                </li>
                {/if}
                {/foreach}
            </ul>
            {/if}
            {/foreach}
        </section>
    </div>
</aside>
