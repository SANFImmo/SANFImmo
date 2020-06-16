
<div class="d-flex flex-wrap backGround">

    <div class="col-6 col-md-3">
        <img class="img-fluid" src="<?= URI ?>img/SANFImmo.png" alt="">
    </div>

    <div class="col-6 col-md-3 order-md-last align-self-center text-right">
        <a href="<?=URI?>connexion" type="button" class="d-none d-xl-inline btn btn-outline-light btn-sm  align-items-center">Se
            connecter</a>
        <a href="<?=URI?>connexion" ><i class="d-xl-none fas fa-user-times text-light sizeNoConnect"> </i></a>
        <button type="submit" class="btn btn-outline-light btn-sm " value="connecter">Proposer un bien</button>
    </div>

    <div class="col-12 col-md-6 align-self-center">
        <div class="input-group md-form form-sm form-2 pl-0">
            <input class="form-control my-0 py-1 amber-border" id="autocomp" type="text" placeholder="Search"
                   aria-label="Search">
            <div class="input-group-append">
                    <span class="input-group-text searchBackground" id="basic-text1"><i
                            class="fas fa-search dark"></i></span>
            </div>
        </div>
    </div>
</div>

<?php
/*
if (isset() == 'connecter') {
    header('Location: /proposer');
}else {
    header('Location: /inscription');
}
*/
