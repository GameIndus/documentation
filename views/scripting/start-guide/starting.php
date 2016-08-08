<?php

$previousTutorial = null;
$nextTutorial     = (object) array("title" => "Apprendre le langage", "url" => "scripting/start-guide/learn-script");

?><div class="tutorial-container">
    <div class="tutorial-header-container">
        <div class="hero-1">Le scripting sur GameIndus</div>
        <div class="hero-2"><i class="fa fa-code"></i> Démarrer en scripting</div>
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
        <h5 class="title">1. Qu'est-ce que le scripting ?</h5>

        Sur GameIndus, il est possible de faire ce qu'on appelle du scripting. Par là, on entend l'action de développer un script <i>(vient du verbe "script" en anglais, qui signifie "écrire un script")</i>.
        <br>
        Il est donc possible de créer ses propres scripts depuis l'éditeur de jeu de GameIndus, en utilisant un langage de développement. Ces scripts seront ensuite analysés par notre système, puis retranscrits pour fonctionner dans vos jeux vidéo.
        <br>
        Ce scripting est nécessaire pour faire fonctionner correctement vos jeux vidéo car il va permettre de les animer, de définir les règles, de créer les espaces, les objets, les lumières, etc. Tous vos jeux vidéo seront fondés à partir de scripts et de ressources : c'est la base d'un jeu vidéo. <br>
        
        <div class="separation"></div>
        <h5 class="title">2. Et il faut savoir quoi ?</h5>

        Pour faire du scripting sur GameIndus, deux méthodes sont possibles, une avec des pré-requis, et une autre sans : <br>
        <ul>
            <li><b>- Développer ses propres scripts :</b> il sera donc nécessaire d'avoir des connaissances basiques en algorithmique et en développement. Sur GameIndus, vous avez besoin de maîtriser le JavaScript, un langage qui permet d'animer un site web. Si vous voulez en savoir plus, nous vous invitons à rejoindre le <u>tutoriel 2</u>.</li><br>
            <li><b>- Utiliser l'éditeur de script visuel :</b> si vous êtes un débutant dans le domaine du développement, ne vous inquiétez pas ! Il vous est possible d'utiliser notre <b>éditeur de script visuel</b>. Il permet de créer des scripts visuellement. Vous n'avez donc besoin d'aucune compétence en développement, car tout a été fait pour simplifier la tâche ! Si vous voulez en savoir plus, nous vous invitons à rejoindre le <u>tutoriel 4</u>.</li>
        </ul>

        <div class="separation"></div>
        <h5 class="title">3. Mise en place des scripts</h5>

        Seul l'éditeur de jeu permet la création de scripts. Selon votre précédent choix, vous devrez utiliser l'éditeur de script ou de script visuel en créant les bons types de fichier dans la barre située à gauche de l'écran (avec la liste de fichier). Pour créer le type de fichier que vous voulez, il est nécessaire de cliquer sur l'icône <img src="http://i.imgur.com/HLj48Ef.png" alt="Icone de création de fichier" style="display:inline-block;position:relative;top:8px"> puis de choisir le type que vous souhaitez (script ou script visuel).


        <div class="clear"></div>

        <?php if(!empty($nextTutorial)): ?>
            <a href="<?= DOCBASE . $nextTutorial->url; ?>" title="<?= $nextTutorial->title; ?>"><div class="next-tutorial-button">
                Continuer : <?= $nextTutorial->title; ?> <i class="fa fa-angle-right"></i> 
            </div></a>

            <div class="clear"></div>
        <?php endif; ?>
    </div>
</div>