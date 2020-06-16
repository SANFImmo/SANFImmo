<div class="container-fluid card-body">
    <table id="dtBasicExample" class="table table-dark" width="100%">
        <thead>
            <tr>
                <th class="th-sm text-center">TOP

                </th>
                <th class="th-sm text-center">Nom

                </th>
                <th class="th-sm text-center">Prix

                </th>
                <th class="th-sm text-center">Réference

                </th>
                <th class="th-sm text-center">Surface

                </th>
                <th class="th-sm text-center">Classe énergie

                </th>
                <th class="th-sm text-center">Nb. Pièce(s)

                </th>
                <th class="th-sm text-center">Nb. Chambre(s)

                </th>
                <th class="th-sm text-center">Type

                </th>
                <th class="th-sm text-center">Statut

                </th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($results as $val) {
                echo '<tr>
                    <td>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="01">
                    <label class="form-check-label" for="01">
                    </label>
                    </div>
                    </td>';
                echo '<td class="text-center">' . $val['nom'] . '</td>';
                echo '<td class="text-center">' . $val['prix'] . '</td>';
                echo '<td class="text-center">' . $val['reference'] . '</td>';
                echo '<td class="text-center">' . $val['surface'] . '</td>';
                echo '<td class="text-center">' . $val['classe_energetique'] . '</td>';
                echo '<td class="text-center">' . $val['nbr_de_pieces'] . '</td>';
                echo '<td class="text-center">' . $val['nbr_de_chambre'] . '</td>';
                echo '<td class="text-center">' . $val['type'] . '</td>';
                echo '<td class="text-center"><img src="footer/CSS/img/red.png" alt="desactiver" class="rounded-circle-success" width="25"></td>';
                echo    '<td><div class="btn-group btn-group-sm" role="group" aria-label="...">
                    <a href="#" type="button" class="btn btn-light">Voir</a>
                    <a href="' . URI . 'admin/property/edit_property" type="button" class="btn btn-info">Modiffier</a>
                    <a href="#" type="button" class="btn btn-danger ">Supprimer</a>
                </div>
            </td>
            </tr>';
            }
            ?>


        </tbody>
    </table>
    <div class="text-right pr-5 col-md-12">
        <a href="<?= URI . 'admin/property/add' ?> " class="btn btn-outline-success mt-3 mb-3">Ajouter</a>
    </div>
    <div class="justify-content-end">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>