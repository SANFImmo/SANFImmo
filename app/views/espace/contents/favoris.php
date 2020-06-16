<div class="container-fluid m-0 p-0">
    <div class="card-body">
        <h2 class="text-center">Mes Favoris</h2>
        <?php
            echo '<div class="card-body justify-content-around row">';
        foreach ($liste as $key => $val) {

            echo '<div class="card col-sm-12 col-md-5 col-lg-3 p-0 mt-5 ml-2 mr-2">';
            echo '<img src="' .  URI  . 'img/' . $val['imgName'] . '" class="card-img-top" alt="img_property">';
            echo '<div class="card-body row">';
            echo '<div class="text-center col-12">';
            echo '<span class="text-center">' . $val['nom'] . '</span>';
            echo '</div>';
            echo '<div class="text-left col-6 mt-2">';
            echo '<span>Prix : </span>';
            echo '</div>';
            echo '<div class="text-right col-6 mt-2">';
            echo '<span>' . $val['prix'] . '</span>';
            echo '</div>';
            echo '<div class="text-left col-6 mt-2">';
            echo '<span>Référence :</span>';
            echo '</div>';
            echo '<div class="text-right col-6 mt-2">';
            echo '<span>' . $val['reference'] . '</span>';
            echo '</div>';
            echo '</div>';
            echo '<div class="text-right pr-3">';
            echo '<a href="#" type="button" class="btn btn-outline-info btn-sm mb-3">En savoir plus</a>';
            echo '</div>';
            echo '</div>';
        }
            echo '</div>';
        ?>
    </div>
</div>