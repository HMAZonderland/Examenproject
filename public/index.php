<?php
session_start();
/**
 * @var PDO    $pdo
 * @var Smarty $smarty
 */
require_once '../bootstrap.php';

// extract the section variable, check if the Controller class exists
$section = $_GET['section'];
$controllerName = 'ANPNews\\Controller\\' . ucfirst($section) . 'Controller';
if (!class_exists($controllerName)) {
    die('Unknown section called, please check your `?section=` variable.');
}

// Extract the action to execute, otheriwse default to index
$action = (isset($_GET['action']) ? $_GET['action'] : 'index');
$controller = new $controllerName(...[$pdo, $smarty]);
if (!method_exists($controller, $action)) {
    die('Unknown action called, please check your `&action=` variable');
}

// execute the command
$controller->$action();