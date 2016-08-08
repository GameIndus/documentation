<?php

$previousTutorial = (object) array("title" => "Démarrer", "url" => "start-guide/starting");
$nextTutorial     = (object) array("title" => "Personnalisation", "url" => "start-guide/editprofile");

?><div class="tutorial-container">
    <div class="tutorial-header-container">
        <div class="hero-1">Bienvenue sur GameIndus !</div>
        <div class="hero-2"><i class="fa fa-rocket"></i> Guide de démarrage</div>
    </div>
    <div class="tutorial-header-bar">
        <div class="left">
            <div class="tutorial-badge">2</div>
            Tutoriel : Inscription
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
        <h5 class="title">1. Inscription</h5>

        Afin de s'inscrire sur GameIndus, il est important de se connecter sur le site internet de GameIndus. Après cela, il suffit de cliquer sur le bouton <b>Inscription</b> situé en haut à droite de la page, semblable à celui-ci : 

        <br><br>
        <img style="margin-left:20px" src="<?= DOCBASE ?>imgs/button-registration.png" alt="Bouton pour s'inscrire">
        <br><br>

        Une page s'ouvre et deux choix s'offrent à vous.

        <div class="separation"></div>
        <h5 class="title">2. Inscription avec une clé d'inscription</h5>

        Si vous possédez une clé d'inscription, vous pouvez directement vous inscrire en renseignant cette clé. L'inscription est relativement simple, et vous n'avez besoin que d'un pseudonyme, d'un mot de passe, et d'un e-mail. Une fois l'inscription terminée, notre site internet va vous envoyer un mail <u>dans les 5 minutes qui suivent</u>, en vous donnant un lien sur lequel il faudra cliquer pour confirmer votre compte.

        <div class="separation"></div>
        <h5 class="title">3. Inscription sans clé d'inscription</h5>

        Si vous n'avez pas de clé d'inscription, deux nouveaux choix s'offrent à vous :

        <ul>
            <li>1. Il vous est possible de renseigner un e-mail. Cet e-mail restera privé et ne sera diffusé à aucun organisme ni individu, en accord avec nos conditions générales d'utilisation. Nous pourrons dans ce cas-là vous envoyer un e-mail avec une clé d'inscription, lorsqu'un membre de notre équipe l'aura décidé, ou lors d'un tirage effectué chaque semaine par nos soins. <u>Nous ne pouvons donc pas vous assurer que vous allez recevoir une clé avec cette méthode.</u></li>
            <br>
            <li>2. Vous pouvez aussi vous inscrire en souscrivant à un compte <span style="font-weight:bold;color:#f1c40f"><i class="fa fa-star"></i> Premium</span>. Ce compte vous permettra donc d'accéder plus rapidement à plus de fonctionnalités. Il faudra toutefois payer au moins 1 mois d'abonnement pour valider l'inscription. Si vous vous êtes inscrit en passant par cette méthode sans payer, votre compte restera inutilisable jusqu'à ce qu'une clé d'inscription soit rentrée.<br>Afin d'avoir plus d'informations sur le grade Premium, <a href="https://gameindus.fr/premium" target="_blank" title="Grade Premium">cliquez ici</a>.</li>
        </ul>

        <div class="separation"></div>
        <h5 class="title">4. Problème pendant l'inscription</h5>

        Il n'est pas exclu d'avoir un problème durant la phase d'inscription. Voici quelques problèmes que vous pouvez rencontrer : <br><br>
        <ul>
            <li><b>1. Je ne reçois pas l'e-mail de confirmation</b> : dans ce cas-là, n'oubliez pas d'aller voir dans la boîte SPAM de votre boîte e-mail avant d'entamer toute procédure complémentaire. Si vous n'avez toujours pas l'e-mail 10 minutes après l'inscription sur notre site internet, ce dernier a peut-être un problème interne. Dans ce cas précis, il vous est possible de contacter un membre de l'équipe via un de nos réseaux sociaux, ou via notre adresse e-mail : <b>contact@gameindus.fr</b>. N'oubliez pas de lui préciser votre adresse e-mail, ainsi que votre pseudonyme utilisé lors de l'inscription.</li>
            <li></li><br>
            <li><b>2. Je reçois une erreur lors de l'inscription alors que toutes les informations sont correctes</b> : cela signifie qu'il y a sûrement une erreur interne à notre service. Dans ce cas-là, il est conseillé d'attendre quelques heures afin qu'un membre de notre équipe intervienne et corrige le problème.</li>
        </ul>

        <div class="clear"></div>

        <?php if(!empty($nextTutorial)): ?>
            <a href="<?= DOCBASE . $nextTutorial->url; ?>" title="<?= $nextTutorial->title; ?>"><div class="next-tutorial-button">
                Continuer : <?= $nextTutorial->title; ?> <i class="fa fa-angle-right"></i> 
            </div></a>

            <div class="clear"></div>
        <?php endif; ?>
    </div>
</div>