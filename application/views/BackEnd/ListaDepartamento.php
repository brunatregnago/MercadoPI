<div class="col-9">
    <div class=" table-responsive col-md-10 mt-5">
        <table class="table table-striped table-bordered" id="table" style="text-align: center;">
            <thead>
                <tr>
                    <th> Departamento </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($departamento as $dep) {
                    echo '<tr>';
                    echo '<td>' . $dep->nome_departamento . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . 'Departamento/alterar/'
                    . $dep->id_departamento . '"><i class="fas fa-edit"></i></a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'Departamento/deletar/'
                    . $dep->id_departamento . '"><i class="fas fa-trash"></i></a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>