<p>
  Dans ce chapitre nous allons aborder le sujet des évènements dans la création de jeux. En effet, pour créer un jeu
  complet, il est obligatoire de mettre en place des évènements. De manière générale, un évènement est caracterisé par
  <b>quelque chose qui se produit</b> : une action effectuée par le joueur ou générée par l'ordinateur.<br>
  <b>C'est parti !</b>
</p>

<hr>

<h4>Les "écouteurs" d'évènements</h4>
<br>
<p>
  Pour prendre en compte des évènements, il est essentiel de créer des écouteurs d'évènements. Leur but est "d'écouter"
  différents évènements afin de lancer certaines actions lors du déclenchement de ces derniers. Par exemple, il est
  possible de lancer un "écouteur d'évenement" sur le clavier et va détecter l'appui sur une certaine touche de
  celui-ci. Il est possible de résumer tout cela grâce à ce simple schéma : <br>

  <img src="/imgs/engine2d-events-schema.jpg" alt="Schéma du fonctionnement du système d'évènements">
  <br><br>
  Grâce à notre moteur de jeu, lancer un écouteur d'évènement est relativement simple : il faut utiliser le gestionnaire
  d'évènements disponible <small>(nommé EventsManager en anglais)</small>. L'ensemble des écouteurs sont définissables
  de la sorte : <br>
</p>

<pre>
	<code class="javascript">Game.getEventsManager().on("Nom de l'écouteur", function(parametres, ...){
	// Ensemble des actions à lancer
});</code>
</pre>

<br>
<p>
  Dans le code ci-dessus, je récupère le gestionnaire d'évènements avec "Game.getEventsManager()". Puis je défini un
  écouteur d'évènements avec la méthode <b>on(listener, function)</b> <small>(que l'on pourrait traduire par
    Lorsque)</small>. Cette méthode prend deux paramètres : le nom de l'écouteur d'évènements (listener) et la fonction
  à lancer lorsque l'évènement est détecté (function). <i>(Voir le schéma ci-dessus)</i>

</p>

<hr>

<h4>Liste des écouteurs d'évènements</h4>
<br>
<p>
  Il existe de nombreux écouteurs d'évènements attachés à notre gestionnaire. En voici une liste non exhaustive (mise à
  jour fréquemment) : <br>

<ul style="list-style-type:square">
  <li><b>gameRendered</b> : lorsque le jeu est rendu (affiché à l'écran, <small>s'effectue à chaque image soit environ
      30x à 60x par seconde</small>)
  </li>
  <li><b>loadedRessources</b> : lorsque toutes les ressources sont chargées (au lancement du jeu)</li>
  <li><b>loadedSounds</b> : lorsque tous les sons sont chargés (au lancement du jeu)</li>
  <li><b>loadedTiles</b> : lorsque une carte a finie de charger</li>
  <li><b>errorLoadingRessource</b> : lorsqu'une ressource n'a pas pu être chargée. <i>Prend un paramètre: la ressource
      non chargée</i></li>
</ul>
</p>
<br>
<p>
  Voici un exemple d'écouteurs d'évènements, qui permet de détecter si une ressource ne peut pas se charger au lancement
  du jeu. La fonction lancée prend un paramètre qui vous donne accès à l'adresse de la ressource non chargée (voir
  ci-dessus).
</p>
<pre>
	<code class="javascript">Game.getEventsManager().on("errorLoadingRessource", function(ressource){
	console.log(ressource); // Va afficher dans la console l'adresse de la ressource non chargée
});</code>
</pre>

<hr>

<h4>Les évènements lancés par le joueur</h4>
<br>
<p>
  Comme dit précédemment, il est aussi possible de détécter l'action du joueur sur le jeu (clavier, souris, manette...).
  Pour détecter ces actions, une autre classe est disponible, simple d'utilisation : la classe <b>Input</b> <small><i>(Entrée
      de données, en anglais)</i></small>. Elle fonctionne de la même manière que le gestionnaire d'évènements,
  semblable à ceci : <br>
</p>
<pre>
	<code class="javascript">Input.methode(touche|souris, function(evenement){
	// Les actions à lancer
});</code>
</pre>
<p>
  <br>
  De nombreuses méthodes sont disponibles pour détecter les bonnes actions. En voici une liste non exhaustive :

