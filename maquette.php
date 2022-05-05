<?php

include 'header.php'

?>

<main class="container">
    <p> Voici 3 maquettes à reproduire, Bon courage !</p>
    <div class=row>
                   
            <button class="btn col-4 btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#exercice1" aria-expanded="false" aria-controls="collapseExercice1">
                Le plus facile
            </button>
            <button class="btn col-4 btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#exercice2" aria-expanded="false" aria-controls="collapseExercice1">
                Un peu plus dure
            </button>
            <button class="btn col-4 btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#exercice3" aria-expanded="false" aria-controls="collapseExercice1">
                Quand le graphiste est pénible
            </button>
        
    </div>
    <div class="col-12" style="height: 200px;" >
        <div class="collapse" id="exercice1">
            <div class="h-100 d-inline-block card card-body">
                Vous devez donc coder cette maquette. Elle doit être fonctionnelle sur tous les supports et tous les navigateurs, ne renvoyer aucune erreur au validateur du w3c.
                Normalement on peut tout faire en HTML et CSS.
                <a class="btn btn-primary col-4 d-block m-auto" href="./adminifpa/maquettes/maquette1.zip" download> Télécharger le projet </a>
            </div>
        </div>
        <div class="collapse" id="exercice2">
            <div class="h-100 d-inline-block card card-body">
                Cette maquette necessite de manipuler un peu de javascript, notament pour cacher le menu avec le fameux, burger button. C'est un bon début pour se tester sur le JS côté front, à tenter pour ceux qui veulent un peu plus de difficultés.
                <a class="btn btn-primary col-4 d-block m-auto" href="./adminifpa/maquettes/maquette2.zip" download> Télécharger le projet </a>
            </div>
        </div>
        <div class="collapse" id="exercice3">
            <div class="h-100 d-inline-block card card-body">
                Là, vous avez juste le fichier PSD. La maquette est interressante, mais le graphiste n'a pas donné beaucoup d'info et ne répond plus depuis. Un projet qui peu ressembler à ce qu'on vit parfois en freelance. Pour info, j'ai trouvé la maquette tel quel sur le web, j'ai laissé le fichier tel quel.
                <a class="btn btn-primary col-4 d-block m-auto" href="./adminifpa/maquettes/Tajam.zip" download> Télécharger le projet </a>
            </div>
        </div>
    </div>
</main>

<?php

include 'footer.php'

?>
