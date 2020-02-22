<p>
    Dans ce chapitre, nous allons voir comment manipuler les objets de votre jeu grâce à un script.<br>
    <b>C'est parti !</b>
</p>

<hr>

<h4>Récupérer un objet d'une scène</h4>
<br>
<p>
    Avant de pouvoir manipuler et modifier les paramètres d'un objet d'une scène, il faut tout d'abord le récupérer et
    le
    stocker dans une variable <small>(non obligatoire)</small>.
    Pour cela, il faut récupérer la scène dans laquelle se situe l'objet à récupérer, comme ceci : <br>

<pre>
		<code class="javascript">var scene = Game.getCurrentScene(); // Stocke la scène courrante dans la variable "scene"
var scene = Game.getScene("Nom de la scène"); // On peut aussi récupérer une scène via son nom</code>
	</pre>
</p>
<p>
    Une fois la scène stockée, on peut récupérer un objet grâce à la fonction <b>getGameObject([Nom])</b>, comme cela :

<pre>
		<code class="javascript">var scene = Game.getCurrentScene(); // On stocke la scène courrante dans la variable "scene"
var objet = scene.getGameObject("Nom de mon objet"); // On stocke l'objet "Nom de l'objet" dans la variable "objet"

// Il est aussi possible de le faire en une seule ligne :
var objet = Game.getCurrentScene().getGameObject("Nom de mon objet");</code>
	</pre>

</p>

<blockquote>
    <p>
        <i class="fa fa-info-circle"></i> Le nom d'une scène correspond à son nom de fichier. Le nom d'un objet de jeu
        correspond à son nom donné dans l'éditeur de scène, dans la boîte de paramètres.
    </p>
</blockquote>
<br>

<hr>

<h4>Méthodes communes</h4>
<br>
<p>
    Il existe de nombreuses fonctions communes à tous les objets de jeu. On peut notamment citer les méthodes de
    position,
    de taille, etc.. Voici une liste
    détaillée de ces fonctions :

<ul style="list-style-type:square">
    <li><b>getID()</b> : récupère l'identifiant de l'objet</li>
    <li><b>getPosition()</b> : récupère la position de l'objet. On peut ensuite manipuler cette position grâce à de
        nombreuses fonctions comme <i>getY()</i>, <i>setX()</i>, <i>addX()</i>, <i>addY()</i>, <i>substract()</i>...
    </li>
    <li><b>getSize()</b> : récupère la taille de l'objet en pixels, sous forme d'objet {w, h}.</li>
    <li><b>rotate(angle)</b> : Applique une rotation sur l'objet (en degré, avec haut = 0° et base = 180°).</li>
    <li><b>addBehavior(b)</b> : Attacher un comportement à l'objet {b: classe de comportement}. <u>Voir la section
            appropriée pour plus d'infos</u></li>
    <li><b>setLayer(layer)</b> : Change le calque d'apparition de l'objet dans la scène (de 0 à 9). Plus l'objet sera
        sur
        un calque élevé, plus il sera mis en avant.
    </li>
    <li><b>setOpacity(o)</b> : Change l'opacité {o} de l'objet (de 0 à 1). Mettre l'opacité à 0 revient à cacher l'objet
    </li>
    <li><b>setPosition(x, y)</b> : Déplacer l'objet aux coordonnées {x, y} dans la fenêtre de jeu</li>
    <li><b>setRenderer(r)</b> : Attacher un moteur de rendu à l'objet {r: moteur de rendu}</li>
    <li><b>setSize(w, h)</b> : Définir la taille de l'objet en {largeur, hauteur}</li>
    <li><b>setVelocity(v)</b> : Appliquer une vélocité à l'objet {v: Vecteur2}</li>
</ul>

</p>
<br>
<p>
    Voici une brève explication des différents composants cités ci-dessus :

<ul style="list-style-type:square">
    <li>
        <b>Velocité</b> : une vélocité est définie par un vecteur. En appliquant une certaine vélocité,
        on peut donc faire déplacer l'objet avec une direction, une force et un sens. On peut manipuler les vecteurs
        grâce à
        la classe Vector2. Voici un exemple :
        <pre><code class="javascript">var v = new Vector2(); // On créé un vecteur
v.setAngle(45); // On lui applique un angle de 45°, sachant que haut = 0° et bas = 180°
v.setLength(50); // On lui applique une force de 50
o.setVelocity(v); // Enfin, on applique notre velocité à l'objet stocké dans la variable "o"</code></pre>

        <br>
    </li>
    <li>
        <b>Moteur de rendu</b> : un moteur de rendu va permettre à l'objet d'être affiché à l'écran. Un objet sans
        moteur de
        rendu <u>apparaîtera invisible</u>.
        Il ne faut donc pas faire abstraction de cela. Il en existe 3 à l'heure actuelle : ImageRenderer, SpriteRenderer
        et
        GeometricRenderer. Si cela vous paraît trop difficile,
        nous vous conseillons d'utiliser l'éditeur de scène pour vous simplifier la tâche. <br>
        Ils ont tous les trois des fonctions spécifiques, c'est pourquoi nous les détaillerons plus tard.
    </li>
