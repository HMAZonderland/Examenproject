<?php
ini_set('display_errors', true);
error_reporting(E_ALL & ~E_NOTICE);
/**
 * @var array $dbConfig
 * @var array $smartyConfig
 */
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/vendor/autoload.php';

// create database connection
$pdo = new PDO('mysql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['db'], $dbConfig['username'], $dbConfig['password']);

$smarty = new Smarty();
$smarty->setTemplateDir($smartyConfig['template_dir']);
$smarty->setCompileDir($smartyConfig['compile_dir']);
//$smarty->setConfigDir('/web/www.example.com/guestbook/configs/');
$smarty->setCacheDir($smartyConfig['cache_dir']);