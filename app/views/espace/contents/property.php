<div id="contentProperty" class="container m-5 mx-auto">
    <h1 class="text-center mt-5">PROPOSER UN BIEN</h1>
    <div class="row justify-content-center">
        <form method="POST" class="border border-secondary rounded col-sm-12 col-md-10 col-lg-8 p-4 m-5">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="text-white" for="type">Catégorie du bien:</label>
                </div>
                <div class="form-group col-md-3">
                    <select class="custom-select" id="type" name="type">
                        <option selected value="1">Maison</option>
                        <option value="2">Appartement</option>
                        <option value="3">Garage</option>
                        <option value="4">Local</option>
                        <option value="5">Terrain</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                    <label class=" text-white">Type de bien:</label>
                </div>
                <div class="col-md-5">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="vente" name="venteLocat" class="custom-control-input" checked>
                        <label class="custom-control-label text-white" for="vente">Vente</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="location" name="venteLocat" class="custom-control-input">
                        <label class="custom-control-label text-white" for="location">Location</label>
                    </div>
                </div>
            </div>
            <div class="form-row pt-4">
                <div class="col">
                    <div class="form-row">
                        <div class="col-md-3">
                            <label for="prix" class="text-white">Prix:</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="prix" id="prix" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-row">
                        <div class="col-md-3">
                            <label for="ville" class="text-white">Ville:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="ville" name="ville">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="form-row  pt-4">
                        <div class="col-md-4">
                            <label for="surface" class="text-white">Surface:</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="surface" id="surface" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-row pt-4">
                        <div class="col-md-8">
                            <label for="nbrChamb" class="text-white">Nbr de chambre:</label>
                        </div>
                        <div class="col-md-4">
                            <select class="custom-select" id="nbrChamb" name="nbrChamb">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-row pt-4">
                        <div class="col-md-8">
                            <label for="nbrPiece" class="text-white">Nbr de piéce:</label>
                        </div>
                        <div class="col-md-4">
                            <select class="custom-select" id="nbrPiece" name="nbrPiece">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row pt-4">
                <div class="form-group col">
                    <label for="exampleFormControlTextarea1" class="text-white">Description:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
            </div>
            <div id="drop-area">
                <div class="my-form">
                    <h4 class="text-center text-white">Mettez 1 à 3 photos de votre bien ici:</h4>
                    <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
                </div>
                <progress id="progress-bar" max=100 value=0 hidden></progress>
                <div class="form-row" id="gallery"></div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-outline-success">Proposer</button>
            </div>
        </form>
    </div>
</div>
