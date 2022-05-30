<?php

include 'header.php'

?>
<main>
            <img src="/bird.gif" id="bird">
            <img src="/djcat.gif" id="djcat">
            <img src="/adventure time.gif" id="adventuretime">
            <h3>Navigateurs web</h3>
            <p>Un navigateur web est un logiciel conçu pour consulter et afficher le World Wide Web. Techniquement, c'est au minimum un client HTTP. Il existe une multitude de navigateurs, parmi eux cinq sont majeurs.</p>
            <button id="chromebutton" class="btn btn-light" onclick="ChromeClick()"><h4>Chrome </h4></button>
            <p class="texts"id="Chrome">Développé par google en 2008, il fonctionne sous la majorité des systèmes d'exploitation : 
                Windows, macOS, Linux, Android et iOS/iPadOS.
                Les utilisateurs apprécient en général sa vitesse d'utilisation et ses nombreuses fonctionnalités, applications et extensions disponibles. Il est notamment le plus riche en extensions. On peut néanmoins lui reprocher sa consommation excessive de ressources (RAM/CPU) et son non-respect des données personnelles.
            </p>
            <button id="firefoxbutton" class="btn btn-light" onclick="FirefoxClick()"><h4>Firefox </h4></button>
            <p class="texts"id="Firefox">Développé par la fondation Mozilla et ses nombreux bénévoles, c’est un navigateur open source. 
                Il est disponible sur la majorité des systèmes d'exploitation. Il possède également de nombreuses fonctionnalités et extensions et apparaît réputé pour la protection des données personnelles. 
            </p>
            <button id="safaributton" class="btn btn-light" onclick="SafariClick()"><h4>Safari </h4></button>
            <p class="texts"id="Safari">Développé par Apple. Il est le plus rapide sur mac et est très personnalisable.
                Apple fournit Safari sur l'ensemble de ses appareils. Normalement il n’est pas nécessaire 
                de le télécharger. Il protège notamment contre les cookies et les trackers. Avec une grande facilité 
                de synchronisation des signets et des favoris entre tous les appareils Apple. En revanche, 
                il ne possède que peu d’extensions. 
            </p>
            <button id="edgebutton" class="btn btn-light" onclick="EdgeClick()"><h4>Edge </h4></button>
            <p class="texts"id="Edge">Navigateur web de la société Microsoft, pré-installé sur les appareils sous Windows. Il existe depuis 2015 et remplace Internet Explorer qui n’est plus mis à jour et donc non sécurisé. Microsoft Edge fonctionne aussi sous macOS, Android et iOS.</p>
            <button id="operabutton" class="btn btn-light" onclick="OperaClick()"><h4>Opera </h4></button>
            <p class="texts"id="Opera">Navigateur norvégien créé en 1995, Opera fonctionne aussi bien sous Windows, Linux, macOS, 
                iOS ou Android. Il a été un des premiers à instaurer les onglets pour faciliter la navigation. Il possède un VPN intégré pour naviguer en toute sécurité. Malgré de bonnes performances globales, son VPN manque de stabilité et ses problèmes d’affichage sont récurrents.
            </p>
            <ul>Voici une liste non exhaustive d’autres navigateurs cependant peu utilisés :
                <li>Vivaldi</li>
                <li>Brave</li>
                <li>Maxthon</li>
                <li>Sushi Browser</li>
            </ul>
            <p>Il existe donc un grand panel de navigateurs. Les choix se feront en fonction des goûts, de l’utilisation et des affinités. En d’autres termes, il n’y a pas de bons ou mauvais navigateurs, tout dépend des besoins.</p>


        </main>
        <?php

include 'footer.php'

?>

