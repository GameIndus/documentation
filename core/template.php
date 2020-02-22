<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GameIndus | Documentation en ligne</title>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width,initial-scale = 1, user-scalable = no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="apple-touch-icon" href="/imgs/logo.png"/>
    <link rel="icon" type="image/png" href="/imgs/logo.png"/>

    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/default.min.css">
    <link rel="stylesheet" type="text/css" href="/css/base.css">
    <link rel="stylesheet" type="text/css" href="/css/documentation.css">
</head>
<body>
<header>
    <a href="/<?php if ($scripting): ?>scripting/<?php endif; ?>" title="Documentation GameIndus">
        <div class="logo-container"></div>
    </a>

    <div class="sections-container">
        <a <?= !$scripting ? 'class="active"' : '' ?> href="/" title="Manuel">Manuel</a>
        <a <?= $scripting ? 'class="active"' : '' ?> href="/scripting/start-guide/starting"
           title="Scripting">Scripting</a>
        <div class="clear"></div>
    </div>

    <div class="search-container">
        <div class="search-wrapper">
            <input type="text" autocomplete="off" id="search" onfocus="this.parentNode.classList.add('focused')"
                   onblur="if(this.value=='') this.parentNode.classList.remove('focused');">
            <i class="fa fa-search search-icon"></i>
        </div>
    </div>

    <?php if (!$scripting): ?>

        <nav class="menu-container">
            <?= generateMenuItem("start-guide/starting", "Guide de démarrage", "start-guide") ?>

            <nav class="menu-container sub-menu">
                <?= generateMenuItem("start-guide/starting", "Démarrer") ?>
                <?= generateMenuItem("start-guide/registration", "Inscription") ?>
                <?= generateMenuItem("start-guide/editprofile", "Personnalisation") ?>
            </nav>

            <?= generateMenuItem('project/how-to-create', 'Gérer son projet', 'project') ?>

            <nav class="menu-container sub-menu">
                <?= generateMenuItem("project/how-to-create", "Créer un projet/jeu") ?>
                <?= generateMenuItem("project/invite-friend", "Inviter un ami") ?>
                <?= generateMenuItem("project/manage-members", "Gestion des membres") ?>
            </nav>

            <?= generateMenuItem("editor", "Editeur") ?>
            <?= generateMenuItem(
                "multiplayer", "Multijoueur <span class=\"soon\">[BIENTOT]</span>",
                null, "Multijoueur"
            ) ?>
            <?= generateMenuItem(
                "audio", "Audio <span class=\"soon\">[BIENTOT]</span>",
                null, "Audio"
            ) ?>
            <?= generateMenuItem("export/debug-game", "Publier son jeu", "export") ?>

            <nav class="menu-container sub-menu">
                <?= generateMenuItem("export/debug-game", "Déboguer un jeu") ?>
                <?= generateMenuItem("export/publish-game", "Exporter un jeu") ?>
            </nav>
        </nav>

    <?php else: ?>

        <nav class="menu-container">
            <?= generateMenuItem("scripting/start-guide/starting", "Démarrer en scripting", "scripting/start-guide") ?>

            <nav class="menu-container sub-menu">
                <?= generateMenuItem("scripting/start-guide/starting", "Introduction") ?>
                <?= generateMenuItem("scripting/start-guide/learn-script", "Apprendre le langage") ?>
                <?= generateMenuItem("scripting/start-guide/start-scripting", "Notions avancées") ?>
                <?= generateMenuItem("scripting/start-guide/visualscripts", "Scripts visuels") ?>
            </nav>

            <?= generateMenuItem("scripting/scenes/how-to-create", "Les scènes", "scripting/scenes") ?>

            <nav class="menu-container sub-menu">
                <?= generateMenuItem("scripting/scenes/how-to-create", "Créer une scène") ?>
                <?= generateMenuItem("scripting/scenes/manage-scenes", "Manipuler les scènes") ?>
                <?= generateMenuItem("scripting/scenes/methods", "Méthodes") ?>
            </nav>
        </nav>

    <?php endif; ?>
</header>

<main <?= $scripting ? 'class="scripting-container"' : '' ?>>
    <?= $content_for_layout; ?>
</main>

<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/highlight.min.js"></script>
<script src="/js/base.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
