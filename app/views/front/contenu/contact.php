<div class="container m-5 mx-auto">
    <h1 class="text-center mt-5">NOUS CONTACTER</h1>
    <div class="row justify-content-center">
        <form class="border border-secondary rounded col-sm-12 col-md-10 col-lg-8 p-4 m-5">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="text-white" for="name">Nom:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Bond" required>
                </div>
                <div class="form-group col-md-6">
                    <label class="text-white" for="fistName">Prénom:</label>
                    <input type="text" class="form-control" name="fistName" id="fistName" placeholder="James" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label class="text-white" for="email">E-mail:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email@exemple.com"
                           required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label class="text-white" for="objet">Objet:</label>
                    <input type="text" class="form-control" name="objet" id="objet" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="message" class="text-white">Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="6"></textarea>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-outline-success" name="envoyer">Envoyer</button>
            </div>
        </form>
    </div>
</div>