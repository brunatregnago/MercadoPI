<div class="col-9">        
    
    <div class=" table-responsive col-md-10 mt-5">
    <a href="<?= $this->config->base_url() . 'index.php/Departamento/cadastro'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Cadastrar</button></a>

        <table class="table table-striped table-bordered" id="table" style="text-align: center;">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
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
                    . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . 'index.php/Departamento/alterar/'
                    . $dep->id_departamento . '"><i class="fas fa-edit"></i></a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Departamento/deletar/'
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