<?php
require_once '../core/functions.php';

// Some basic constants
define('BASE', 'https://gameindus.fr/');

// Retreive the request parameter (which view should appears)
$request = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : null;
if (is_null($request)) {
    $request = (isset($_GET['p'])) ? $_GET['p'] : "index";
}

// Format the request
$scripting = (strpos($request, "scripting/") !== false);
$page = trim(addslashes(htmlentities($request)), "/");

// Basic redirects
if ($page == "home" || $page == "scripting") {
    $page = "index";
}

// Page matchs and exists?
$regex = '/^([a-zA-Z0-9\/\-\_]+)$/';
if (!preg_match($regex, $page) || !file_exists("../views/$page.php")) {
    $page = "404";
}

// Import the view into a variable
ob_start();
require_once "../views/$page.php";
$content_for_layout = ob_get_clean();

require_once '../core/template.php';
