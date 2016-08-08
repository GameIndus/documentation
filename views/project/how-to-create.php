<?php

$previousTutorial = null;
$nextTutorial     = (object) array("title" => "Inviter un ami", "url" => "project/invite-friend");

?><div class="tutorial-container">
    <div class="tutorial-header-container">
        <div class="hero-1">Les projets dans GameIndus</div>
        <div class="hero-2"><i class="fa fa-bicycle"></i> Gérer son projet</div>
    </div>
    <div class="tutorial-header-bar">
        <div class="left">
            <div class="tutorial-badge">1</div>
            Tutoriel : Créer un projet/jeu
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
        <h5 class="title">1. Créer son premier projet</h5>

        Pour créer un projet, il faut posséder un compte sur GameIndus et être connecté sur le site internet. Pour créer un projet, il faut aller dans votre compte, puis aller dans la section <b>Mes jeux</b>. Dans cette page, vous avez la liste de tous les jeux que vous avez créés (ou ceux auxquels vous participez). Vous devez cliquer sur le bouton <b>Créer un nouveau projet</b>. Vous pouvez ensuite remplir le formulaire avec les informations que vous souhaitez. Tout est indiqué et expliqué afin de ne pas vous y perdre. <br><br>
        Un fois que votre premier projet a été créé ou que vous avez précédemment créé un projet, vous pouvez continuer la suite de ce tutoriel.
        
        <blockquote class="warning">
            <i class="fa fa-warning"></i> Attention ! Une fois le nom du projet décidé, vous ne pourrez plus le modifier.
        </blockquote>

        <div class="separation"></div>
        <h5 class="title">2. Modifier les options d'un projet</h5>

        Si vous n'êtes pas satisfait de certaines informations de votre projet, vous pouvez les changer à tout moment <b>(sauf le NOM du projet)</b>. Pour cela, vous devez vous rendre dans la page d'informations de votre projet en survolant la boîte de projet dans la page <b>Mon compte</b> ou <b>Mes jeux</b>, puis en cliquant sur l'oeil, et en vous dirigeant vers la section <b>Modifier le projet</b>.

        <blockquote>
            Il faut être <u>administrateur</u> du projet pour pouvoir modifier les options de ce dernier.
        </blockquote>

        <div class="separation"></div>
        <h5 class="title">3. Accéder à l'éditeur pour créer son jeu</h5>

        Une fois votre projet bien configurée, vous pouvez passer à la création de ce dernier. Pour cela, il faut accéder à l'éditeur de projet/jeu. Pour y accéder, c'est très simple : il vous suffit de vous rendre sur une des pages de votre projet, via l'oeil et de cliquer sur <b>Accéder à l'éditeur</b>, ou tout simplement en cliquant sur la baguette magique lors du survol de la boîte de projet dans la page <b>Mon compte</b> ou <b>Mes jeux</b> (voir ci-dessous).

        <br><br>
        <img src="<?= DOCBASE ?>imgs/project-account-menu.png" alt="Survol de la boîte de projet" style="display:block;margin:0 auto">
        <br><br>


        <div class="clear"></div>

        <?php if(!empty($nextTutorial)): ?>
            <a href="<?= DOCBASE . $nextTutorial->url; ?>" title="<?= $nextTutorial->title; ?>"><div class="next-tutorial-button">
                Continuer : <?= $nextTutorial->title; ?> <i class="fa fa-angle-right"></i> 
            </div></a>

            <div class="clear"></div>
        <?php endif; ?>
    </div>
</div>