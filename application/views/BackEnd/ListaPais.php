
    <div class=" table-responsive col-9 mt-5">        
    
    <a href="<?= $this->config->base_url() . 'index.php/Pais/cadastro'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Cadastrar</button></a>

        <table class="table table-striped table-bordered col-md-10" id="table" style="text-align: center;">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
            <thead>
                <tr>
                    <th> País </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($pais as $p) {
                    echo '<tr>';
                    echo '<td>' . $p->nome_pais . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . 'index.php/Pais/alterar/'
                    . $p->id_pais . '"><i class="fas fa-edit"></i></a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Pais/deletar/'
                    . $p->id_pais . '"><i class="fas fa-trash"></i></a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>