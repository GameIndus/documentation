<?php

$previousTutorial = (object) array("title" => "Commencer à programmer", "url" => "scripting/start-guide/start-scripting");
$nextTutorial     = null;

?><div class="tutorial-container">
    <div class="tutorial-header-container">
        <div class="hero-1">Le scripting sur GameIndus</div>
        <div class="hero-2"><i class="fa fa-code"></i> Démarrer en scripting</div>
    </div>
    <div class="tutorial-header-bar">
        <div class="left">
            <div class="tutorial-badge">4</div>
            Tutoriel : Les scripts visuels
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

        Afin de mettre en place un script visuel, il est nécessaire de créer un fichier de type "script visuel" comme indiqué dans le <u>tutoriel 1</u>.<br>
        Ouvrez le fichier précédemment créé : vous êtes prêt à éditer votre premier script visuel.<br>
        <br>
        Dans ces scripts, vous avez la possiblité d'intéragir de manière directe avec le moteur qui fera tourner votre jeu : il est vous est donc possible de créer des objets, des caméras, des textes, d'éditer des objets, etc.. Tout ce dont vous avez besoin pour créer votre jeu, mais de manière visuelle !

        <br><br>
        <blockquote>
            Cet éditeur permet d'effectuer des tâches de manière simplifiée, mais si savez développer il est préférable d'utiliser l'éditeur de script, qui s'avère être plus complet pour customiser votre jeu à 100%.
        </blockquote>
        <br><br>

        <h5 class="title">2. Le fonctionnement de l'éditeur</h5>

        L'éditeur de script visuel sur GameIndus utilise le même fonctionnement que le système <b>Scratch&copy;</b> et <b>Blockly&copy; de Google&trade;</b>.<br>
        Ce système est basé sur des blocs que vous pouvez emboîter ensemble pour former une logique de script.<br>

        <blockquote>
            <i class="fa fa-info-circle"></i> Si vous souhaitez en savoir plus sur Scratch&copy;, vous pouvez aller voir ici: <a target="_blank" href="https://scratch.mit.edu/" title="Scratch">Scratch</a>.
        </blockquote>
        <br>
        De nombreux blocs préconçus ont été créé pour vous mais si vous avez des idées concernant de nouveaux blocs, n'hésitez pas à nous en faire part.


        <div class="clear"></div>

        <?php if(!empty($nextTutorial)): ?>
            <a href="<?= DOCBASE . $nextTutorial->url; ?>" title="<?= $nextTutorial->title; ?>"><div class="next-tutorial-button">
                Continuer : <?= $nextTutorial->title; ?> <i class="fa fa-angle-right"></i> 
            </div></a>

            <div class="clear"></div>
        <?php endif; ?>
    </div>
</div>