<nav class="menu" id="menu">
    <button class="btn btn-sm m-2" id="btnMenu" type="button"><img src="<?= URI ?>img/buttonMenu.png"
                                                                   alt="image_bouton_menu" width="29"></button>
</nav>
<div class="container-fluid" id="divMenu">
    <div class="row">
        <div id="menuCol" class="text-lg-center col pt-5 pb-5">
            <div class="p-2">
                <a class="nav-item nav-link active p-3" href="<?= URI_ESPACE ?>">Accueil<span class="sr-only">(current)</span></a>
            </div>
            <div class="p-2">
                <a class="nav-item nav-link p-3" href="#">Agence</a>
            </div>
            <div class="p-2">
                <a class="nav-item nav-link p-3" href="<?= URI ?>listeDetail?name=location">Location</a>
            </div>
            <div class="p-2">
                <a class="nav-item nav-link p-3" href="<?= URI ?>listeDetail?name=vente">Vente</a>
            </div>
            <div class="p-2">
                <a class="nav-item nav-link p-3" href="<?= URI_ESPACE ?>infos">Infos personnelles</a>
            </div>
            <div class="p-2">
                <a class="nav-item nav-link p-3" href="<?= URI_ESPACE ?>favoris">Favoris</a>
            </div>
            <div class="p-2">
                <a class="nav-item nav-link p-3" href="<?= URI_ESPACE ?>property">Proposer un bien</a>
            </div>
        </div>
    </div>
</div>
