
    <div class=" table-responsive col-9 mt-5">        
    
    <a href="<?= $this->config->base_url() . 'index.php/Categoria/cadastro'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Cadastrar</button></a>

        <table class="table table-striped table-bordered col-md-10" id="table" style="text-align: center;">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
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
                    echo '<td>' . $cat->departamento . '</td>';
                    echo '<td>' . $cat->nome_categoria . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . 'index.php/Categoria/alterar/'
                    . $cat->id_categoria . '"><i class="fas fa-edit"></i></a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Categoria/deletar/'
                    . $cat->id_categoria . '"><i class="fas fa-trash"></i></a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>