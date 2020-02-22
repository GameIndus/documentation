<?php
$previous = array("title" => "Créer un projet/jeu", "url" => "project/how-to-create");
$next = array("title" => "Gestion des membres", "url" => "project/manage-members");
?>
<div class="tutorial-container">
    <?= generateTutoHeader(
        "Les projets avec GameIndus", "Gérer son projet",
        "Inviter un ami", "bicycle", 2, $previous, $next
    ) ?>

    <div class="tutorial-content">
        <h5 class="title">1. Aidez votre ami à obtenir un compte</h5>

        Afin qu'un ami puisse rejoindre votre projet, ce dernier doit avoir un compte. Durant la version de
        développement,
        il est obligatoire de se munir d'un clé pour s'inscrire. Afin de faciliter son inscription, nous avons ajouté
        une
        fonctionnalité utilisable une seule fois qui va vous permettre de l'inviter simplement.<br>
        Pour cela, rendez-vous dans votre compte, et sur la même page, rendez-vous dans la section <b>Invitez un ami</b>.
        Dans cette partie, il vous est possible de générer une clé pour un de vos amis. Une fois cette clé générée, vous
        pouvez lui envoyer afin qu'il s'inscrive très simplement. Cet ami peut faire de même de son côté, et il est
        possible
        d'inviter un <u>nombre infini d'ami</u> de cette manière.

        <blockquote class="warning">
            <i class="fa fa-warning"></i> Attention ! Vous ne pouvez générer qu'une seule clé d'inscription pour un seul
            ami.
        </blockquote>

        <div class="separation"></div>
        <h5 class="title">2. Inviter un ami dans le projet</h5>

        Une fois que votre ami est inscrit, il va falloir l'inviter dans votre projet. Il n'est pas possible de le faire
        directement, et c'est à lui de faire la première étape. Pour cela, votre ami, doit retrouver votre projet dans
        la
        galerie des jeux avec le nom du projet. Une fois sur la page du projet, cet utilisateur doit cliquer sur le
        bouton
        <b>Rejoindre le projet</b> pour demander à le rejoindre. <br>

        <br>
        <blockquote>
            Si votre projet est privé, la démarche est différente, car votre ami ne pourra pas retrouver votre projet
            dans la
            galerie. Pour contourner cela, envoyer-lui le lien de demande disponible dans la page <b>Membres du
                projet</b> du
            projet. Il n'aura plus qu'à coller ce lien dans le navigateur pour valider sa demande à rejoindre votre
            projet.
        </blockquote>
        <br>

        Une fois la demande effectuée, vous devez aller sur la page <b>Membres du projet</b> depuis la page d'accueil du
        projet. Puis, vous devez accepter la demande de votre ami qui apparaîtra dans la partie <u>Demandes reçues</u>.
        Une
        fois cette action effectuée, votre ami fait parti de votre projet ! Bonne création à plusieurs !

        <div class="clear"></div>

        <?= generateTutoFooter($next) ?>
    </div>
</div>
