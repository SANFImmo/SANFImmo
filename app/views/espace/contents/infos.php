<div class="container m-5 mx-auto">
    <h1 class="text-center mt-5">INFOS PERSONNELLES</h1>
    <div class="row justify-content-center">
        <form method="POST" class="border border-secondary rounded col-sm-12 col-md-10 col-lg-8 p-4 m-5">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="text-white" for="name">Nom:</label>
                    <input type="email" class="form-control" name="name" id="name" value="" required>
                </div>
                <div class="form-group col-md-6">
                    <label class="text-white" for="fistName">Prénom:</label>
                    <input type="text" class="form-control" name="fistName" id="fistName" value=""
                           required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="text-white" for="email">E-mail:</label>
                    <input type="email" class="form-control" name="email" id="email" value="" required>
                </div>
                <div class="form-group col-md-6">
                    <label class="text-white" for="mdp">Mot de passe:</label>
                    <input type="password" class="form-control" name="mdp" id="mdp" value="" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group  col-md-2">
                    <label class="text-white" for="number">N°:</label>
                    <input type="number" class="form-control" name="number" id="number" value="" required>
                </div>
                <div class="form-group col-md-10">
                    <label class="text-white" for="address">Adresse:</label>
                    <input type="text" class="form-control" name="address" id="address" value="" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="text-white" for="cp">Code postal:</label>
                    <input type="number" class="form-control" name="cp" id="cp" value="" required>
                </div>

                <div class="form-group col-md-4">
                    <label class="text-white" for="ville">Ville:</label>
                    <input type="text" class="form-control" name="ville" id="ville" value="" required>
                </div>
                <div class="form-group col-md-4">
                    <label class="text-white" for="pays">Pays:</label>
                    <select id="pays" name="pays" class="form-control" required>
                        <option>Afrique</option>
                        <option>Allemagne</option>
                        <option>Autriche</option>
                        <option>Belgique</option>
                        <option>Danemark</option>
                        <option>Espagne</option>
                        <option>Etats-Unis</option>
                        <option selected>France</option>
                        <option>Italie</option>
                        <option>Portugal</option>
                        <option>Royaume-Unis</option>
                        <option>Suisse</option>
                    </select>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-outline-success">Modifier</button>
            </div>
        </form>
    </div>
</div>