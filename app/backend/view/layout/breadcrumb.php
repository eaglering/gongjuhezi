<section class="content-header">
    <ol class="breadcrumb">
        {foreach $breadcrumb.list as $key => $item}
        {if $key == count($breadcrumb.list)}
        <li class="active">{$item.title}</li>
        {else /}
        <li><a href="{$item.index|u}"><i class="fa {$item.icon}"></i> {$item.title}</a></li>
        {/if}
        {/foreach}
    </ol>
</section>
