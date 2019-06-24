
    <div class=" table-responsive col-9 mt-5">        
    
    <a href="<?= $this->config->base_url() . 'index.php/Cidade/cadastro'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Cadastrar</button></a>

        <table class="table table-striped table-bordered col-md-10" id="table" style="text-align: center;">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
            <thead>
                <tr>
                    <th> Cidade </th>
                    <th> Estado </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($cidade as $cid) {
                    echo '<tr>';
                    echo '<td>' . $cid->nome_cidade . '</td>';
                    echo '<td>' . $cid->estado . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . 'index.php/Cidade/alterar/'
                    . $cid->id_cidade . '"><i class="fas fa-edit"></i></a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Cidade/deletar/'
                    . $cid->id_cidade . '"><i class="fas fa-trash"></i></a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>