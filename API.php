<?php

include 'header.php'

?>

<main>

<br><br>
<h1>API WEB</h1> 
<br>
<h2>(Interface de programmation)</h2>
<br><br>
<h3><u>Qu’est ce qu’un API ?</u></h3>
<br>
<p>Les API ( Application programming interface ) sont des codes fonctionnels souvent complexes mis à disposition des développeurs pour faciliter la syntaxe de leurs programmes et ajouter certaines options. 
</p>

<p>Ces interfaces de programmation sont au cœur du fonctionnement web.
</p>

<p>Une API est autonome et fonctionne par elle-même sur le site ou le logiciel sur lequel elle est rattachée (exemple: un API Google Maps ajouté sur un site internet pour avoir accès à ce logiciel et pouvoir se positionner).
</p>

<p>L’utilisateur peut intégrer des fonctionnalités du programme sur son site web ou son application
Le fournisseur peut modifier son programme sans impacter les utilisateurs.</p>


<p>Par exemple, pour une application météo: ce n’est pas elle qui va chercher et analyser les informations météorologiques et vous les transmettre mais bien une API qui va se connecter à la base de données où se trouvent ces informations pour les afficher dans votre application.
</p>
<br>
<img src="./images/API1.PNG" alt="">
<br>
<h3><u>Entouré par les API ?</u></h3>
<br>
<p><i>Effectivement, ils sont dans les murs.</i></p>

<p>Nos navigateurs du quotidien intègrent déjà des API’s pour leurs propres fonctionnements. Malgré tout vous trouverez la majorité sur le web : l’immense majorité des grandes entreprises du digital possèdent leurs propres API :
</p>

<p>-Google possède énormément d’API comme les classiques GMAIL; MAP ect. Mais il est important de comprendre que lorsque vous vous connectez à vos sites préférés grâce au bouton:
</p>

<img src="./images/API3.PNG" alt="">

<br>
<p>Vous n’entrez pas de mot de passe et vous servez d’un API que Google met à disposition.</p>

<p>-Tinder utilise un API commun à leur site web et à leur application pour le cœur du système de swipe droite/gauche.
</p>

<br>
Dans cette vidéo Youtube, l’auteur se sert de l’API de Tinder pour créer son bot:</p>

<a href="https://www.youtube.com/watch?v=ZmtSfognYus&ab_channel=Micode">J’AI CRÉÉ UN BOT TINDER ! (et il marche vraiment)</a>

<br>

<p>-Lorsque les sites ajoutent sur leurs pages des aperçus de tweet, l’API de twitter est appelé sur votre page web.
</p>
<br>
<img src="./images/API2.PNG" alt="">
<br>
<h3><u>Quels sont les différents types d’API ?</u></h3>
<br>
<p>Il existe 2 type principaux d’API:
</p>
    
<p>1/ <b>Les API publiques</b>, appelées aussi open API.
        <a href="https://openweathermap.org/api" target="blank">Ce site</a> offre un API météorologique gratuit pour vos sites web.
<br>
2/ <b>Les API privées</b>, connues sous le nom de enterprise API. 
</p>

<p>Les API sécurisées disposent d’une clé d’identification, fournie par un service d’authentification et d’autorisation.
Du fait de la grande diversité d’applications client, les API doivent s’appuyer sur un protocole de communication, le <b>SOAP </b>(Simple Object Access Protocol) ou le <b>REST</b> (Representational State Transfert) afin d’être compatibles aux diverses plateformes mobiles, qu’il s’agisse d’une application Windows, Apple ou Android. 
(La principale différence entre les deux est que SOAP est un protocole officiel géré par le W3C (World Wide Web Consortium) REST non. 
En général, les API suivent l'approche REST ou SOAP en fonction de leur utilisation et des préférences du développeur.) L’API Rest (ou Restful) est à présent la plus utilisée car elle offre plus de flexibilité.</p>


<h3><u>Comment fonctionnent ces API ?</u></h3>
<br>
<p>Chaque API fonctionne de manière légèrement différente d'une autre, mais de manière générale, elles ont des fonctionnalités communes et des thèmes similaires.
</p>

<p>Pour faire simple, vous devez intégrer l’API que vous souhaitez utiliser à votre code JS / PHP via des balises webkit, puis dans la plupart des cas, il vous sera demandé de générer cette fameuse clé d’authentification sur le site officiel de l’API que vous souhaitez utiliser. Vous ajouterez cette clé à votre code à son tour pour que tout fonctionne.</p>

<p>Cette clé d’authentification est utilisée par les propriétaires d’API pour avoir un suivi de leurs programmes (si c’est gratuit, c’est vous le produit)
</p>



<h3><u>Quel avenir pour les API ?</u></h3>
<br>
<p>Les interfaces de programmation applicatives sont amenées à durer. Cela permet en effet aux entreprises de moderniser leur système d’information en optimisant l’architecture de leurs outils et en réduisant les coûts de développement.</p>

<p>Cela leur permet également d’être plus réactives et de s’adapter plus facilement à chaque évolution du numérique, afin de toujours être d’actualité. 
</p>

<p>Elles offrent la possibilité de partager des données avec des utilisateurs externes ou des clients. Les API simplifient et développent les partenariats et peuvent monétiser certaines données, générant ainsi des revenus.
</p>



</main>

<?php

include 'footer.php'

?>


