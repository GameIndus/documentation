<?php

$previousTutorial = (object) array("title" => "Inscription", "url" => "start-guide/registration");
$nextTutorial     = null;

?><div class="tutorial-container">
    <div class="tutorial-header-container">
        <div class="hero-1">Bienvenue sur GameIndus !</div>
        <div class="hero-2"><i class="fa fa-rocket"></i> Guide de démarrage</div>
    </div>
    <div class="tutorial-header-bar">
        <div class="left">
            <div class="tutorial-badge">3</div>
            Tutoriel : Personnalisation
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
        <h5 class="title">1. Modifier le profil</h5>

        Maintenant que votre inscription s'est déroulée avec succès, vous êtes prêt à créer vos jeux vidéo ! Juste avant cela, nous vous conseillons de personnaliser votre compte et de modifier certaines informations vous concernant. <br>
        Pour cela, il faut se connecter sur le site internet via le bouton situé en haut à droite et se rendre dans la section <b>Editer mon profil</b>.<br>
        Vous pouvez, à partir de cette page, modifier certaines informations vous conernant, à savoir : <br><br>
        <ul>
            <li>- La description de votre compte, pour faire passer un petit message sur vous (ou autre)</li>
            <li>- Le mot de passe, à réécrire deux fois, si vous n'êtes pas satisfait de celui en cours d'utilisation</li>
            <li>- Le site internet, si vous en avez un</li>
            <li>- Le nom de votre compte Twitter, afin de le faire connaître, si vous en avez un</li>
            <li>- L'avatar</li>
            <li>- L'inscription à la newsletter, si vous souhaitez recevoir (ou non) la future lettre d'information mensuelle de GameIndus</li><br>
        </ul>


        <div class="separation"></div>
        <h5 class="title">2. Souscrire à un compte <span style="font-weight:bold;color:#f1c40f"><i class="fa fa-star"></i> Premium</span></h5>

        Si vous souhaitez avoir accès à plus de fonctionnalités et nous supporter, vous pouvez souscrire à un compte Premium à tout moment. Cette offre est sans engagement, et <u>vous pouvez arrêter cet abonnement à tout instant</u>. <br><br>
        Pour souscrire à un compte Premium, il faut se connecter sur le site et aller dans la section <b>Mon compte</b>. Sur cette page, vous devez accéder à la section Premium, en cliquant sur le bouton <b>Devenir premium dès maintenant</b>. Choissiez l'offre Premium, puis cliquez sur <b>Procédez au paiement</b> une fois que vous êtes sûr de votre commande. Vous allez être redirigé vers le site de PayPal pour procéder au paiement. En cas de problème avec ce service, nous vous conseillons de vous référer à leur aide en ligne. <br><br>

        Si tout se passe bien, vous allez être redirigé vers notre site internet avec un message de succès ! Votre compte a alors été automatiquement crédité d'un mois d'abonnement Premium.<br>
        En effet, si vous êtes déjà Premium et que vous procédez à cette manipulation, notre système va ajouter dynamiquement un mois d'abonnement, <u>sans supprimer vos jours d'abonnement restants</u>. <br><br>

        <blockquote class="warning">
            Si vous avez un quelconque problème lors de votre paiement, n'hésitez pas à contacter notre équipe sur les réseaux sociaux, ou via notre adresse e-mail <b>contact@gameinuds.fr</b>.
        </blockquote>

        <div class="separation"></div>
        <h5 class="title">3. Souscrire à un compte <span style="font-weight:bold;color:#f1c40f"><i class="fa fa-star"></i> Premium</span> gratuitement</h5>

        <br><br>
        <img src="<?= DOCBASE ?>imgs/premium-wheel.png" alt="Roue de la chance pour gagner au abonnement Premium" width="30%" style="display:block;margin:0 auto">
        <br><br>

        Si vous souhaitez obtenir gratuitement un compte Premium sans rien payer, vous pouvez tenter de lancer la roue (voir juste au dessus). Cette roue peut être lancée <u>une fois par jour</u>, via votre espace membre dans <b>Mon compte</b>. Cette dernière est seulement acessible pour les membres non-premiums, et pour une <b>durée indéfinie mais temporaire</b>. L'algorithme de la roue est basée sur le nombre d'essais et sur une probabilité aléatoire de gagner, donc vous avez toutes vos chances : bonne chance !

        <blockquote>
            Le reglèment de ce mini-jeu est disponible dans nos conditions générales d'utilisation.
        </blockquote>



        <div class="clear"></div>

        <?php if(!empty($nextTutorial)): ?>
            <a href="<?= DOCBASE . $nextTutorial->url; ?>" title="<?= $nextTutorial->title; ?>"><div class="next-tutorial-button">
                Continuer : <?= $nextTutorial->title; ?> <i class="fa fa-angle-right"></i> 
            </div></a>

            <div class="clear"></div>
        <?php endif; ?>
    </div>
</div>