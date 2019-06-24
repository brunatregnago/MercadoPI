
<div class=" table-responsive mt-5 col-8">        
    
    <a href="<?= $this->config->base_url() . 'index.php/Promocao/cadastro'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Cadastrar</button></a>

    <table class="table table-striped table-bordered" id="table" style="text-align: center;">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
        <thead>
            <tr>
                <th> Descrição </th>
                <th> Data início </th>
                <th> Data fim </th>
                <th> Porcentual de desconto </th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($promocao as $pmc) {
                echo '<tr>';
                echo '<td>' . $pmc->nome_promocao . '</td>';
                echo '<td>' . $pmc->inicio_promocao . '</td>';
                echo '<td>' . $pmc->fim_promocao . '</td>';
                echo '<td>' . $pmc->porcento_desconto . '</td>';
                echo '<td>'
                . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . 'index.php/Promocao/alterar/'
                . $pmc->id_promocao . '"><i class="fas fa-edit"></i></a>'
                . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Promocao/deletar/'
                . $pmc->id_promocao . '"><i class="fas fa-trash"></i></a>'
                . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>