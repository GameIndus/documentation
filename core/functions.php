<?php


function formatDocBreadCumb($breadcrumb){
	switch($breadcrumb){
		case "engine2d": return "Création d'un jeu";
		case "editor": return "Editeur de jeu";
		default: return $breadcrumb;
	}
}


?>