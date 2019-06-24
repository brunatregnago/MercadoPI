
    <div class=" table-responsive col-9 mt-5">        
    
    <a href="<?= $this->config->base_url() . 'index.php/Estado/cadastro'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Cadastrar</button></a>

        <table class="table table-striped table-bordered col-md-10" id="table" style="text-align: center;">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
            <thead>
                <tr>
                    <th> Estado </th>
                    <th> País </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($estado as $es) {
                    echo '<tr>';
                    echo '<td>' . $es->nome_estado . '</td>';
                    echo '<td>' . $es->pais . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . 'index.php/Estado/alterar/'
                    . $es->id_estado . '"><i class="fas fa-edit"></i></a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Estado/deletar/'
                    . $es->id_estado . '"><i class="fas fa-trash"></i></a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>