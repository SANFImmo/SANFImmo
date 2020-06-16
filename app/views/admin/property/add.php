<h1 class="text-center text-dark">Ajouter un bien</h1>



<form enctype="multipart/form-data" method="POST" action="" class="container-fluid p-4 border border-dark rounded">
    <div class="form-group row">
        <label for="staticEmail" class="col-xl-2 col-form-label">Nom du bien:</label>
        <div class="col-xl-10">
            <input type="text" class="form-control" id="staticEmail" name="nom_property" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-xl-2 col-form-label">Catégorie:</label>
        <div class="col-xl-10">
            <select name="categorie" class="custom-select ">
                <option value="0">--Selectionnez la catégorie--</option>
                <option value="1">Maison</option>
                <option value="2">Appartement</option>
                <option value="3">Local</option>
                <option value="4">Terrain</option>
                <option value="5">Autres</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="staticEmail" class="col-xl-2 col-form-label">Vente ou location:</label>
        <div class="col-xl-10 align-self-center">
            <div class="form-check form-check-inline">
                <input name="type" class="form-check-input"  type="radio" checked id=""  value="vente">
                <label class="form-check-label" for="inlineRadio1">Vente</label>
            </div>
            <div class="form-check form-check-inline">
                <input name="type" class="form-check-input" type="radio"  id="" value="location">
                <label class="form-check-label" for="inlineRadio2">Location</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="staticEmail" class="col-xl-2 col-form-label">Prix:</label>
        <div class="col-xl-10">
            <input type="text" name="prix" class="form-control" id="staticEmail" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="staticEmail" class="col-xl-2 col-form-label">Reference:</label>
        <div class="col-xl-10">
            <input type="text" name="reference" class="form-control" id="staticEmail" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="staticEmail" class="col-xl-2 col-form-label">Surface m²:</label>
        <div class="col-xl-10">
            <input type="text" name="surface" class="form-control" id="staticEmail" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="staticEmail" class="col-xl-2 col-form-label">Description:</label>
        <div class="col-xl-10">
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-xl-2 col-form-label">Classe énergétique:</label>
        <div class="col-xl-10">
            <select name="classEnergetique" class="custom-select">
                <option value="">--Selectionner la classe énergétique--</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-xl-2 col-form-label">Nombre de chambres:</label>
        <div class="col-xl-10">
            <select name="nbChambres" class="custom-select">
                <option value="">--Selectionner le nombre de chambres--</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-xl-2 col-form-label">Nombre de pièces:</label>
        <div class="col-xl-10">
            <select name="nbPieces" class="custom-select">
                <option  value="">--Selectionner le nombre de pièces--</option>
                <option  value="1">1</option>
                <option  value="2">2</option>
                <option  value="3">3</option>
                <option  value="4">4</option>
                <option  value="5">5</option>
                <option  value="6">6</option>
                <option  value="7">7</option>
                <option  value="8">8</option>
            </select>
        </div>
    </div>
    <div class="form-group row text-center">

        <div class="col-12 col-md-4">
            <label for="exampleFormControlFile1">Photo 1</label>
            <input type="file" name="uploadFile1" id="">
        </div>

        <div class="col-12 col-md-4">
            <label for="exampleFormControlFile2">Photo 2</label>
            <input type="file" name="uploadFile2" id="exampleFormControlFile2">
        </div>

        <div class="col-12 col-md-4">
            <label for="exampleFormControlFile3">Photo 3</label>
            <input type="file" name="uploadFile3" id="exampleFormControlFile3">
        </div>



    </div>

    <div class="form-group row">
        <label for="staticEmail" class="col-xl-2 col-form-label">N°:</label>
        <div class="col-xl-10">
            <input type="text" name="numero" class="form-control" id="staticEmail" value="">
        </div>
  
        <label for="staticEmail" class="col-xl-2 col-form-label">Rue:</label>
        <div class="col-xl-10">
            <input type="text" name="rue" class="form-control" id="staticEmail" value="">
        </div>
    </div>

    <div class="form-group row">
        <label for="staticEmail" class="col-xl-2 col-form-label">Code postal:</label>
        <div class="col-xl-10">
            <input type="text" name="cp" class="form-control" id="staticEmail" value="">
        </div>
    </div>

    <div class="form-group row">
        <label for="staticEmail" class="col-xl-2 col-form-label">Ville:</label>
        <div class="col-xl-10">
            <input type="text" name="ville" class="form-control" id="staticEmail" value="">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword" class="col-xl-2 col-form-label">Selectionner le pays:</label>
        <div class="col-xl-10">
            <select name="pays" class="custom-select">
                <option value="">--Selectionner le pays--</option>
                <option value="France">France</option>
                <option value="Belgique">Belgique</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Suisse">Suisse</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="staticEmail" class="col-2 col-xl-2 col-form-label">Activer:</label>
        <div class="col-10 col-xl-10 align-self-center text-right">
            <div class="custom-control custom-switch">
                <input name="activate" type="checkbox" class="custom-control-input" id="customSwitches" value="off" >
                <label class="custom-control-label" for="customSwitches"></label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="staticEmail" class="col-2 col-xl-2 col-form-label">Visible:</label>
        <div class="col-10 col-xl-10 align-self-center text-right">
            <div class="custom-control custom-switch">
                <input name="visible" type="checkbox" class="custom-control-input" id="customSwitches2" value="off">
                <label class="custom-control-label" for="customSwitches2"></label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="staticEmail" class="col-4 col-xl-2 col-form-label">Top offre:</label>
        <div class="col-8 col-xl-10 align-self-center text-right">
            <div class="custom-control custom-switch">
                <input name="top" type="checkbox" class="custom-control-input" id="customSwitches3" value="off">
                <label class="custom-control-label" for="customSwitches3"></label>
            </div>
        </div>
    </div>

    <div class="text-right">
        <button type="submit" name="buttonAdd" class="btn btn-sm bg-success text-white">Ajouter</button>
    </div>
</form>