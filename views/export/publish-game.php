<?php
$previous = array("title" => "Déboguer un jeu", "url" => "export/debug-game");
?>
<div class="tutorial-container">
    <?= generateTutoHeader(
        "Une publication facile et rapide", "Publier son jeu",
        "Exporter un jeu", "paper-plane", 2, $previous
    ) ?>

    <div class="tutorial-content">
        Une fois votre jeu terminé, ou lorsque vous souhaitez présenter votre jeu à vos amis, il est nécessaire de
        publier
        votre jeu. Mais sur GameIndus cette tâche n'est pas complexe car nous vous fournissons un module d'exportation
        complet et rapide. Ce dernier permet de publier un jeu sur toutes les plateformes que nous supportons en <b>quelques
            clics</b> et en seulement <b>quelques secondes</b>.

        <div class="separation"></div>
        <h5 class="title">1. Choisir sa plateforme de publication</h5>

        Actuellement, GameIndus supporte la publication de jeu pour les <b>navigateurs web</b> seulement. L'exportation
        des
        jeux sur les autres plateformes arrivera dans les prochaines versions. <br><br>
        Afin de choisir sa plateforme de publication, il faut cliquez sur l'icône <img src="//i.imgur.com/BF8dtxv.png"
                                                                                       alt="Icone de création de fichier"
                                                                                       style="display:inline-block;position:relative;top:8px">,
        disponible dans la barre de gauche avec le reste des actions. Une boîte va s'ouvrir dans laquelle seront listées
        les
        différentes plateformes disponibles à l'exporation. Vous pouvez choisir celle vous souhaitez puis choisir les
        paramètres liés à la plateforme choisie.

        <div class="separation"></div>
        <h5 class="title">2. Paramétrer la publication</h5>

        Selon la plateforme de publication, les paramètres seront différents. Voici la liste des paramètres disponibles
        pour
        chaque type d'exportation.
        <br><br>

        <ol style="list-style:decimal">
            <li>
                Exportation en tant qu'<b>application Web</b> <br>
                <ul style="list-style:square">
                    <li><b>Compression</b> : ce paramètre permet à votre jeu d'être plus ou moins compressé, afin de
                        prendre plus
                        ou moins de place une fois publié. La compression <b>Aucune</b> ne modifie aucun fichier de
                        votre jeu et
                        toutes les ressources apparaissent tel quelles. La compression <b>Normale</b> compresse
                        seulement les
                        scripts et non les ressources. La compression <b>Elevée</b> se charge de compresser tous les
                        scripts dans le
                        fichier principal, mais aussi de compresser toutes vos ressources dans un seul fichier, afin
                        d'éviter les
                        éventuels vols de ressource. Ce mode est donc plus adapté lors d'une distribution au grand
                        public de vos
                        jeux.
                    </li>
                    <li><b>Mode développement</b> : en activant ce mode, votre jeu sera créé avec des outils de
                        développement en
                        complément. Vous aurez notamment plus de messages dans la console du navigateur pour perçevoir
                        les
                        éventuelles erreurs, et un affichage spécial pour connaître les performances de votre jeu. Ce
                        mode peut être
                        utile pour tester le support du jeu dans un autre navigateur et ainsi les performances de ce
                        dernier. Nous
                        vous conseillons toutefois de privilégier l'option "Mode développeur" dans les options de
                        l'éditeur pour
                        pouvoir tester votre jeu plus rapidement.
                    </li>
                </ul>
            </li>
        </ol>

        <div class="clear"></div>
    </div>
</div>
