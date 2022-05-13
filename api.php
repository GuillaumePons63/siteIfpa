<?php

include 'header.php'

?>
<!-- <head>
    <link rel="stylesheet" href="api.css">
</head> -->
<main>

<!-- <h1>Les API et le Web
    <br>
    ( Interface de programmation )
</h1>

<p id="one-ask">Qu’est ce qu’un API ?</p>
<p id="one-para">Les API <span class="underline">( Application programming interface )</span> sont des codes fonctionnels souvent complexes mis à disposition des développeurs pour faciliter la syntaxe de leurs programmes et ajouter certaines options. 
Ces interfaces de programmation sont au cœur du fonctionnement web. <br>
Une API est autonome et fonctionne par elle-même sur le site ou le logiciel sur lequel elle est rattachée (exemple: un API Google Maps ajouté sur un site internet pour avoir accès à ce logiciel et pouvoir se positionner). <br>
L’utilisateur peut intégrer des fonctionnalités du programme sur son site web ou son application
Le fournisseur peut modifier son programme sans impacter les utilisateurs. <br>
Par exemple, pour une application météo: ce n’est pas elle qui va chercher et analyser les informations météorologiques et vous les transmettre mais bien une API qui va se connecter à la base de données où se trouvent ces informations pour les afficher dans votre application.
</p>

<p id="two-ask">Entourés par les API ?</p>
<p id="two-para">Effectivement, ils sont dans les murs. <br>
Nos navigateurs du quotidien intègrent déjà des API’s pour leurs propres fonctionnements. Malgré tout vous trouverez la majorité sur le web : l’immense majorité des grandes entreprises du digital possèdent leurs propres API : <br>
-Google possède énormément d’API comme les classiques GMAIL; MAP ect. Mais il est important de comprendre que lorsque vous vous connectez à vos sites préférés grâce au bouton: <br> Vous n’entrez pas de mot de passe et vous servez d’un API que Google met à disposition. <br>
-Tinder utilise un API commun à leur site web et à leur application pour le cœur du système de swipe droite/gauche. <br>
<iframe src="https://www.youtube.com/watch?v=ZmtSfognYus" frameborder="0"></iframe> <br>
Dans cette vidéo, l’auteur se sert de l’API de Tinder pour créer son bot. <br>
-Lorsque les sites ajoutent sur leurs pages des aperçus de tweet, l’API de twitter est appelé sur votre page web.


<p id="three-ask">Quelles sont les différents types d'API ?</p>

<p id="three-para">
Il existe 2 type principaux d’API: <br>
    
-les API publiques, appelées aussi open API. <br>
https://openweathermap.org/api <br>
-Ce site offre un API météorologique gratuit pour vos sites web. <br>

les API privées, connues sous le nom de enterprise API. <br>

