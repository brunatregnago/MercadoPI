
<div class=" table-responsive mt-5 col-8">        
    
    <a href="<?= $this->config->base_url() . 'index.php/ProdutoPromocao/cadastro'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Cadastrar Produto na Promoção</button></a>
    <a href="<?= $this->config->base_url() . 'index.php/Promocao/cadastro'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Cadastrar Promoção</button></a>
    <a href="<?= $this->config->base_url() . 'index.php/Promocao/lista'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Lista de Promoção</button></a>
    
    <table class="table table-striped table-bordered" id="table" style="text-align: center;">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
        <thead>
            <tr>
                <th> Promoção </th>
                <th> Produto </th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produtopromocao as $pp) {
                echo '<tr>';
                echo '<td>' . $pp->nome_promocao . '</td>';
                echo '<td>' . $pp->nome_produto . '</td>';
                echo '<td>'
                . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/ProdutoPromocao/deletar/'
                . $pp->cd_promocao . '"><i class="fas fa-trash"></i></a>'
                . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>