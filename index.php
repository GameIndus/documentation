<?php  
require_once '../site/core/functions.php';
require_once '../site/core/config.php';
require_once 'core/functions.php';

define('BASE', 'https://gameindus.fr/');
define('DOCBASE', 'https://docs.gameindus.fr/');

$pageH = (isset($_GET['p'])) ? $_GET['p'] : "index";

$page = addslashes(htmlentities($pageH));
if($page == "home") $page = "index";
if(substr($page, -1) == "/") $page = substr($page, 0, -1);

if(!file_exists("views/$page.php")) $page = "404";

ob_start();
require_once "views/$page.php";
$content_for_layout = ob_get_clean();

require_once 'core/template.php';
?>