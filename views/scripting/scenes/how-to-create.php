<?php

$previousTutorial = null;
$nextTutorial     = (object) array("title" => "Manipuler les scènes", "url" => "scripting/scenes/manage-scenes");

?><div class="tutorial-container">
    <div class="tutorial-header-container">
        <div class="hero-1">Le scripting sur GameIndus</div>
        <div class="hero-2"><i class="fa fa-film"></i> Les scènes</div>
    </div>
    <div class="tutorial-header-bar">
        <div class="left">
            <div class="tutorial-badge">1</div>
            Tutoriel : Créer une scène
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
        <!-- <h5 class="title">1. Une scène, c'est quoi ?</h5>

        Dans notre moteur de jeu, une scène correspond à une "chambre" dans laquelle on peut choisir d'ajouter ce que l'on souhaite (Images, textes, sons...). Il est possible de créer un nombre infini de scène mais le jeu ne peut pas faire vivre deux scènes en même temps.<br>
        Par là, on entend le fait de pouvoir activer qu'une seule scène en même temps, et qu'il est impossible d'afficher deux scènes en simultané dans votre jeu.

        <div class="separation"></div>
        <h5 class="title">2. Principe de base</h5>

        Chaque scène est définie par ces principes de base :
        <ul style="list-style:square">
            <li>Une scène possède une taille quasiment infinie (~1.79E+308 *  ~1.79E+308). Il est donc possible d'y placer des objets à n'importe quelle position, même si ces derniers se trouve en dehors de la zone visible par le joueur.</li>
            <li></li>
        </ul> -->
        

        <div class="clear"></div>

        <?php if(!empty($nextTutorial)): ?>
            <a href="<?= DOCBASE . $nextTutorial->url; ?>" title="<?= $nextTutorial->title; ?>"><div class="next-tutorial-button">
                Continuer : <?= $nextTutorial->title; ?> <i class="fa fa-angle-right"></i> 
            </div></a>

            <div class="clear"></div>
        <?php endif; ?>
    </div>
</div>