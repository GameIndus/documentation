<div class="row-container doc-container">
	<h1 class="title" style="padding-top:20px">Création d'un jeu</h1>
	<h3 class="subtitle" style="margin-top:-15px;font-size:1.2em">Si vous avez des problèmes concernant la création de votre jeu</h3>

	<!-- <div class="doc-sidebar-container">
		<div class="doc-category" data-category="intro">Introduction</div>
		<div class="doc-category" data-category="composants">Composants disponibles</div>
		<div class="separation"></div>
		<div class="doc-category" data-category="introduce-js">Introduction JavaScript</div>
		<div class="doc-category" data-category="manipule-objects">Manipuler les objets</div>
		<div class="doc-category" data-category="manipule-scenes-cameras" style="font-size:0.8em">Manipuler les scènes/caméras</div>
		<div class="doc-category" data-category="events">Gérer les évènements</div>
		<div class="doc-category" data-category="behaviors">Gérer des comportements</div>
		<div class="separation"></div>
		<div class="doc-category" data-category="debug-game">Déboguer son jeu</div>
		<div class="doc-category" data-category="publish-game">Publier son jeu</div>
	</div>
 -->
 <br><br><br><br>
	<div class="doc-content-container">
		<div class="title"></div>

		<div class="doc-content doc-intro">
			<p>
				Créer un jeu peut s'avérer rapidement compliqué, surtout lorsque l'on débute dans le domaine. Mais il ne faut jamais décourager ! Dans cette partie de
				la documentation, nous allons tenter d'aborder tous les points nécessaires à la création de jeu en 2D grâce à notre moteur de jeu.<br>
				Si malgré cela des questions restent sans réponse, il est possible de faire appel à d'autres personnes pour avoir ce que l'on souhaite.<br>
				<b>Commençons.</b>
			</p>

			<blockquote>
				<p>
					<i class="fa fa-info-circle"></i> Vous retrouverez dans cette partie de la documentation plusieurs chapitres sur des points particuliers
					du fonctionnement de notre moteur de jeu. Si vous souhaitez ajouter des chapitres, n'hésitez pas à nous contacter via notre adresse e-mail.
				</p>
			</blockquote>
		</div>
		<div class="doc-content doc-composants">
			<?php include ("engine2d/composants.php"); ?>
		</div>
		<div class="doc-content doc-introduce-js">
			<?php include ("engine2d/introduce-javascript.php"); ?>
		</div>
		<div class="doc-content doc-manipule-objects">
			<?php include ("engine2d/manipule-objects.php"); ?>
		</div>
		<div class="doc-content doc-events">
			<?php include ("engine2d/events.php"); ?>
		</div>
		<div class="doc-content doc-behaviors">
			<?php include ("engine2d/behaviors.php"); ?>
		</div>
		<div class="doc-content doc-debug-game">
			<?php include ("engine2d/debug-game.php"); ?>
		</div>
	</div>

	<div class="clear"></div>

</div>