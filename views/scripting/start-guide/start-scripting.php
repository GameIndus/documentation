<?php

$previousTutorial = (object) array("title" => "Apprendre le langage", "url" => "scripting/start-guide/learn-script");
$nextTutorial     = (object) array("title" => "Les scripts visuels", "url" => "scripting/start-guide/visualscripts");

?><div class="tutorial-container">
    <div class="tutorial-header-container">
        <div class="hero-1">Le scripting sur GameIndus</div>
        <div class="hero-2"><i class="fa fa-code"></i> Démarrer en scripting</div>
    </div>
    <div class="tutorial-header-bar">
        <div class="left">
            <div class="tutorial-badge">3</div>
            Tutoriel : Commencer à programmer
        </div>
        <div class="right">
            <?php if(!empty($nextTutorial)): ?>
                <a href="<?= DOCBASE . $nextTutorial->url; ?>" title="<?= $nextTutorial->title; ?>"><div class="action-bar">
                    <span><?= $nextTutorial->title; ?></span> <i class="fa fa-angle-right"></i> 
                </div></a>
            <?php endif; ?>

            <?php if(!empty($previousTutorial)): ?>
                <a href="<?= DOCBASE . $previousTutorial->url; ?>" title="<?= $previousTutorial->title; ?>"><div class="action-bar">
                    <i class="fa fa-angle-left"></i> <span><?= $previousTutorial->title; ?></span>
                </div></a>
            <?php endif; ?>
        </div>
        <div class="clear"></div>
    </div>


    <div class="tutorial-content">
        <h5 class="title">1. Mise en place</h5>

        Afin de mettre en place un script, il est nécessaire de créer un fichier de type "script" comme indiqué dans le <u>tutoriel 1</u>.<br>
        Ouvrez le fichier précédemment créé : vous êtes prêt à rédiger votre premier script.<br>
        <br>
        Dans ces scripts, vous avez la possiblité d'intéragir de manière directe avec le moteur qui fera tourner votre jeu : il est vous est donc possible de créer des objets, des caméras, des textes, d'éditer des objets, etc.. Tout ce dont vous avez besoin pour créer votre jeu !

        <br><br>
        <blockquote>
            Il vous est même possible de n'utiliser que le gestionnaire de ressources et les scripts, sans passer par les différents éditeurs, en créant tout à partir du code, de A à Z. Mais la tâche est toutefois plus complexe et il est nécessaire d'avoir un bon niveau de compréhension de notre moteur de jeu.
        </blockquote>
        <br>

        <h5 class="title">2. Les classes du moteur</h5>

        Pour gérer les objets, les scènes, etc, nous utilisons le système de classe en JavaScript.<br>
        Voici la liste des classes que vous pouvez utiliser dans vos scripts :<br>
        <ul style="list-style:square">
            <li><b>Scene</b> : Scène de jeu</li>
            <li><b>GameObject</b> : Objet de jeu</li>
            <li><b>Camera</b> : Camera de jeu</li>
            <li><b>Text</b> : Texte</li>
            <li><b>Background</b> : Fond de scène</li>
        </ul>
        <br>

        <blockquote class="success">
            <i class="fa fa-info-circle"></i> D'autres classes arriveront prochainement pour gérer les <b>lumières</b>, les <b>particules</b>, etc.
        </blockquote>
        <br>

        <h5 class="title">3. La structure du moteur</h5>

        Le moteur de jeu est composé de différentes parties imbriquées les unes dans les autres. Voici une liste hierarchisée des composants disponibles :<br>
        <ul style="list-style:square">
            <li><b>Scènes</b> <i>(Scene)</i></li>
            <ul style="list-style:circle">
                <li>Objets de jeu <i>(GameObject)</i></li>
                <li>Textes <i>(Text)</i></li>
                <li>Carte <i>(TileMap)</i></li>
                <ul style="list-style:disc">
                    <li>Partie <small>("Tuile")</small> de carte <i>(Tile)</i></li>
                </ul>
                <li>Caméras <i>(Camera)</i></li>
                <li>Fonds d'écran <i>(Background)</i></li>
                <li>Sons <i>(Sound)</i></li>
            </ul>
            <li><b>Gestionnaire de ressources</b> <i>(RessourcesManager)</i></li>
            <li><b>Gestionnaire d'événements</b> <i>(EventsManager)</i></li>
            <li><b>Gestionnaire d'actions utilisateur</b> <i>(Input)</i></li>
            <li><b>Configuration du jeu</b> <i>(Config)</i></li>
        </ul>
        <br>
        La classe qui permet de gérer votre jeu est <b>Game</b>. Chaque classe possède ses propres méthodes et nous vous invitons à parcourir la documentation afin de trouver les méthodes correspondantes à une classe précise.

        <div class="clear"></div>

        <?php if(!empty($nextTutorial)): ?>
            <a href="<?= DOCBASE . $nextTutorial->url; ?>" title="<?= $nextTutorial->title; ?>"><div class="next-tutorial-button">
                Continuer : <?= $nextTutorial->title; ?> <i class="fa fa-angle-right"></i> 
            </div></a>

            <div class="clear"></div>
        <?php endif; ?>
    </div>
</div>