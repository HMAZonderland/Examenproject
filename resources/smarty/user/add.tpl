{include file="../template/header.tpl"}

<form action="index.php?section=user&action=add" method="post">
    <p>{$message}</p>

    <label for="company">Selecteer een bedrijf</label>
    <select name="customer_id" id="company">
        <option>Selecteer een bedrijf</option>
        {foreach from=$customers item=customer}
            <option value="{$customer->id}">{$customer->name}</option>
        {/foreach}
    </select>
    <br />
    <label for="username">Username:</label>
    <input name="username" id="username" type="text" value="{$username}" />
    <br />
    <label for="password">Password:</label>
    <input name="password" id="password" type="password" />
    <br />
    <br />
    <input type="submit" value="Login!" />
</form>

{include file="../template/footer.tpl"}