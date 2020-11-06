<section class="content-header">
    {if !empty($breadcrumb)}
    {assign name="last" value="$breadcrumb|last" /}
    <h1>
        {$last.title}
        <small>{$last.subtitle}</small>
    </h1>
    <ol class="breadcrumb">
        {foreach $breadcrumb as $item}
        {if $item == $last}
        <li class="active">{$item.title}</li>
        {else /}
        <li><a href="{$item.index|u}"><i class="fa {$item.icon}"></i> {$item.title}</a></li>
        {/if}
        {/foreach}
    </ol>
    {/if}
</section>
