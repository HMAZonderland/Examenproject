<!doctype html>

<html lang="nl">
<head>
    <meta charset="utf-8">

    <title>ANP Nieuws rotzooi</title>
    <meta name="description" content="Vette shit inelkaar hacken!">
    <meta name="author" content="Hugo natuurlijk">

    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    {$header}
    <div class="login">
        {if $show_login}
            <a href="index.php?section=user&action=login">Login!</a>
        {else}
            Hallo {$user->showName()}! <a href="index.php?section=user&action=logout">Logout!</a>
        {/if}
    </div>
</header>

<div id="container">