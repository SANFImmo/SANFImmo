<h1 class="text-center">Detail du message</h1>


    <div class="container border border-dark rounded mb-5 p-3 col-11 col-md-10">
    <span>From: <?=' ' . $detail['nom'] .' '. $detail['prenom'] ?></span><br>
    <span>E-mail: <?= $detail['mail'] ?></span><br>
    <span>Objet: <?= $detail['object'] ?></span>

    <form method="GET" action="">
    <fieldset class="border m-2 p-2">
    <legend class="col-auto">Message</legend>
           <p><?= $detail['message'] ?></p>
    </fieldset>
    </form>
    <div class="text-right">
    <button class="btn btn-outline-danger btn-sm mt-3" name="suppr">Supprimer</button>
    </div>
    </div>


