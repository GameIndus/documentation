<?php
$next = array("title" => "Inscription", "url" => "start-guide/registration");
?>
<div class="tutorial-container">
    <?= generateTutoHeader(
        "Bienvenue sur GameIndus !", "Guide de démarrage",
        "Démarrer", "rocket", 1, null, $next
    ) ?>

    <div class="tutorial-content">
        <h5 class="title">1. Bonjour, et bienvenue sur GameIndus !</h5>

        GameIndus est un site internet regroupant de multiples services qui va vous permettre de réaliser les jeux
        vidéos de
        vos rêves.<br>
        Grâce à une prise en main facile et à des éditeurs puissants, créer son jeu vidéo avec GameIndus est
        relativement
        facile !<br>
        Et nous allons vous le prouver dans les différents tutoriels qui suivent en vous détaillant les étapes
        importantes
        dans la création sur notre plateforme.

        <div class="separation"></div>
        <h5 class="title">2. Présentation rapide de GameIndus</h5>

        <div class="presentation-container">
            <div class="section-container blue-container">
                <h1 class="hero-1">GameIndus,</h1>
                <h2 class="hero-2">un service en ligne pour créer des jeux vidéo</h2>
                <h2 class="hero-2"><b>FACILEMENT</b> et <b>RAPIDEMENT</b>, à plusieurs.</h2>
            </div>
            <div class="section-container darkblue-container">
                <h1 class="hero-1">Invitez vos amis</h1>
                <h2 class="hero-2">et créez les jeux de vos rêves en équipe.</h2>
                <h2 class="hero-2">Aucun fichier a transférer, vous voyez ce que font vos amis en direct !</h2>
            </div>
            <div class="section-container white-container">
                <h1 class="hero-1">Faites partager</h1>
                <h2 class="hero-2">vos jeux simplement en quelques clics,<br>sur <b>TOUTES</b> les plateformes
                    existantes.</h2>
            </div>
            <div class="section-container grey-container">
                <h1 class="hero-1">Des services en plus</h1>
                <h2 class="hero-2">ont été créés pour vous aider à tout moment<br>dans la réalisation de vos jeux.</h2>
                <h2 class="hero-2">Notre engagement est de vous accompagner au mieux.</h2>
            </div>
        </div>

        <div class="separation"></div>
        <h5 class="title">3. Se connecter sur GameIndus</h5>

        <img src="/imgs/how-to-connect.png" alt="Conenxion à GameIndus">

        <br><br>

        Afin de se connecter sur GameIndus, il faut taper l'adresse <a href="https://gameindus.fr/" target="_blank"
                                                                       title="https://gameindus.fr/"><b>https://gameindus.fr/</b></a>
        dans la barre d'adresse en haut de la fenêtre du navigateur. Si vous n'y arrivez pas, n'hésitez pas à faire
        appel à
        une autre personne, qui sait effectuer cette manipulation.<br>
        Si une page apparaît, cela signifie que vous êtes sur la page d'accueil de GameIndus. Le symbole avec le cadenas
        vert (sur la photo ci-dessus) signifie que vous êtes sur un site sécurisé, et que les échanges site - ordinateur
        sont sécurisés. <br>
        Pour créer des jeux vidéo depuis notre site internet, vous avez besoin de vous inscrire. Nous allons procéder à
        cette manipulation dans le <b>prochain tutoriel</b>.<br>
        Cliquez sur le bouton ci-dessous.


        <div class="clear"></div>

        <?= generateTutoFooter($next) ?>
    </div>
</div>
