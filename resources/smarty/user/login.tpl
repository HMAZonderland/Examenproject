{include file="../template/header.tpl"}

<form action="index.php?section=user&action=login" method="post">
    <p>{$message}</p>

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