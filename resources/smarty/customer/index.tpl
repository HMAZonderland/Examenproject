{include file="../template/header.tpl"}

{foreach from=$customers item=customer}
    <p><a href="index.php?section=customer&action=view&id={$customer->id}">{$customer->name}</a></p>
{/foreach}

{include file="../template/footer.tpl"}