<ul style="list-style-type:square">
  <li><b>keyDown</b> : lorsqu'une touche est enfoncée (1er paramètre: la touche sous format texte)</li>
  <li><b>keyUp</b> : lorsqu'une touche est relachée (1er paramètre: la touche sous format texte)</li>
  <li><b>keyPress</b> : lorsqu'une touche est enfoncée (similaire à keyDown) (1er paramètre: la touche sous format
    texte)
  </li>
  <li><b>shiftKeyDown</b> : lorsqu'une touche + la touche shift sont enfoncées (1er paramètre: la touche sous format
    texte)
  </li>
  <li><b>shiftKeyUp</b> : lorsqu'une touche + la touche shift sont relachées (1er paramètre: la touche sous format
    texte)
  </li>
  <li><b>shiftKeyPress</b> : lorsqu'une touche + la touche shift sont enfoncées (similaire à shiftKeyDown) (1er
    paramètre: la touche sous format texte)
  </li>
  <br>
  <li><b>click</b> : lorsque le joueur clique dans la fenêtre (1er paramètre: le bouton de la souris <b>left, right ou
      middle</b>)
  </li>
  <li><b>mouseDown</b> : lorsque le joueur commence à appuyer sur un bouton de la souris (1er paramètre: le bouton de la
    souris, valeurs valides : <b>left, right ou middle</b>)
  </li>
  <li><b>mouseUp</b> : lorsque le joueur relâche un bouton de la souris (1er paramètre: le bouton de la souris, valeurs
    valides : <b>left, right ou middle</b>)
  </li>
  <li><b>mouseMove</b> : lorsque le joueur déplace le curseur de la souris (1er paramètre: <b>aucun</b>)</li>
  <li><b>wheel</b> : lorsque le joueur change le statut de la molette (1er paramètre: la direction, valeurs valides :
    <b>top, bottom</b>)
  </li>
</ul>
</p>

<br><br>

<h4>Les tests, sans écouteur d'évènements</h4>
<br>
<p>
  Dans certains cas, il est utile de connaître le statut du clavier, de la souris, ... sans à avoir à utiliser un
  écouteur d'évenement. Cela peut notamment être utilisé dans les comportements, ou des fonctions personnalisées. C'est
  pourquoi la classe <b>Input</b> donne accès à plusieurs méthodes pour détecter les actions du joueur, de manière <u>synchrone</u>.
  Les voici : <br>

<ul style="list-style-type:square">
  <li><b>keyIsDown(touche)</b> : vérifie si le joueur appuie sur une touche (paramètre: touche à vérifier sous format
    texte)
  </li>
  <li><b>mouseIsDown(partie)</b> : vérifie si le joueur appuie sur une partie de la souris (paramètre: partie à
    vérifier, valeurs valides: <b>left, middle ou right</b>)
  </li>
</ul>
</p>

<br>
<hr>

<h4>Exemples d'utilisation</h4>
<br>
<ul style="list-style-type:square">
  <li>
    <p>
      <b>Je souhaite afficher un message au joueur quand toutes les ressources sont chargées.</b> <br>
      Pour faire çela, il faut utiliser le gestionnaire d'évènements.
    <pre>
	<code class="javascript">Game.getEventsManager().on("loadedRessources", function(){
	// J'envoie un message au joueur pour lui informer que les ressources sont chargées
	alert("Toutes les ressources sont chargées !");
});</code>
</pre>
    </p>
  </li>
  <li>
    <p>
      <b>Je souhaite modifier la couleur d'un carré en appuyant sur la touche <u>Entrée</u></b> <br>
      Pour faire çela, il faut utiliser la classe Input et écouter l'évènement <i>keyDown</i>.
    <pre>
	<code class="javascript">Input.keyDown("enter", function(){
	// Je récupère mon objet (ici mon carré) et le stocke dans la variable "carre"
	// Ensuite, je récupère son système de rendu et applique la couleur jaune

	var carre = Game.getCurrentScene().getGameObject("carré");
	carre.getRenderer().color = "yellow";
});</code>
</pre>
    </p>
  </li>
  <li>
    <p>
      <b>Je souhaite faire avancer un objet vers la droite en appuyant sur la touche "droite"</b> <br>
      Pour faire çela, plusieurs solutions sont possibles. On peut tout d'abord utiliser la méthode <b>Input.keyDown</b>.
      Mais on peut aussi utiliser le gestionnaire d'évènements et vérifier à chaque image si la touche "droite" est
      enfoncée (voir ci-dessous). Néanmoins une autre technique existe, encore plus simple, qui consiste à utiliser le
      système de comportement <small><i>(voir la page dédiée)</i></small>.
    <pre>
	<code class="javascript">// Tout d'abord, je stocke mon objet dans la variable "objet"
var objet = Game.getCurrentScene().getGameObject("personnage");

// Puis, je lance mon écouteur d'évènement "gameRendered" (voir au-dessus pour plus d'informations)
Game.getEventsManager().on("gameRendered", function(){

	// Je vérifie si le joueur appuie sur la touche "right" > "droite"
	if(Input.keyIsDown("right")){

		// Si oui, je déplace mon objet vers la droite en incrémentant (augmenter) sa position en X
		objet.getPosition().addX(5);
	}
});</code>
</pre>
    </p>
  </li>
</ul>
