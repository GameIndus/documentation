<?php
$previous = array("title" => "Introduction", "url" => "scripting/start-guide/starting");
$next = array("title" => "Commencer à programmer", "url" => "scripting/start-guide/start-scripting");
?>
<div class="tutorial-container">
  <?= generateTutoHeader(
      "Le scripting sur GameIndus", "Démarrer en scripting",
      "Apprendre le langage", "code", 2, $previous, $next
  ) ?>

  <div class="tutorial-content">
    <h5 class="title">1. JavaScript, quésaco ?</h5>

    <div class="left" style="width:220px">
      <img src="//i.stack.imgur.com/Mmww2.png" style="display:block" alt="Logo JavaScript">
    </div>
    <div class="right" style="width:calc(100% - 220px)">
      <br><br>
      Le JavaScript est un langage de programmation qui a été créé principalement pour animer les sites internets. Il
      permet de concevoir des pages web interactives. D'un autre coté, il est aussi beaucoup utilisé côté serveur afin
      de faire tourner des programmes.<br>
      GameIndus est composé à 80% de ce langage car il permet de faire fonctionner les jeux vidéo créés, les programmes
      serveur, mais aussi de rendre l'éditeur de création de jeu <b>intéractif</b> et <b>intuitif</b>.
    </div>
    <div class="clear"></div>

    <div class="separation"></div>
    <h5 class="title">2. Je ne connais pas le langage, grave ?</h5>

    Non, ce n'est pas grave, loin de là ! Par contre, nous vous conseillons de vous rendre au <u>tutoriel n°4</u> dédié
    aux scripts visuels qui seront plus adaptés. En effet, avant de pouvoir développer ses propres scripts dans
    l'éditeur de scripts, il faut avoir une base dans le domaine de l'algorithmique et du JavaScript. Si toutefois vous
    développez dans un autre langage mais pas en JavaScript, il vous sera possible de développer sur GameIndus, car le
    JavaScript n'est pas un langage informatique complexe à comprendre.
    <br><br>
    Si vous êtes débutant dans le domaine et que vous souhaitez vous lancer dans le domaine du développement, nous vous
    conseillons ce tutoriel, qui va vous apprendre pas à pas le JavaScript, avec de petits exercices (cliquez sur
    l'image) : <a href="//www.codecademy.com/fr/learn/javascript" target="_blank" title="Codecademy JavaScript">
      <br>
      <img src="//s3.amazonaws.com/codecademy-blog/assets/logo_blue_dark.png" width="300px"
           style="margin:10px 20px" alt="Logo Codecademy">
    </a>

    <div class="clear"></div>

    <?= generateTutoFooter($next) ?>
  </div>
</div>
