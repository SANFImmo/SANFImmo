<div class="container m-5 mx-auto">
    <h1 class="text-center mt-5">INSCRIPTION</h1>
    <div class="row justify-content-center">
        <form method="POST" class="border border-secondary rounded col-sm-12 col-md-10 col-lg-8 p-4 m-5">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="text-white" for="nom">Nom:</label>
                    <input type="text" class="form-control" name="nom" id="nom" value="<?= $nom ?? '' ?>" placeholder="Bond" required>
                </div>
                <div class="form-group col-md-6">
                    <label class="text-white" for="prenom">Prénom:</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" value="<?= $prenom ?? '' ?>" placeholder="James" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="text-white" for="telephone">Tel:</label>
                    <input type="text" class="form-control" name="telephone" id="telephone" value="<?= $telephone ?? '' ?>" placeholder="03-27-55-88-99"
                           required>
                </div>
                <div class="form-group col-md-6">
                    <label class="text-white" for="naissance">Date de Naissance:</label>
                    <input type="text" class="form-control" name="naissance" id="naissance" value="<?= $naissance ?? '' ?>" placeholder="2020-02-27 (Y-M-D)"
                           required>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label class="text-white" for="mail">E-mail:</label>
                <input type="email" class="form-control" name="mail" id="mail" value="<?= $mail ?? '' ?>" placeholder="email@exemple.com" required>
            </div>
                <div class="form-group col-md-6">
                    <label class="text-white" for="password">Mot de passe:</label>
                    <input type="password" class="form-control" name="password" id="password" value="<?= $password ?? '' ?>" placeholder="********"
                           required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group  col-md-2">
                    <label class="text-white" for="numero">N°:</label>
                    <input type="number" class="form-control" name="numero" id="numero" value="<?= $numero ?? '' ?>" placeholder="1234" required>
                </div>
                <div class="form-group col-md-10">
                    <label class="text-white" for="rue">Adresse:</label>
                    <input type="text" class="form-control" name="rue" id="rue" value="<?= $rue ?? '' ?>" placeholder="Main St" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="text-white" for="cp">Code postal:</label>
                    <input type="number" class="form-control" name="cp" id="cp" value="<?= $cp ?? '' ?>" placeholder="62800" required>
                </div>

                <div class="form-group col-md-4">
                    <label class="text-white" for="ville">Ville:</label>
                    <input type="text" class="form-control" name="ville" id="ville" value="<?= $ville ?? '' ?>" placeholder="Lens" required>
                </div>
                <div class="form-group col-md-4">
                    <label class="text-white" for="pays">Pays:</label>
                    <select id="pays" name="pays" class="form-control">
                        <option value="Null" > - </option>
                        <option value="Affrique" >Afrique</option>
                        <option value="Allemagne">Allemagne</option>
                        <option value="Autriche">Autriche</option>
                        <option value="Belgique">Belgique</option>
                        <option value="Danemark">Danemark</option>
                        <option value="Espagne">Espagne</option>
                        <option value="Etats-Unis">Etats-Unis</option>
                        <option value="France">France</option>
                        <option value="Italie">Italie</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Royaume-Unis">Royaume-Unis</option>
                        <option value="Suisse">Suisse</option>
                    </select>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-outline-success" name="inscription">Inscription</button>
            </div>
        </form>
    </div>
</div>

