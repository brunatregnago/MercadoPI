
    <div class=" table-responsive col-9 mt-5">
        <table class="table table-striped table-bordered col-md-10" id="table" style="text-align: center;">
            <thead>
                <tr>
                    <th> Categoria </th>
                    <th> Subcategoria </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($subcategoria as $sub) {
                    echo '<tr>';
                    echo '<td>' . $sub->categoria . '</td>';
                    echo '<td>' . $sub->nome_subcategoria . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . 'index.php/Subcategoria/alterar/'
                    . $sub->id_subcategoria . '"><i class="fas fa-edit"></i></a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Subcategoria/deletar/'
                    . $sub->id_subcategoria . '"><i class="fas fa-trash"></i></a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>