<div class="container-fluid card-body">
    <h1 class="text-center mb-5">LISTE DES MESSAGES</h1>
    <table id="dtBasicExample" class="table table-dark text-center">
        <thead>
        <tr>
            <th class="th-sm text-center">ID

            </th>
            <th class="th-sm text-center">Nom

            </th>
            <th class="th-sm text-center">Objet

            </th>
            <th class="th-sm text-center">Message

            </th>
            <th class="th-sm text-center">Statut

            </th>
            <th class="th-sm text-center">Action

            </th>
        </tr>
        </thead>
        <tbody>
        <?php




        foreach ($liste as $key => $val){
            echo '<tr>';
            echo '<th>' . $val['id'] . '</th>';
            echo '<td>' . $val['nom'] . '</td>';
            echo '<td>' . $val['object'] . '</td>';
            echo '<td>' . $val['message'] . '</td>';
            echo '<td>' . $val['read'] . '</td>';
            echo '<td>
                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                    <a href="' . URI_ADMIN . 'message/detail' . '/' . $val['id'] . '" type="button" class="btn btn-light">Voir</a>
                    <a href="#" type="button" class="btn btn-danger ">Supprimer</a>
                </div>
            </td>';
            echo '</tr>';

        }
        ?>
<!--
        </tbody>
    </table>
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