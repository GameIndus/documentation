<?= getEditorMenu($page); ?>
<div>
    <h1 class="title">L'éditeur de script</h1>
    <h3>Débuter en javascript</h3>

    <p>
        Le JavaScript est un langage de programmation puissant, complexe et trop souvent mal compris.
        Il permet le développement rapide d'applications avec lesquelles l'utilisateur va pouvoir intéragir pour saisir
        des
        données et observer le résultat de leur traitement.<br>
        Ce langage est très facile d'accès.
    </p>

    <blockquote class="green">
        <p><i class="fa fa-info-circle"></i> Si vous ne connaissez pas le langage, il est recommandé de suivre ce
            tutoriel
            (site externe) : <a href="https://www.codecademy.com/fr/tracks/javascript" target="_blank" title=""><i
                    class="fa fa-link"></i> CodeAcademy | Le Javascript</a></p>
    </blockquote>

    <br>

    <h4>GameIndus et JavaScript</h4>
    <p>
        GameIndus utilise son propre moteur de jeu 2D et 3D, pour permettre aux utilisateurs de répondre à leurs
        attentes.
        Grâce au javascript, il est donc possible d'appeler différentes classes
        et fonctions d'aides pour intéragir avec l'ensemble du jeu et du projet (objets, scènes, utilisateur,
        serveur).<br>
        Les moteurs de jeu utilisent des classes statiques, c'est-à-dire qu'il faut connaîre un minimum la <b>POO
            (Programmation orientée objet)</b>.
        <br><br>
        Il faudra donc, dans la plupart des cas, appeler des fonctions disponibles pour paramétrer un objet, le faire
        bouger, etc...<br>
        Par exemple, il est possible de faire :<br>
    <pre class="code"><code class="javascript">Game.getCurrentScene(); // Pour récupérer la scène courrante d'un jeu

// Il est aussi possible d'appeler des fonctions sur des fonctions.
// Je vais récupérer l'objet "test" de la scène courrante en lui appliquant une opacité de 0.5
Game.getCurrentScene().getGameObject("test").setOpacity(0.5);</code></pre>

    <br>
    Pour avoir plus d'informations à propos des classes et fonctions disponibles, une documentation temporaire est
    disponible <a href="/engine-2d-temp/" title="Documentation temporaire du moteur de jeu 2D">ici</a>.
    </p>
</div>
