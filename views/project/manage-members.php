<?php
$previous = array("title" => "Inviter un ami", "url" => "project/invite-friend");
?>
<div class="tutorial-container">
    <?= generateTutoHeader(
        "Les projets avec GameIndus", "Gérer son projet",
        "Gestion des membres", "bicycle", 3, $previous
    ) ?>

    <div class="tutorial-content">
        <h5 class="title">1. Les différents grades</h5>

        Dans la page <b>Gestion des membres</b> dans votre espace projet, vous avez la possiblité de modifier les grades
        des
        utilisateurs présents dans votre projet. Il existe plusieurs grades que vous pouvez assigner : <br>
        <ul>
            <li><b>- Le chef de projet</b> : le chef de projet est, par défaut, le créateur du projet. Il a accès à tout
                et
                possède tous les droits, dont celui de la suppression de projet.
            </li>
            <li><b>- Administrateur</b> : l'administrateur possède tous les droits du chef du projet, sauf la
                suppression du
                projet, et l'exclusion du chef du projet.
            </li>
            <li><b>- Membre</b> : c'est le grade de base. Ce grade ne permet pas d'exclure des utilisateurs, de modifier
                des
                options du projet, et d'accepter ou refuser les demandes.
            </li>
        </ul>

        <br>
        <blockquote class="warning">
            <i class="fa fa-warning"></i> Attention ! Les fonctionnalités Premium disponibles pour un projet sont liées
            au
            chef de projet. Si le chef de projet vient à changer et que le nouveau chef de projet n'est pas Premium, le
            projet
            perdra toutes ses fonctionnalités Premium, dont le <b>multijoueurs</b>.
        </blockquote>

        <div class="separation"></div>
        <h5 class="title">2. Les actions disponibles</h5>

        Vous pouvez, selon votre grade (voir ci-dessus), modifier facilement le grade d'un autre utilisateur dans votre
        projet. Notre algorithme de grade prend en compte les priorités des grades : par exemple, un membre ne peut pas
        exclure un administrateur, et un administrateur ne peut pas exclure le chef de projet. Il est aussi impossible
        d'avoir deux chefs de projet pour un seul projet. Toutes ces actions sont disponibles depuis le tableau des
        membres
        dans la page <b>Gestion des membres</b> (voir un exemple ci-dessus).

        <br><br>
        <img src="/imgs/example-managing-users.png" alt="Exemple de tableau de gestion d'utilisateurs"
             style="display:block;margin:0 auto">
        <br><br>

        <div class="clear"></div>
    </div>
</div>
