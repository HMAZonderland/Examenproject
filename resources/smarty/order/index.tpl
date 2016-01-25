{include file="../template/header.tpl"}

{foreach from=$orders item=order}
    <p>{$order->id}</p>
    <p>{$order->name}</p>
    <p>{$order->price}</p>
{/foreach}

{include file="../template/footer.tpl"}