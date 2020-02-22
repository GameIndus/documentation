<?= getEditorMenu($page); ?>
<div>
    <h1 class="title">Bien démarrer</h1>
    <h3>Modifier votre première scène</h3>

    <p>
        Grâce à l'éditeur, il est possible de créer des <b>scènes</b>. Les scènes permettent de lier l'ensemble des
        composants créés (images, sons, scripts) afin de composer un jeu.
        Une scène peut par exemple représenter un menu, ou un niveau....<br>
        Pour créer une scène, il suffit de cliquer sur l'icône "<i class="fa fa-plus"></i>". Un boîte de création de
        fichier
        va apparaître. Il faut ensuite choisir "Scène" et renseignez le nom de scène souhaité.<br>
        La scène est maintenant créée ! Il ne reste plus qu'à double-cliquer dessus afin d'ouvrir l'éditeur permettant
        de la
        modifier.
    </p>

    <blockquote>
        <p><i class="fa fa-info-circle"></i> Il est aussi possible de faire un clic-droit sur le fichier afin d'afficher
            les
            options de ce dernier.</p>
    </blockquote>

    <br>

    <h4>L'interface de l'éditeur de scène</h4>
    <p>
        <img src="/imgs/create-first-scene-editor.png" alt="Image de l'éditeur de scène" style="float:left;width:70%">
        <img src="/imgs/create-first-scene-editor-2.png" alt="Image de l'éditeur de scène"
             style="float:left;width:18%;margin-left:5%">
    <div class="clear"></div>

    <br>
    <small><i>(Images de l'éditeur de scène de GameIndus sur le projet d'un jeu de l'espace)</i></small>

    <br><br>

    <ol>
        <li>
            La partie entourée d'une ligne orange contient 2 boutons qui mènent vers des onglets différents. Ces 2
            boutons
            permettre d'effectuer des actions d'ajout et/ou de modifications des objets de la scène courrante. On peut
            donc
            ajouter, lister ou supprimer un objet de la scène.<br><br>
            - L'onglet <u>Ajouter</u> permet d'ajouter un objet. Lors du clic sur ce bouton, un nouvel onglet va
            apparaître.
            Il suffira de chosisir le type de composant à ajouter et glisser le type vers l'endroit souhaité dans la
            zone de
            travail (cadre 4).<br>
            - L'onglet <u>Objets</u> permet de lister les objets de la scène. <small><i>(Onglet par défaut)</i></small>
            En
            cliquant sur cet onglet, la liste des objets présents dans la scène va apparaître. Il suffira de
            double-cliquer un
            l'objet pour en afficher les paramètres ou d'appuyer sur la touche <i>Echap</i> pour le supprimer.
        </li>
        <br>
        <li>
            La seconde partie représente la liste des objet référencés dans la scène courrante. En double-cliquant sur
            un des
            objets, les paramètres de l'objet vont apparaître dans une boîte prévue à cette effet.
        </li>
        <br>
        <li>
            La zone encadrée en jaune représente l'onglet d'ajout de composant dans la scène. Pour plus d'informations,
            référez-vous à la partie "- Onglet <u>Ajouter</u>", située au dessus. Dans le cadre du choix d'une carte
            et/ou
            image et/ou son, il faut cliquer sur le composant et tous les composants du type séléctioné créés dans le
            cadre du
            projet apparaîtrons. Il suffira donc de glisser le composant souhaité afin de l'ajouter à la zone de
            travail.
        </li>
        <br>
        <li>
            La zone n°4 est la zone la plus importante de l'éditeur puisqu'elle permet de voir la scène en temps réel,
            tel
            qu'elle sera dans votre jeu. Vous pourrez donc placer vos objets, et les redimmensionner. De nombreux
            contrôles
            sont disponibles pour vous déplacer dans l'éditeur tel que :<br>
            - <u>la fonction de déplacement</u>. Cette fonction permet de vous déplacer dans votre scène. Il vous suffit
            d'appuyez sur la molette et de déplacer votre curseur.<br>
            - <u>la fonction de zoom</u>. Cette fonction permet de zoomer dans la scène. Elle est activable via la
            molette de
            la souris (vers le bas ou le haut).<br>
            <blockquote>
                <p><i class="fa fa-info-circle"></i> Un cadre gris clair indique ce que le joueur verra à son écran.
                    Cela permet
                    de voir les objets visibles et les objets hors-cadre. Ce cadre s'adapte aux réglages de votre jeu
                    <b>(Section
                        options > vidéo)</b>.</p>
            </blockquote>
        </li>
    </ol>
    </p>

    <!-- <br> -->

    <!-- <h4>Insérez votre premier objet</h4>
      <p>
          Pour insérez votre premier objet, cliquez sur le bouton "Ajouter" puis renseignez le nom de l'objet souhaité dans le champ généré par l'éditeur. Appuyez ensuite sur votre touche "Entrée".<br>
          Votre objet est maintenant crée. Vous pouvez dès à présent cliquez une fois dessus afin d'ouvrir les paramètres de ce dernier.<br>
          Par défaut, aucun composant n'est relié à cet objet. C'est pourquoi vous pouvez cliquer sur "Attribuer un composant" afin de lier un composant. Une boîte va apparaître. Choisissez le type de composant souhaité et cliquez sur "Ajouter". Vous pouvez directement lier vos "tilemaps" et vos "sprites" en les séléctionnants dans la liste déroulante.<br><br>
          Maintenant que votre objet à un composant, les paramètres de ce dernier vont apparaître et vous pouvez faire vos modifications.

          <blockquote>
              <p><i class="fa fa-info-circle"></i> Si vous modifiez les cartes ou images depuis leurs éditeurs respectifs, les objets dans les scènes qui en dépendent seront eux aussi affectés.</p>
          </blockquote>
      </p> -->
</div>
