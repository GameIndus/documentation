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
		<a href="<?= DOCBASE ?><?php if($scripting): ?>scripting/<?php endif; ?>" title="Documentation GameIndus"><div class="logo-container"><!-- <span>Documentation</span> --></div></a>

		<div class="sections-container">
			<a<?php if(!$scripting): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>" title="Manuel">Manuel</a>
			<a<?php if($scripting): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/" title="Scripting">Scripting</a>
			<div class="clear"></div>
		</div>

		<div class="search-container">
			<div class="search-wrapper">
				<input type="text" autocomplete="off" id="search" onfocus="this.parentNode.classList.add('focused')" onblur="if(this.value=='') this.parentNode.classList.remove('focused');">
				<i class="fa fa-search search-icon"></i>
			</div>
		</div>

		<?php if(!$scripting): ?>
			
			<nav class="menu-container">
				<a<?php if(strpos($page, "start-guide") !== false): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>start-guide/starting" title="Guide de démarrage"><div class="menu-item">
					Guide de démarrage
				</div></a>
				<nav class="menu-container sub-menu">
					<a<?php if($page == "start-guide/starting"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>start-guide/starting" title="Démarrer"><div class="menu-item">
						Démarrer
					</div></a>
					<a<?php if($page == "start-guide/registration"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>start-guide/registration" title="Inscription"><div class="menu-item">
						Inscription
					</div></a>
					<a<?php if($page == "start-guide/editprofile"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>start-guide/editprofile" title="Personnalisation"><div class="menu-item">
						Personnalisation
					</div></a>
				</nav>

				<a<?php if(strpos($page, "project") !== false): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>project/how-to-create" title="Projet"><div class="menu-item">
					Gérer son projet
				</div></a>
				<nav class="menu-container sub-menu">
					<a<?php if($page == "project/how-to-create"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>project/how-to-create" title="Créer un projet/jeu"><div class="menu-item">
						Créer un projet/jeu
					</div></a>
					<a<?php if($page == "project/invite-friend"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>project/invite-friend" title="Inviter un ami"><div class="menu-item">
						Inviter un ami
					</div></a>
					<a<?php if($page == "project/manage-members"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>project/manage-members" title="Gestion des membres"><div class="menu-item">
						Gestion des membres
					</div></a>
				</nav>

				<a href="<?= DOCBASE ?>editor" title="Editeur"><div class="menu-item">
					Editeur
				</div></a>
				<a href="<?= DOCBASE ?>multiplayer" title="Mutlijoueur"><div class="menu-item">
					Multijoueur <span style="color:red;font-weight:bold;font-size:0.7em;margin-left:10px">[BIENTOT]</span>
				</div></a>
				<a href="<?= DOCBASE ?>audio" title="Audio"><div class="menu-item">
					Audio <span style="color:red;font-weight:bold;font-size:0.7em;margin-left:10px">[BIENTOT]</span>
				</div></a>
				<a<?php if(strpos($page, "export") !== false): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>export/debug-game" title="Publier son jeu"><div class="menu-item">
					Publier son jeu
				</div></a>
				<nav class="menu-container sub-menu">
					<a<?php if($page == "export/debug-game"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>export/debug-game" title="Déboguer un jeu"><div class="menu-item">
						Déboguer un jeu
					</div></a>
					<a<?php if($page == "export/publish-game"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>export/publish-game" title="Exporter un jeu"><div class="menu-item">
						Exporter un jeu
					</div></a>
				</nav>
			</nav>

		<?php else: ?>

			<nav class="menu-container">
				<a<?php if(strpos($page, "scripting/start-guide") !== false): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/start-guide/starting" title="Démarrer en scripting"><div class="menu-item">
					Démarrer en scripting
				</div></a>
				<nav class="menu-container sub-menu">
					<a<?php if($page == "scripting/start-guide/starting"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/start-guide/starting" title="Introduction"><div class="menu-item">
						Introduction
					</div></a>
					<a<?php if($page == "scripting/start-guide/learn-script"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/start-guide/learn-script" title="Apprendre le langage"><div class="menu-item">
						Apprendre le langage
					</div></a>
					<a<?php if($page == "scripting/start-guide/start-scripting"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/start-guide/start-scripting" title="Notions avancées"><div class="menu-item">
						Commencer à programmer
					</div></a>
					<a<?php if($page == "scripting/start-guide/visualscripts"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/start-guide/visualscripts" title="Les scripts visuels"><div class="menu-item">
						Les scripts visuels
					</div></a>
				</nav>

				<a<?php if(strpos($page, "scripting/scenes") !== false): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/scenes/starting" title="Les scènes"><div class="menu-item">
					Les scènes
				</div></a>
				<nav class="menu-container sub-menu">
					<a<?php if($page == "scripting/scenes/how-to-create"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/scenes/how-to-create" title="Créer une scène"><div class="menu-item">
						Créer une scène
					</div></a>
					<a<?php if($page == "scripting/scenes/manage-scenes"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/scenes/manage-scenes" title="Manipuler les scènes"><div class="menu-item">
						Manipuler les scènes
					</div></a>
					<a<?php if($page == "scripting/scenes/add-tilemap"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/scenes/add-tilemap" title="Ajouter une carte"><div class="menu-item">
						Ajouter une carte
					</div></a>
				</nav>

				<a<?php if(strpos($page, "scripting/gameobjects") !== false): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/gameobjects/how-to-create" title="Les objets de jeu"><div class="menu-item">
					Les objets de jeu
				</div></a>
				<nav class="menu-container sub-menu">
					<a<?php if($page == "scripting/gameobjects/how-to-create"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/gameobjects/how-to-create" title="Créer un objet"><div class="menu-item">
						Créer un objet
					</div></a>
					<a<?php if($page == "scripting/scenes/manage-scenes"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/scenes/manage-scenes" title="Modifier un objet"><div class="menu-item">
						Modifier un objet
					</div></a>
					<a<?php if($page == "scripting/scenes/create-text"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/scenes/create-text" title="Créer un texte"><div class="menu-item">
						Créer un texte
					</div></a>
					<a<?php if($page == "scripting/scenes/create-background"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/scenes/create-background" title="Créer un fond de jeu"><div class="menu-item">
						Créer un fond de jeu
					</div></a>
					<a<?php if($page == "scripting/gameobjects/add-object-into-scene"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/gameobjects/add-object-into-scene" title="Ajouter un objet dans une scène"><div class="menu-item">
						Ajouter un objet dans une scène
					</div></a>
				</nav>

				<a<?php if(strpos($page, "scripting/behaviors") !== false): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/behaviors/how-to-create" title="Les comportements"><div class="menu-item">
					Les comportements
				</div></a>
				<nav class="menu-container sub-menu">
					<a<?php if($page == "scripting/behaviors/how-to-create"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/behaviors/how-to-create" title="Créer un comportement"><div class="menu-item">
						Créer un comportement
					</div></a>
					<a<?php if($page == "scripting/behaviors/predefined"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/behaviors/predefined" title="Comportements prédéfinis"><div class="menu-item">
						Comportements prédéfinis
					</div></a>
				</nav>

				<a<?php if(strpos($page, "scripting/advanced") !== false): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/advanced/game-options" title="Manipulations avancées"><div class="menu-item">
					Manipulations avancées
				</div></a>
				<nav class="menu-container sub-menu">
					<a<?php if($page == "scripting/advanced/game-options"): ?> class="active"<?php endif; ?> href="<?= DOCBASE ?>scripting/advanced/game-options" title="Modifier les options du jeu"><div class="menu-item">
						Modifier les options du jeu
					</div></a>
				</nav>
			</nav>

		<?php endif; ?>
	</header>

	<main<?php if($scripting): ?> class="scripting-container"<?php endif; ?>>
		<?= $content_for_layout; ?>
	</main>

	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/highlight.min.js"></script>
    <script src="<?= DOCBASE ?>js/base.js"></script>
    <script src="<?= DOCBASE ?>js/app.js"></script>
</body>
</html>