</ul>
</p>

<hr>

<h4>Manipuler des sprites/images animées</h4>
<br>
<p>
    Liste des fonctions accessibles pour modifier un sprite :

<ul style="list-style-type:square">
    <li>
        <b><span class="err"><i class="fa fa-warning"></i></span> defineAnimation(name, speed, startPos, frames,
            flipped)</b> : <span class="err">Niveau avancé requis</span>.
        Créer une animation spécifique avec un nom {name}, une vitesse {speed}, une position de départ {startPos}, les
        images à suivre (indexs de l'image) {frames}. Il est aussi
        possible de passer un autre paramètre, ici nommé {flipped}, pour retrourner le sprite à l'horizontale.
    </li>
    <li>
        <b>getAnimations()</b> : Récupère toutes les animations du sprite sous forme d'objet {nom -> objet}.
    </li>
    <li>
        <b>removeAnimation(name)</b> : Supprime une certaine animation du sprite avec son nom {name}.
    </li>
    <li>
        <b>setAnimated(bool)</b> : Active oui ou non l'animation du sprite, grâce au seul paramètre {bool}.
    </li>
    <li>
        <b>setAnimation(name)</b> : Défini l'animation à jouer grâce à son nom {name}.
    </li>
</ul>
</p>

<hr>

<h4>Autres opérations</h4>
<br>
<p>
    Parfois on souhaite effectuer des opérations plus spécifiques sur un objet. Voici quelques mises en scènes dans
    lesquelles vous pourrez tomber :

    <ul style="list-style-type:square">
        <li>
            <b>Je veux récupérer un objet de ma scène à une certaine position (x, y).</b>
<p>
    Vous pouvez le faire grâce à la méthode <i>getObjectAt(x, y, layer, exclude)</i> de la classe scène. Vous devez
    fournir la position à tester {x} et {y},
    le calque à exclure {layer} (optionnel), et un objet à exclure de la recherche {exclude} (optionnel). <br><br>
<pre><code class="javascript">var o = Game.getCurrentScene().getObjectAt(500, 500, 2, null);
// Cette fonction va chercher un objet aux cordonnées {500, 500} au calque 2, sans exclure d'objet.</code></pre>
</p>
</li>
<br><br>
<li>
    <b>Je souhaite créer manuellement mon objet, sans passer par l'éditeur.</b>
    <p>
        Il est tout à fait possible de le faire, en instanciant la classe <i>GameObject</i> avec un tableau contenant la
        taille de l'objet en paramètre. Vous devrez néanmoins l'ajouter à votre scène grâce à la fonction
        <i>add(object)</i> ou <i>registerGameObject(name, object)</i> pour lui attribuer un nom. <br><br>
    <pre><code class="javascript">var objet = new GameObject([50, 50]); // Je créé un objet de taille {50, 50}
objet.setPosition(100, 100); // Je le déplace aux coordonnées {100, 100}
objet.setRenderer(new GeometricRenderer({color: "red"}); // Je lui applique un moteur de rendu spécifique
Game.getCurrentScene().add(objet); // Je l'ajoute à ma scène courrante</code></pre>
    </p>
</li>
<br><br>
<li>
    <b>Je souhaite récupérer la distance entre deux objets.</b>
    <p>
        Cette opération est réalisable grâce à la fonction <i>distanceTo</i>. Plus concrètement, elle permet de
        récupérer la
        distance entre deux positions.
        <br><br>
    <pre><code class="javascript">var scene = Game.getCurrentScene(); // Je récupère la scène courrante
var objet1 = scene.getGameObject("Objet 1"); // Je récupère mon objet "Objet 1", créé dans l'éditeur de scène
var objet2 = scene.getGameObject("Objet 2"); // Je récupère mon objet "Objet 2"

// Je récupère la distance entre les positions de mes deux objets :
var dist = objet1.getPosition().distanceTo(objet2.getPosition());

// Il est aussi possible de faire ceci :
var dist = objet2.getPosition().distanceTo(objet1.getPosition());

console.log(dist); // J'affiche la distance dans la console de développement.</code></pre>
    </p>
</li>
<br><br>
<li>
    <b>Je souhaite déplacer un objet vers un autre de manière fluide</b>
    <p>
        Cette opération est réalisable grâce à la fonction <i>lerpTo</i>. "lerp" est une fonction mathématique
        permettant de
        créer une interpolation entre deux valeurs. Si cette définition ne vous dis rien, ce n'est pas grave : cela
        permet
        de fluidifier les déplacements d'une position à une autre.
        <br><br>
    <pre><code class="javascript">var scene = Game.getCurrentScene(); // Je récupère la scène courrante
var objet1 = scene.getGameObject("Objet 1"); // Je récupère mon objet "Objet 1", créé dans l'éditeur de scène
var objet2 = scene.getGameObject("Objet 2"); // Je récupère mon objet "Objet 2"

objet1.getPosition().lerpTo(objet2.getPosition());</code></pre>
    </p>
</li>
</ul>
</p>
