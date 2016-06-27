<p>
	Dans ce chapitre, nous allons voir comment gérer des comportements. De manière générale, un comportement caractérise une manière d'être, d'agir ou de réagir. Grâce à notre moteur de jeu, il est possible de créer des comportements personnalisés et donc de définir certaines manières d'agir pour certains objets. Mais comme les objets de jeu ne sont pas des êtres humains, ils pourront avoir plusieurs comportements. <br>
	<b>C'est parti !</b>
</p>

<hr>

<h4>Le fonctionnement des comportements</h4>
<br>
<p>
	Un comportement permet de décider et de définir une manière d'agir pour un objet. Un seul comportement pourra donc être appliqué sur plusieurs objets. Le fonctionnement d'un comportement sur GameIndus peut être résumé via ce schéma : <br>

	<img src="/imgs/engine2d-behaviors-schema.jpg" alt="Schéma du fonctionnement d'un comportement dans le moteur de jeu de GameIndus">
	<br>
	Comme indiqué sur le schéma ci-dessus, un comportement possède deux fonctions : une fonction nommée <b>run</b> qui se lancera à la création de l'objet, et une seconde fonction nommée <b>loop</b> qui sera lancée à chaque fois que l'objet en question sera rendu. Un comportement est dynamique : il s'adapte à chaque objet sur lequel on l'a appliqué, donc chaque fonction donne accès à une variable objet qui va contenir l'objet courrant. 
</p>

<hr>

<h4>Créer un comportement</h4>
<br>
<p>
	Pour créer un comportement, il est obligatoire utiliser la classe <b>SingleBehavior</b>. Cette classe permet de définir les deux fonctions disponibles loop et run. Aucune méthode n'est indispensable, donc il est possible de seulement définir la fonction loop, sans se préocupper de la fonction run. 
	<br> Voici un exemple de la création d'un comportement : <br>
	<pre>
		<code class="javascript">var comportement = new SingleBehavior({
	maVariable: "Mon texte !",

	run: function(objet){
		// Fonction de démarrage
		// Je peux manipuler l'objet courrant avec la variable "objet"
	},

	loop: function(objet){
		// Fonction de mise à jour
		// Je peux manipuler l'objet courrant avec la variable "objet"
	}
});</code>
	</pre>
</p>
<p>
	Il est aussi possible de définir des variables au sein du comportement. Dans l'exemple ci-dessus, la variable <i>maVariable</i> est définie seulement dans la classe de comportement et peux être appelée dans les fonctions via le mot clé <b>this</b>. On peut donc faire ici "<i>this.maVariable</i>".
</p>

<hr>

<h4>Appliquer un comportement</h4>
<br>
<p>
	Une fois le comportement créé, il faut le lier à un objet. Pour cela, il faut utiliser la fonction <b>addBehavior(b)</b> disponible dans la classe d'un objet <small>(voir la section <u>Manipuler les objets</u>)</small>. Ici, on pourra donc faire : <br>
	<pre>
		<code class="javascript">var scene = Game.getCurrentScene();
var objet1 = scene.getGameObject("objet 1");
var objet2 = scene.getGameObject("objet 2");

// J'ajoute mon comportement défini plus haut aux deux objets, séparemment.
objet1.addBehavior(comportement);
objet2.addBehavior(comportement);</code>
	</pre>
</p>
<p>
	Il ne restera plus qu'à remplir les fonctions run et loop dans le comportement pour modifier la manière d'agir des deux objets.
</p>

<hr>

<h4>Exemple de comportement</h4>
<br>
<p>
	J'ai une scène nommée "test" qui contient deux carrés "carré 1" et "carré 2". Je souhaite les faire bouger grâce aux touches du clavier "gauche, droite, haut et bas". Afin d'éviter de devoir réécrire plusieurs fois le même code, je décide d'utiliser le système de comportement. <br>
	Voici à quoi pourrait ressembler mon code : <br>
	<pre>
		<code class="javascript">// Je stocke mes deux carrés dans des variables
var scene = Game.getCurrentScene();
var carre1 = scene.getGameObject("carré 1");
var carre2 = scene.getGameObject("carré 2");

// Je définis mon comportement
var b = new SingleBehavior({
	speed: 5,

	loop: function(objet){
		if(Input.keyIsDown("left")){
			objet.getPosition().substractX(this.speed);
		}
		if(Input.keyIsDown("right")){
			objet.getPosition().addX(this.speed);
		}
		if(Input.keyIsDown("top")){
			objet.getPosition().substractY(this.speed);
		}
		if(Input.keyIsDown("bottom")){
			objet.getPosition().addY(this.speed);
		}
	}
});

// J'ajoute mon comportement "b" aux deux carrés
carre1.addBehavior(b);
carre2.addBehavior(b);</code>
	</pre>
</p>
<p>
	On peut aperçevoir l'utilisation de la classe Input et de la fonction keyIsDown. Etant donné que la fonction loop se lance à chaque fois que l'objet en question se met à jour, on vérifie en même temps si une des touches souhaitée est enfoncée, pour le faire bouger. Comme ce comportement est attribué aux deux objets, les deux objets auront ce même comportement, et bougeront en même temps : tel est l'avantage du système de comportement.<br>
	De plus, il est possible d'ajouter plusieurs comportements en même temps, pour simplifier vos scripts.
</p>