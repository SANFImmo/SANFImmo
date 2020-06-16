
<div class="container-fluid m-0 p-0">
    <div class="card-body form p-0 text-center">
        <h1 class="card-title text-center pb-2">Votre recherche</h1>
        <form method="POST">
            <div class="row">
                <div class="form-group text-center col-sm-12 col-md-6 col-lg-3 mt-2">
                    <label for="type">Type de bien</label>
                    <select class="form-control w-50 mx-auto col-sm-12  col-lg-12" id="type">
                        <option>-</option>
                        <option>Location</option>
                        <option>Vente</option>
                    </select>
                </div>
                <div class="form-group  col-sm-12 col-md-6 col-lg-3 mt-2">
                    <label for="categorie">Catégorie du bien</label>
                    <select class="form-control w-50 mx-auto col-sm-12 col-lg-12" id="categorie">
                        <option>-</option>
                        <option>Maison</option>
                        <option>Appartement</option>
                        <option>Garage</option>
                    </select>
                </div>
                <div class="col-7 mx-auto col-md-6 col-lg-3 mr-5 pl-4 pr-4 mt-2">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control test1" id="ville">
                </div>
                <div class="col-7 mx-auto col-md-6 col-lg-3 pl-4 pr-4 mt-2">
                    <label for="reference">Réference</label>
                    <input type="text" class="form-control test1" id="reference">
                </div>
                <div class="col-7 mx-auto col-md-6 col-lg-2  pl-4 pr-4 mt-3">
                    <label for="prixMin">Prix Mini</label>
                    <input type="text" class="form-control test" id="prixMin">
                </div>
                <div class="col-7 mx-auto col-md-6 col-lg-2 pl-4 pr-4 mt-3">
                    <label for="prixMax">Prix Maxi</label>
                    <input type="text" class="form-control test" id="prixMax">
                </div>
                <div class="form-group  col-sm-12 col-md-6 col-lg-2 mt-3">
                    <label for="nbPiece">Nombre de Pièces</label>
                    <select class="form-control w-50 mx-auto col-sm-12 col-lg-12" id="nbPiece">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="form-group  col-sm-12 col-md-6 col-lg-2 mt-3">
                    <label for="nbChambre" class="chambre">Nombre de Chambres</label>
                    <select class="form-control w-50 mx-auto col-sm-12 col-lg-12" id="nbChambre">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="col-7 mx-auto col-md-6 col-lg-2 pl-4 pr-4 mt-3">
                    <label for="surfaceMin"> Surface Mini</label>
                    <input type="text" class="form-control test" id="surfaceMin">
                </div>
                <div class="col-7 mx-auto col-md-6 col-lg-2 pl-4 pr-4 mt-3">
                    <label for="surfaceMax">Surface Maxi</label>
                    <input type="text" class="form-control test" id="surfaceMax">
                </div>
                <div class="text-right pr-5 col-md-12">
                    <button type="submit" class="btn btn-outline-success mt-3 mb-3">Filtrer</button>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body listeDetail">
        <form method="POST">
            <div class="form-group col-sm-12 col-lg-12 text-center mt-2">
                <label for="tri">Tri</label>
                <select class="form-control tri w-50 mx-auto col-sm-12 col-lg-3" id="tri">
                    <option>-</option>
                    <option>prix</option>
                    <option>date ajout</option>
                    <option>surface</option>
                </select>
            </div>
        </form>
        <h2 class="text-center col-sm-12  col-lg-12 mt-5">Votre résultat de recherche</h2>
        <div class="card-body justify-content-around row">
            <div class="card col-sm-12 col-md-5 col-lg-3 p-0 mt-5 ml-2 mr-2">
                <img src="footer/CSS/img/maison/maison" class="card-img-top" alt="maison">
                <div class="card-body row">
                    <div class="text-center col-12">
                        <span class="text-center">Nom</span>
                    </div>
                    <div class="text-left col-6 mt-2">
                        <span>prix:</span>
                    </div>
                    <div class="text-right col-6 mt-2">
                        <span>200 000€</span>
                    </div>
                    <div class="text-left col-6 mt-2">
                        <span>Réference:</span>
                    </div>
                    <div class="text-right col-6 mt-2">
                        <span>M5487698</span>
                    </div>
                </div>
            </div>
            <div class="card col-sm-12 col-md-5 col-lg-3 p-0 mt-5 ml-2 mr-2">
                <img src="footer/CSS/img/maison/maison" class="card-img-top" alt="maison">
                <div class="card-body row">
                    <div class="text-center col-12">
                        <span class="text-center">Nom</span>
                    </div>
                    <div class="text-left col-6 mt-2">
                        <span>prix:</span>
                    </div>
                    <div class="text-right col-6 mt-2">
                        <span>200 000€</span>
                    </div>
                    <div class="text-left col-6 mt-2">
                        <span>Réference:</span>
                    </div>
                    <div class="text-right col-6 mt-2">
                        <span>M5487698</span>
                    </div>
                </div>
            </div>
            <div class="card col-sm-12 col-md-5 col-lg-3 p-0 mt-5 ml-2 mr-2">
                <img src="footer/CSS/img/maison/maison" class="card-img-top" alt="maison">
                <div class="card-body row">
                    <div class="text-center col-12">
                        <span class="text-center">Nom</span>
                    </div>
                    <div class="text-left col-6 mt-2">
                        <span>prix:</span>
                    </div>
                    <div class="text-right col-6 mt-2">
                        <span>200 000€</span>
                    </div>
                    <div class="text-left col-6 mt-2">
                        <span>Réference:</span>
                    </div>
                    <div class="text-right col-6 mt-2">
                        <span>M5487698</span>
                    </div>
                </div>
            </div>
            <div class="card col-sm-12 col-md-5 col-lg-3 p-0 mt-5 ml-2 mr-2">
                <img src="footer/CSS/img/maison/maison" class="card-img-top" alt="maison">
                <div class="card-body row">
                    <div class="text-center col-12">
                        <span class="text-center">Nom</span>
                    </div>
                    <div class="text-left col-6 mt-2">
                        <span>prix:</span>
                    </div>
                    <div class="text-right col-6 mt-2">
                        <span>200 000€</span>
                    </div>
                    <div class="text-left col-6 mt-2">
                        <span>Réference:</span>
                    </div>
                    <div class="text-right col-6 mt-2">
                        <span>M5487698</span>
                    </div>
                </div>
            </div>
            <div class="card col-sm-12 col-md-5 col-lg-3 p-0 mt-5 ml-2 mr-2">
                <img src="footer/CSS/img/maison/maison" class="card-img-top" alt="maison">
                <div class="card-body row">
                    <div class="text-center col-12">
                        <span class="text-center">Nom</span>
                    </div>
                    <div class="text-left col-6 mt-2">
                        <span>prix:</span>
                    </div>
                    <div class="text-right col-6 mt-2">
                        <span>200 000€</span>
                    </div>
                    <div class="text-left col-6 mt-2">
                        <span>Réference:</span>
                    </div>
                    <div class="text-right col-6 mt-2">
                        <span>M5487698</span>
                    </div>
                </div>
            </div>
            <div class="card col-sm-12 col-md-5 col-lg-3 p-0 mt-5 ml-2 mr-2">
                <img src="footer/CSS/img/maison/maison" class="card-img-top" alt="maison">
                <div class="card-body row">
                    <div class="text-center col-12">
                        <span class="text-center">Nom</span>
                    </div>
                    <div class="text-left col-6 mt-2">
                        <span>prix:</span>
                    </div>
                    <div class="text-right col-6 mt-2">
                        <span>200 000€</span>
                    </div>
                    <div class="text-left col-6 mt-2">
                        <span>Réference:</span>
                    </div>
                    <div class="text-right col-6 mt-2">
                        <span>M5487698</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>