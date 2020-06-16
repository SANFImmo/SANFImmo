<div class="container-fluid mb-5">
    <div class="row">

        <div class="col-sm-6 col-lg-5 mt-5 text-center">
            <div class="mt-4">
                <figure>
                    <img src="<?= URI ?>img/" width="390" alt="property" id="maison_1"
                         class="border img-fluid border-dark rounded mb-2">
                </figure>
            </div>
            <div>
                <figure>

                    <img src="<?= URI ?>'img/'<?=$detrail1['imgName']?>" alt="property"
                         class="image1 maison_1 border border-dark rounded m-1" height="80" >


                </figure>
            </div>
        </div>

        <div class="col-sm-6 col-lg-5 mt-4 mx-auto justify-content">
            <h3><?= $detail['nom'] ?></h3>
            <div class="border border-dark rounded p-2 text-white" id="description">
                <div class="form-group row">
                    <label for="prix" class="col-form-label col-sm-4 mx-auto">Type :</label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="form-control-plaintext text-white"
                               value="<?= $detail['type'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prix" class="col-form-label col-sm-4 mx-auto">Catégorie :</label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="form-control-plaintext text-white"
                               value="<?= $detail['cateName'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prix" class="col-form-label col-sm-4 mx-auto">Prix (en €) :</label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="form-control-plaintext text-white"
                               value="<?= $detail['prix'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prix" class="col-form-label col-sm-4 mx-auto">Référence :</label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="form-control-plaintext text-white"
                               value="<?= $detail['reference'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prix" class="col-form-label col-sm-4 mx-auto">Surface (en m²) :</label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="form-control-plaintext text-white"
                               value="<?= $detail['surface'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prix" class="col-form-label col-sm-4 mx-auto">Description :</label>
                    <div class="col-sm-7">
                            <textarea type="text" readonly class="form-control-plaintext text-justify text-white"
                                      rows="4"><?= $detail['description'] ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prix" class="col-form-label col-sm-4 mx-auto">Classe énergétique :</label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="form-control-plaintext text-white"
                               value="<?= $detail['classe_energetique'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prix" class="col-form-label col-sm-4 mx-auto">Nombre de pièces :</label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="form-control-plaintext text-white"
                               value="<?= $detail['nbr_de_pieces'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prix" class="col-form-label col-sm-4 mx-auto">Nombre de chambre :</label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="form-control-plaintext text-white"
                               value="<?= $detail['nbr_de_chambre'] ?>">
                    </div>
                </div>
                <div class="text-right p-3">
                    <button type="submit" class="btn btn-success">Favoris</button>
                </div>
            </div>
        </div>
    </div>
</div>