<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>GameIndus | Documentation en ligne</title>

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name = "viewport" content="width=device-width,initial-scale = 1, user-scalable = no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="apple-touch-icon" href="<?= BASE ?>imgs/logo/logo-only-16x16.png" />
	<link rel="icon" type="image/png" href="<?= BASE ?>imgs/logo/logo-only-16x16.png" />

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/default.min.css">
	<link rel="stylesheet" type="text/css" href="<?= DOCBASE ?>css/base.css">
	<link rel="stylesheet" type="text/css" href="<?= DOCBASE ?>css/documentation.css">
</head>
<body>
	<header>
		<a href="<?= DOCBASE ?>" title="Documentation GameIndus"><div class="logo-container"><!-- <span>Documentation</span> --></div></a>

		<div class="sections-container">
			<a class="active" href="<?= DOCBASE ?>" title="Manuel">Manuel</a>
			<a href="<?= DOCBASE ?>scripting/" title="Scripting">Scripting</a>
			<div class="clear"></div>
		</div>

		<div class="search-container">
			<div class="search-wrapper">
				<input type="text" autocomplete="off" id="search" onfocus="this.parentNode.classList.add('focused')" onblur="if(this.value=='') this.parentNode.classList.remove('focused');">
				<i class="fa fa-search search-icon"></i>
			</div>
		</div>

		<nav class="menu-container">
			<a<?php if(strpos($page, "start-guide") !== false): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>start-guide/starting" title="Guide de démarrage"><div class="menu-item">
				Guide de démarrage
			</div></a>
			<nav class="menu-container sub-menu">
				<a<?php if($page == "start-guide/starting"): ?> class="active"<?php endif; ?>  href="<?= DOCBASE ?>start-guide/starting" title="Démarrer"><div class="menu-item">
					Démarrer
				</div></a>
				<a href="<?= DOCBASE ?>start-guide/registration" title="Inscription"><div class="menu-item">
					Inscription
				</div></a>
				<a href="<?= DOCBASE ?>start-guide/editprofile" title="Personnalisation"><div class="menu-item">
					Personnalisation
				</div></a>
				<a href="<?= DOCBASE ?>start-guide/getting-started" title="Prise en main"><div class="menu-item">
					Prise en main
				</div></a>
			</nav>

			<a<?php if(strpos($page, "project") !== false): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>project" title="Projet"><div class="menu-item">
				Gérer son projet
			</div></a>
			<nav class="menu-container sub-menu">
				<a href="<?= DOCBASE ?>project/how-to-create" title="Créer un projet/jeu"><div class="menu-item">
					Créer un projet/jeu
				</div></a>
				<a href="<?= DOCBASE ?>project/invite-friend" title="Inviter un ami"><div class="menu-item">
					Inviter un ami
				</div></a>
				<a href="<?= DOCBASE ?>project/manage-ranks" title="estion des grades"><div class="menu-item">
					Gestion des grades
				</div></a>
			</nav>

			<a href="<?= DOCBASE ?>graphics" title="Graphique"><div class="menu-item">
				Graphique
			</div></a>
			<a href="<?= DOCBASE ?>physics" title="Physique"><div class="menu-item">
				Physique
			</div></a>
			<a href="<?= DOCBASE ?>multiplayer" title="Mutlijoueur"><div class="menu-item">
				Multijoueur
			</div></a>
			<a href="<?= DOCBASE ?>audio" title="Audio"><div class="menu-item">
				Audio
			</div></a>
			<a href="<?= DOCBASE ?>export" title="Publier son jeu"><div class="menu-item">
				Publier son jeu
			</div></a>
		</nav>
	</header>

	<main>
		<?= $content_for_layout; ?>
	</main>

	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/highlight.min.js"></script>
    <script src="<?= DOCBASE ?>js/base.js"></script>
    <script src="<?= DOCBASE ?>js/app.js"></script>
</body>
</html>