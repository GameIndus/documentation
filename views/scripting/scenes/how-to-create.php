<?php
//$next = array("title" => "Manipuler les scènes", "url" => "scripting/scenes/manage-scenes");
$next = null;
?>
<div class="tutorial-container">
    <?= generateTutoHeader(
        "Le scripting sur GameIndus", "Les scènes",
        "Créer une scène", "film", 1, null, $next
    ) ?>

  <div class="tutorial-content">
    <h5 class="title">1. Une scène, c'est quoi ?</h5>

    Dans notre moteur de jeu, une scène correspond à une "chambre" dans laquelle on peut choisir d'ajouter ce que l'on
    souhaite (Images, textes, sons...). Il est possible de créer un nombre infini de scène mais le jeu ne peut pas faire
    vivre deux scènes en même temps.<br>
    Par là, on entend le fait de pouvoir activer qu'une seule scène en même temps, et qu'il est impossible d'afficher
    deux scènes en simultané dans votre jeu.

    <div class="separation"></div>
    <h5 class="title">2. Principe de base</h5>

    Chaque scène est définie par ces principes de base :
    <ul style="list-style:square">
      <li>Une scène possède une taille quasiment infinie (~1.79E+308 * ~1.79E+308). Il est donc possible d'y placer des
        objets à n'importe quelle position, même si ces derniers se trouve en dehors de la zone visible par le joueur.
      </li>
      <li></li>
    </ul>

    <div class="clear"></div>
  </div>
</div>
