<?php  
require_once 'core/functions.php';

define('BASE', 'https://gameindus.fr/');

if($_SERVER["SERVER_NAME"] == "docs.gameindus.fr"){
	define('DOCBASE', 'https://docs.gameindus.fr/');
}else{
	define('DOCBASE', dirname($_SERVER["SCRIPT_NAME"]));
}

$pageH     = (isset($_GET['p'])) ? $_GET['p'] : "index";
$scripting = (strpos($pageH, "scripting/") !== false);

$page = addslashes(htmlentities($pageH));
if($page == "home" || $page == "scripting/") $page = "index";
if(substr($page, -1) == "/") $page = substr($page, 0, -1);

if(!file_exists("views/$page.php")) $page = "404";

ob_start();
require_once "views/$page.php";
$content_for_layout = ob_get_clean();

require_once 'core/template.php';
?>