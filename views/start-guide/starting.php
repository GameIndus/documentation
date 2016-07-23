<?php  
$stepsNumber = 7;
$currentStep = 1;

$previousTutorial = null;
$nextTutorial     = (object) array("title" => "Inscription", "url" => "start-guide/registation");

?><div class="tutorial-container">
    <div class="tutorial-header-container">
        <div class="hero-1">Bienvenue sur GameIndus !</div>
        <div class="hero-2"><i class="fa fa-rocket"></i> Guide de démarrage</div>
    </div>
    <div class="tutorial-header-bar">
        <div class="left">
            <div class="tutorial-badge">1</div>
            Tutoriel : Démarrer
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


        <div class="clear"></div>

        <?php if(!empty($nextTutorial)): ?>
            <a href="<?= DOCBASE . $nextTutorial->url; ?>" title="<?= $nextTutorial->title; ?>"><div class="next-tutorial-button">
                Continuer : <?= $nextTutorial->title; ?> <i class="fa fa-angle-right"></i> 
            </div></a>
        <?php endif; ?>
    </div>
</div>