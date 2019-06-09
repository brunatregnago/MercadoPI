
    <div class=" table-responsive col-9 mt-5">
        <table class="table table-striped table-bordered" id="table" style="text-align: center;">
            <thead>
                <tr>
                    <th> Departamento </th>
                    <th> Categoria </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($categoria as $cat) {
                    echo '<tr>';
                    echo '<td>' . $cat->cd_departamento . '</td>';
                    echo '<td>' . $cat->nome_categoria . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . '/Categoria/alterar/'
                    . $cat->id_categoria . '"><i class="fas fa-edit"></i></a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . '/Categoria/deletar/'
                    . $cat->id_categoria . '"><i class="fas fa-trash"></i></a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>