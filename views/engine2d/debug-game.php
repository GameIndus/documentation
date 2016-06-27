<p>
	En créant un jeu, il peut arriver de se confronter à certains problèmes techniques et se retrouver face à des erreurs. Dans ce chapitre, nous allons essayer de montrer comment les détecter, comment les comprendre, et comment les résoudre. Nous allons aussi donner quelques astuces afin de déboguer son jeu le plus rapidement possible. <br>
	<b>C'est parti !</b>
</p>

<hr>

<h4>Détecter une erreur</h4>
<br>
<p>
	Pour repérer une erreur assez rapidement, le meilleur outil reste l'utilisation de la console de votre navigateur. <br>
	Pour ouvrir la console de votre navigateur :
	
	<ul style="list-style-type:square">
		<li><b>Google Chrome</b> : il faut utiliser la combinaison de touche suivante : <b>Ctrl - Shift - J</b>. Si cette combinaison ne fonctionne pas, il est toujours possible de faire <b>Menu > Plus d'outils > Outils de développement</b>.</li>
		<br>
		<li><b>Mozilla Firefox</b> : il faut utiliser la combinaison de touche suivante : <b>Ctrl - Shift - K</b>. Si cette combinaison ne fonctionne pas, il est toujours possible de faire <b>Menu > Développement > Console Web</b>.</li>
	</ul>
</p>

<br>

<blockquote>
	<p>
		<i class="fa fa-info-circle"></i> Il est aussi possible d'obtenir une page blanche lors du lancement de son jeu : cela signifie qu'<b>une erreur s'est produite</b>. Nous vous conseillons dans ce cas de lancer la console de votre navigateur pour en apprendre plus sur le sujet.
	</p>
</blockquote>

<br>
<p>
	Un fois la console lancée, il sera donc possible de visionner les erreurs : elles sont souvent indiquées par une coloration rouge et une croix au début de la ligne. Voici un exemple d'erreur, sous Google Chrome : <br><br>

	<img src="/imgs/engine2d-debug-game-1.png" alt="Exemple d'une ligne d'erreur dans la console de Google Chrome">

	<br>

	Les erreurs sont souvent précédées par une ligne d'erreur générée par le moteur vous indiquant qu'un problème s'est produit (en anglais).
</p>

<hr>

<h4>Comprendre une erreur</h4>
<br>
<p>
	Une erreur a forcément une explication. Il faut la comprendre et en chercher l'explication avant d'essayer de la résoudre. Pour cela, voici quelques étapes pour vous aider dans la compréhension de vos erreurs. Si après ces étapes, vous n'arrivez pas à en comprendre l'explication, n'hésitez pas à faire appel à une autre personne pour vous aider. <br>

	<ul style="list-style-type:square">
		<li>
			<b>Etape 1 : l'emplacement de l'erreur</b> > une erreur à toujours un point de départ. Pour en comprendre l'explication, il faut tout d'abord essayer de trouver l'emplacement de cette dernière. Pour ce faire, il faut regarder à la fin de la ligne de l'erreur (tout à droite). Par exemple, sur l'image ci-dessus, l'erreur provient du ficher "main.js", et plus précisemment de la ligne 38. <br>
			Deux cas peuvent survenir : <br>
			<ul style="list-style-type:circle">
				<li><b>L'erreur vient d'un de mes scripts</b> : dans ce cas, nous vous conseillons de revenir dans l'éditeur, dans le fichier et la ligne correspondant à la ligne de l'erreur indiquée.</li>
				<li><b>L'erreur vient d'un script que je ne possède pas</b> : dans ce cas, il va être plus compliqué de comprendre l'explication du problème : l'erreur vient de notre moteur de jeu. Vous pouvez néanmoins essayer de suivre les étapes suivantes.</li>
			</ul>
		</li>
		<br>
		<li>
			<b>Etape 2 : le type d'erreur</b> > le type peut vous aider à comprendre l'erreur produite. Le type d'erreur est aussi visible sur la ligne de l'erreur correspondante, par exemple, l'erreur sur l'image ci-dessus est "<i>ReferenceError</i>". Voici une liste non exhaustive des types d'erreurs que l'on peut rencontrer en JavaScript : <br>
			<ul style="list-style-type:circle">
				<li><b>ReferenceError</b> : l'objet auquel vous avez fait référence sur la ligne n'existe pas ou plus (ne fait référence à rien).</li>
				<li><b>SyntaxError</b> : vous avez une erreur de syntaxe, sûrement une faute de frappe, un oubli de parenthèse/acollade ou une maladresse.</li>
				<li><b>TypeError</b> : une variable ou un paramètre utilisé n'est pas du bon type (valeur invalide).</li>
			</ul>
		</li>
		<br>
		<li>
			<b>Etape 3 : la description de l'erreur</b> > lorsqu'elle apparaît dans la console, la description de l'erreur peut être d'une grande aide. Néanmoins, il faut avoir certaines bases en anglais pour comprendre cette dernière. Elle se situe sur la ligne de l'erreur après les "<b><big>:</big></b>". Sur l'image ci-dessus, la description est "<i>Inpu is not defined</i>" soit <i>Inpu n'est pas défini</i>. Elle peut donc vous aider dans des situations difficiles et vous réveler certaines informations.
		</li>
	</ul>
</p>
<br>
<p>
	En suivant ces différentes étapes, il doit être plus simple de comprendre l'origine d'une erreur. Si après ces étapes, le problème reste inconnu, n'hésitez pas à faire appel à un membre de l'équipe et/ou à d'autres membres du site (ou une autre personne). <br><br>
	En suivant ces étapes, il est donc facile de conclure que l'erreur présente sur l'image ci-dessus vient du fichier "main.js" à la ligne 38 et vient du fait que le navigateur ne connaît pas la variable "Inpu", donc c'est sûrement dû à une faute de frappe (en voulant écrire Input).
</p>

<hr>

<h4>Résoudre une erreur</h4>
<br>
<p>
	Après avoir identifié l'erreur, il est assez simple de la corriger. Lorsque le problème vient d'un de vos scripts, il suffit de vous rendre dans ce dernier (à la bonne ligne) et de modifier l'action ou la variable correspondante. Il sera néanmoins plus compliqué de résoudre une erreur de logique à une erreur de syntaxe, car il faudra se questionner quant à la logique de ce script en question.
</p>

<hr>

<h4>Quelques astuces</h4>
<br>
<p>
	<ul style="list-style-type:square">
		<li><b>S'énerver ne mène à rien</b> : il est important de garder son calme lorsque l'on découvre une erreur, car elle a forcément une explication.</li>
		<li><b>Demander de l'aide</b> : si vous bloquez lors de la résolution d'un problème, n'hésitez pas à demander de l'aide à un membre de l'équipe ou à toute autre personne qui est en mesure de vous aider.</li>
		<li><b>Se documenter</b> : une erreur peut être aussi dûe à un manque de connaissance du logiciel en question. Cela peut être dû à une fonction mal utilisée, à une classe inexistante... Dans ce cas, nous vous conseillons de parcourir les autres catégories de la documentation afin d'en apprendre plus sur le fonctionnement de notre système.</li>
	</ul>
</p>