Les API sécurisées disposent d’une clé d’identification, fournie par un service d’authentification et d’autorisation. <br>
Du fait de la grande diversité d’applications client, les API doivent s’appuyer sur un protocole de communication, le SOAP (Simple Object Access Protocol) ou le REST (Representational State Transfert) afin d’être compatibles aux diverses plateformes mobiles, qu’il s’agisse d’une application Windows, Apple ou Android. 
(La principale différence entre les deux est que SOAP est un protocole officiel géré par le W3C (World Wide Web Consortium) REST non. 
En général, les API suivent l'approche REST ou SOAP en fonction de leur utilisation et des préférences du développeur.)L’API Rest (ou Restful) est à présent la plus utilisée car elle offre plus de flexibilité.

</p> -->


<h1 class="text-center "> <u> API WEB</u></h1>
<h2 class="text-center"><u>( Interfaces de programmation )</u></h2>
<br>

<h3 class="text-left">Qu'est ce qu'un API ?</h3>
<p>Les <u>API ( Application programming interface )</u>  sont des codes fonctionnels souvent complexes mis à disposition des développeurs pour faciliter la syntaxe de leurs programmes et ajouter certaines options.</p>
<p>Ces interfaces de programmation sont au cœur du fonctionnement web.</p>
<p>Une API est autonome et fonctionne par elle-même sur le site ou le logiciel sur lequel elle est rattachée (exemple: un API Google Maps ajouté sur un site internet pour avoir accès à ce logiciel et pouvoir se positionner).</p>
<p>L’utilisateur peut intégrer des fonctionnalités du programme sur son site web ou son application. Le fournisseur peut modifier son programme sans impacter les utilisateurs.</p>
<p>Par exemple, pour une application météo: ce n’est pas elle qui va chercher et analyser les informations météorologiques et vous les transmettre mais bien une API qui va se connecter à la base de données où se trouvent ces informations pour les afficher dans votre application.</p>
<br>
<div class="d-flex justify-content-center">
<a href="https://www.manutan.com/blog/fr/lexique/api-definition-et-application-dans-les-achats" target="blank"><img src="https://www.manutan.com/blog/medias/file_bank/Images/2019/12_D%C3%A9cembre/thumbs/863_Infographie-API-restaurant-FR-800-100.jpg"></a>
    
</div>
<br>

<h3 class="text-left">Entourés par les API ?</h3>

<em>Effectivement, ils sont dans les murs</em>
<br>
<p>Nos navigateurs du quotidien intègrent déjà des API’s pour leurs propres fonctionnements. Malgré tout vous trouverez la majorité sur le web : <u> l’immense majorité des grandes entreprises du digital possèdent leurs propres API :</u></p>
<br>
<p>-Google possède énormément d’API comme les classiques GMAIL; MAP ect. Mais il est important de comprendre que lorsque vous vous connectez à vos sites préférés grâce au bouton:</p>
<div class="d-flex justify-content-center">
    <button class="bg-primary text-white border-0 w-25  " > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
    </svg> Connect with Google</button>
</div>
<br>
<p>Vous n’entrez pas de mot de passe et vous servez d’un API que Google met à disposition.</p>
<br>
<p>-Tinder utilise un <u> API commun à leur site web et à leur application </u> pour le cœur du système de swipe droite/gauche. <a href="https://www.youtube.com/watch?v=ZmtSfognYus">Cette vidéo vous montre une utilisation dérivée de l'API de Tinder</a></p>
<br>
<p>-Lorsque les sites ajoutent sur leurs pages des aperçus de tweet, l’API de twitter est appelé sur votre page web.</p>
<br>
<div class="d-flex justify-content-center">
    <a  href="https://www.lafabriquedunet.fr/blog/definition-api/" target="blank"><img src="https://www.lafabriquedunet.fr/wp-content/uploads/2018/05/API.png" alt=""></a>
</div>
<br>

<h3>Quels sont les différents types d’API ?</h3>

<p>Il existe 2 type principaux d’API:</p>
<ul>
    <li><u>les API publiques</u>, appelées aussi open API. <a href="https://openweathermap.org/api">( OpenWeatherMap )</a></li>
    <li><u>les API privées</u>, connues sous le nom de enterprise API.</li>
</ul>

<p>Les API sécurisées disposent d’une clé d’identification, fournie par un service d’authentification et d’autorisation.</p>
<p>Du fait de la grande diversité d’applications client, les API doivent s’appuyer sur un protocole de communication, le <u> SOAP </u> (Simple Object Access Protocol) ou le <u> REST </u> (Representational State Transfert) afin d’être <u> compatibles aux diverses plateformes mobiles </u>, qu’il s’agisse d’une application Windows, Apple ou Android. </p>
<p>(La principale différence entre les deux est que SOAP est un protocole officiel géré par le W3C (World Wide Web Consortium) REST non. </p>
<p>En général, les API suivent l'approche REST ou SOAP en fonction de leur utilisation et des préférences du développeur.)L’API Rest (ou Restful) est à présent la plus utilisée car elle offre plus de flexibilité.</p>
<br>

<h3>Comment fonctionnent ces API ?</h3>

<p>Chaque API fonctionne de manière légèrement différente d'une autre, mais de manière générale, elles ont des fonctionnalités communes et des thèmes similaires.</p>
<p>Pour faire simple, vous devez intégrer l’API que vous souhaitez utiliser à votre code JS / PHP via des balises webkit, puis dans la plupart des cas, il vous sera demandé de générer cette fameuse clé d’authentification sur le site officiel de l’API que vous souhaitez utiliser. Vous ajouterez cette clé à votre code à son tour pour que tout fonctionne.</p>
<p><u>Cette clé d’authentification est utilisée par les propriétaires d’API pour avoir un suivi de leurs programmes </u>  (si c’est gratuit, c’est vous le produit)</p>

<h3>Quel avenir pour les API ?</h3>

<p>Les interfaces de programmation applicatives sont amenées à durer. Cela permet en effet aux entreprises de moderniser leur système d’information en optimisant l’architecture de leurs outils et en réduisant les coûts de développement.</p>
<p>Cela leur permet également d’être plus réactives et de <u> s’adapter plus facilement à chaque évolution du numérique, afin de toujours être d’actualité. </u> </p>
<p>Elles offrent la possibilité de partager des données avec des utilisateurs externes ou des clients. Les API simplifient et développent les partenariats et peuvent monétiser certaines données, générant ainsi des revenus.</p>


  
</main>

<?php

include 'footer.php'

?>
