<?php

$previousTutorial = (object) array("title" => "Introduction", "url" => "scripting/start-guide/starting");
$nextTutorial     = (object) array("title" => "Commencer à programmer", "url" => "scripting/start-guide/start-scripting");

?><div class="tutorial-container">
    <div class="tutorial-header-container">
        <div class="hero-1">Le scripting sur GameIndus</div>
        <div class="hero-2"><i class="fa fa-code"></i> Démarrer en scripting</div>
    </div>
    <div class="tutorial-header-bar">
        <div class="left">
            <div class="tutorial-badge">2</div>
            Tutoriel : Apprendre le langage
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
        <h5 class="title">1. JavaScript, quésaco ?</h5>

        <div class="left" style="width:220px">
            <img src="http://i.stack.imgur.com/Mmww2.png" style="display:block" alt="Logo JavaScript">
        </div>
        <div class="right" style="width:calc(100% - 220px)">
            <br><br>
            Le JavaScript est un langage de programmation qui a été créé principalement pour animer les sites internets. Il permet de concevoir des pages web interactives. D'un autre coté, il est aussi beaucoup utilisé côté serveur afin de faire tourner des programmes.<br>
            GameIndus est composé à 80% de ce langage car il permet de faire fonctionner les jeux vidéo créés, les programmes serveur, mais aussi de rendre l'éditeur de création de jeu <b>intéractif</b> et <b>intuitif</b>.
        </div>
        <div class="clear"></div>

        <div class="separation"></div>
        <h5 class="title">2. Je ne connais pas le langage, grave ?</h5>

        Non, ce n'est pas grave, loin de là ! Par contre, nous vous conseillons de vous rendre au <u>tutoriel n°4</u> dédié aux scripts visuels qui seront plus adaptés. En effet, avant de pouvoir développer ses propres scripts dans l'éditeur de scripts, il faut avoir une base dans le domaine de l'algorithmique et du JavaScript. Si toutefois vous développez dans un autre langage mais pas en JavaScript, il vous sera possible de développer sur GameIndus, car le JavaScript n'est pas un langage informatique complexe à comprendre.
        <br><br>
        Si vous êtes débutant dans le domaine et que vous souhaitez vous lancer dans le domaine du développement, nous vous conseillons ce tutoriel, qui va vous apprendre pas à pas le JavaScript, avec de petits exercices (cliquez sur l'image) : <a href="https://www.codecademy.com/fr/learn/javascript" target="_blank" title="Codecademy JavaScript">
            <br>
            <img src="http://s3.amazonaws.com/codecademy-blog/assets/logo_blue_dark.png" width="300px" style="margin:10px 20px" alt="Logo Codecademy">
        </a>

        <div class="clear"></div>

        <?php if(!empty($nextTutorial)): ?>
            <a href="<?= DOCBASE . $nextTutorial->url; ?>" title="<?= $nextTutorial->title; ?>"><div class="next-tutorial-button">
                Continuer : <?= $nextTutorial->title; ?> <i class="fa fa-angle-right"></i> 
            </div></a>

            <div class="clear"></div>
        <?php endif; ?>
    </div>
</div>