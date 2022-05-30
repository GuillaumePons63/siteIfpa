<?php

include 'header.php'

?>

<main>
<div class="row m-5 bg-dark" style="--bs-bg-opacity: .5;">
         <!-- Raccourcis de bases 
        ================================================================================= -->
        <div class="row col-6 border-end p-5">
            <h2>##Bases</h2>
            <!-- NEW FILE -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#NewFile" aria-expanded="false" >
                    Créer un nouveau fichier
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="NewFile">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + N` (comme <em>New/Nouveau</em>)
                    </div>
                    </div>
                </div>
            </div>
            <!-- CLOSE FILE -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#CloseFile" aria-expanded="false" >
                        Fermer un fichier
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="CloseFile">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + W`
                    </div>
                    </div>
                </div>
            </div>
            <!-- SAVE FILE -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#SaveFile" aria-expanded="false" >
                        Enregistrer le fichier
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="SaveFile">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + S`
                    </div>
                    </div>
                </div>
            </div>
            <!-- COPY -->
            <div class="col-4">
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Copy" aria-expanded="false" >
                    Copier la sélection
                </button>
            </p>
            <div style="min-height: 120px;">
                <div class="collapse collapse-horizontal" id="Copy">
                <div class="card card-body" style="width: 300px;">
                    `CTRL + C`
                </div>
                </div>
            </div>
            </div>
            <!-- CUT -->
            <div class="col-4">
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#cut" aria-expanded="false" >
                    Déplacer (couper) la sélection
                </button>
            </p>
            <div style="min-height: 120px;">
                <div class="collapse collapse-horizontal" id="cut">
                <div class="card card-body" style="width: 300px;">
                    `CTRL + X`
                </div>
                </div>
            </div>
            </div>
            <!-- PASTE -->
            <div class="col-4">
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#paste" aria-expanded="false" >
                    Coller la sélection
                </button>
            </p>
            <div style="min-height: 120px;">
                <div class="collapse collapse-horizontal" id="paste">
                <div class="card card-body" style="width: 300px;">
                    `CTRL + V`
                </div>
                </div>
            </div>
            </div>   
            <!-- RETURN -->
            <div class="col-4">
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#return" aria-expanded="false" >
                    Annuler la dernière action
                </button>
            </p>
            <div style="min-height: 120px;">
                <div class="collapse collapse-horizontal" id="return">
                <div class="card card-body" style="width: 300px;">
                    `CTRL + Z`
                </div>
                </div>
            </div>
            </div>
            <!-- RETURN RETURN -->
            <div class="col-4">
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#NoReturn" aria-expanded="false" >
                    Revenir à l'annulation
                </button>
            </p>
            <div style="min-height: 120px;">
                <div class="collapse collapse-horizontal" id="NoReturn">
                <div class="card card-body" style="width: 300px;">
                    `CTRL + Y`
                </div>
                </div>
            </div>
            </div>
            <!-- PRINT -->
            <div class="col-4">
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#print" aria-expanded="false" >
                    Imprimer
                </button>
            </p>
            <div style="min-height: 120px;">
                <div class="collapse collapse-horizontal" id="print">
                <div class="card card-body" style="width: 300px;">
                    `CTRL + P`
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Raccourcis de sélection
        ================================================================================= -->
        <div class="row col-6 p-5">
            <h2>##Sélection</h2>
            <!-- SELECT ALL -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#SelectAll" aria-expanded="false" >
                    Sélectionner tout le contenu du fichier
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="SelectAll">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + A`
                    </div>
                    </div>
                </div>
            </div>
            <!-- SELECT A LINE -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#line" aria-expanded="false" >
                        Sélectionner une ligne entière
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="line">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + L` (<em>comme Line/Ligne</em>)
                    </div>
                    </div>
                </div>
            </div>
            <!-- MOVE LINE -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#moveline" aria-expanded="false" >
                        Déplacer une ligne ou une sélection
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="moveline">
                    <div class="card card-body" style="width: 300px;">
                        `ALT + UP/DOWN`
                    </div>
                    </div>
                </div>
            </div>
            <!-- SELECT WITHOUT MOUSE -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#selectwm" aria-expanded="false" >
                        Faire une sélection SANS SOURIS
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="selectwm">
                    <div class="card card-body" style="width: 300px;">
                        `SHIFT + UP/DOWN/LEFT/RIGHT`
                    </div>
                    </div>
                </div>
            </div>
            <!-- MOVE CURSOR WORD / WORD -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#WBW" aria-expanded="false" >
                        Déplacer le curseur "mot par mot"
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="WBW">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + LEFT/RIGHT`
                    </div>
                    </div>
                </div>
            </div>
            <!-- DEL WBW -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#delwbw" aria-expanded="false" >
                        Effacer "mot par mot"
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="delwbw">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + SUPPR`
                    </div>
                    </div>
                </div>
            </div>   
            <!-- nav -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#NAV" aria-expanded="false" >
                        Naviguer dans le projet (menu latéral)
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="NAV">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + SHIFT + E`
                    </div>
                    </div>
                </div>
            </div>
            <!-- select word -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#sword" aria-expanded="false" >
                        Sélectionner un mot complet
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="sword">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + D` (<em>On peut sélectionner plusieurs occurrences du mot en répétant la commande</em>)
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-5 bg-dark" style="--bs-bg-opacity: .5;">
        <!-- Raccourcis de recherche
        ================================================================================= -->
        <div class="row col-6 border-end p-5">
            <h2 class="col-12">##Recherche</h2>
            <!-- SELECT ALL -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#un" aria-expanded="false" >
                        Rechercher un mot dans un fichier
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="un">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + F`
                    </div>
                    </div>
                </div>
            </div>
            <!-- SELECT A LINE -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#deux" aria-expanded="false" >
                        Rechercher un mot dans un fichier et le remplacer
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="deux">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + H`
                    </div>
                    </div>
                </div>
            </div>
            <!-- MOVE LINE -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#malp" aria-expanded="false" >
                        Rechercher un mot dans tout le projet
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="malp">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + SHIFT +F`
                    </div>
                    </div>
                </div>
            </div>
            <!-- SELECT WITHOUT MOUSE -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#malp2" aria-expanded="false" >
                        Rechercher un mot dans tout le projet et le remplacer
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="malp2">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + SHIFT + H`
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Raccourcis de hackers
        ================================================================================= -->
        <div class="row col-6 p-5">
            <h2 class="col-12">##Trucs de hackers</h2>
            <!-- COMM -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#com" aria-expanded="false" >
                        "Commenter" la sélection ou la ligne actuelle
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="com">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + /`
                    </div>
                    </div>
                </div>
            </div>
            <!-- REFORMATER -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#from" aria-expanded="false" >
                        Re-formater la mise en page automatiquement
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="from">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + ALT + F`
                    </div>
                    </div>
                </div>
            </div>
            <!-- NV TERM -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#nvterm" aria-expanded="false" >
                        Ouvrir un nouveau Terminal
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="nvterm">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + SHIFT + ù`
                    </div>
                    </div>
                </div>
            </div>
            <!-- term -->
            <div class="col-4">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#term" aria-expanded="false" >
                        Ouvrir le Terminal
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="term">
                    <div class="card card-body" style="width: 300px;">
                        `CTRL + ù`
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</main>

<?php

include 'footer.php'

?>
