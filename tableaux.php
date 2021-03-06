<?php

include 'header.php'

?>

<main>
            <h1 class="text-center">Création d'un tableau en HTML</h1>
            <section>
                <h2>Elément parent :</h2>
                <div>Pour créer un tableau en HTML il faut utiliser l’élément : <mark>&lt;table&gt;...&lt;/table&gt;</mark>
                </div>
            </section>
            <section>
                <h2>Element enfants de l'élément HTML<mark>&lt;table&gt;</mark></h2>
                    <ul>
                        <li><u>L’élément <mark>&lt;caption&gt;</mark></u> :</li>
                    </ul>
                        <p>Définit le titre ou la légende  du tableau. <br/>
                            Mnémotechnique :  trad fr de caption = légende, sous-titre, en-tête.<br/>
                            Mise en forme CSS : Utilisez les propriétés caption-side, text-align pour le positionement de l'élément caption.
                        </p>
                        <p><u>Note</u> : L'élément caption devrait être le premier élément enfant de l'élément parent table.
                        Quand l'élément table (étant le parent de l'élément caption) n'est que l'unique descendant d'un élément figure, c'est l'élément figcaption doit être utilisé.</p>                        
                    

                    <ul>
                        <li><u>L’élément <mark>&lt;tr&gt;</mark></u> :</li>
                    </ul>
                    <p> Insère une ligne dans tableau. Indique le début et la fin d'une ligne du tableau.<br/>
                    Mnémotechnique :  tr = table row.<br/>
                    </p>
                    

                    <ul>
                        <li><u>L’élément <mark>&lt;td&gt;</mark></u> :</li>
                    </ul>
                    <p>Insère une cellule dans une ligne du tableau. Indique le début et la fin d'une ligne du tableau.<br/>
                    Mnémotechnique :  td = table data.
                    </p>
                    <p><u >Note</u> : Les cellules peuvent contenir tous les éléments Html : du texte, des images, des liens, des arrière-plans et même des tableaux
                    </p>
                    

                    <ul>
                        <li><u>L’élément <mark>&lt;th&gt;</mark></u> :</li>
                    </ul>
                    <p>L'élément HTML &lt;th&gt; définit une cellule d'un tableau comme une cellule d'en-tête pour un groupe de cellule. La nature de ce groupe est définie grâce aux attributs scope et headers</p>
                        
                    

                    <ul>
                        <li><u>L’élément <mark>&lt;thead&gt;</mark></u> :</li>
                    </ul>
                    <p>Définit un ensemble de lignes qui définit l'en-tête des colonnes d'un tableau</p>
                        
                    

                    <ul>
                        <li><u>L’élément <mark>&lt;tbody&gt;</mark></u> :</li>
                    </ul>
                    <p> est le corps du tableau qui contient les cellules (données) de la table HTML. Il se place en dessous du « thead ».</p>
                        

                    <ul>
                        <li><u>L’élément <mark>&lt;tfoot&gt;</mark></u> :</li>
                    </ul>
                    <p>Permet de définir un ensemble de lignes qui résument les colonnes d'un tableau.</p>
                        
            </section>
            <section>
                <h2>Fusion de cellule</h2>
                <ul>
                    <li><u><mark>&lt;td rowspan = "nb"&gt;</mark></u> :</li>
                </ul>
                <p>Fusionner des lignes (verticalement)</p>
                    
                <ul>
                    <li><u><mark>&lt;td colspan = "nb"&gt;</mark></u> :</li>
                </ul>
                <p>Fusionner des colonnes (horizontalement)</p>
                
            </section>
            <section>
            <h2>Exemple :</h2>
            <table class="table table-bordered border-primary">
                <caption class="text-center"><i>L'équipe des bras cassés</i></caption>
                <thead>
                    <tr class="table-primary">
                        <th>Prénom</th>
                        <th>Surnom</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tom</td>
                        <td>Le dernier arrivant</td>
                        <td>Le plus jeune de l'équipe, l'agneau donc</td>
                    </tr>
                    <tr>
                        <td>Laurent</td>
                        <td>Le graphiste</td>
                        <td>Rare seront les fois où tu le verras sans sa casquette</td>
                    </tr>
                    <tr>
                        <td>Nitha</td>
                        <td>Je sais pas</td>
                        <td>Le seul qui représente le continent asiatique</td>
                    </tr>
                    <tr>
                        <td>Fred</td>
                        <td></td>
                        <td>Il détient l'anecdote la plus gore du groupe</td>
                    </tr>
                    <tr>
                        <td>Suley</td>
                        <td>Le chat qui pleure</td>
                        <td>Toujours se méfier de celui qui parle peu</td>
                    </tr>
                    <tr>
                        <td>Julien</td>
                        <td>Le presque chinois</td>
                        <td>"Y a pas moyen, je marche pas 300km sur la lune !"</td>
                    </tr>
                    <tr>
                        <td>Davy</td>
                        <td>Le commercial</td>
                        <td>Cherche pas t'as tort</td>
                    </tr>
                    <tr>
                        <td>Théo</td>
                        <td>Trotman</td>
                        <td>Le calme qui annonce la tempète</td>
                    </tr>
                    <tr>
                        <td>Mat</td>
                        <td>Meme man</td>
                        <td>Toujours la punchline qui faut</td>
                    </tr>
                    <tr>
                        <td>Xav</td>
                        <td>Bootstrap</td>
                        <td>L'expert bootstrap de l'équipe</td>
                    </tr>
                    <tr>
                        <td>Kava</td>
                        <td>Sergent</td>
                        <td>Le seule militaire qui sait coder</td>
                    </tr>
                    <tr>
                        <td>Martial</td>
                        <td>L'avant dernier arrivant</td>
                        <td>Bootstrap ? Never !!!!</td>
                    </tr>
                </tbody>  
            </table>
            </section>
            <a href="Code-source-tableau.txt" target="_blank" class="btn btn-primary">Voir le code du tableau</a>
        </main> 

<?php

include 'footer.php'

?>
