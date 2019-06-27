
<form method="POST" action="" class="col-9 mt-5">
        <a href="<?= $this->config->base_url() . 'index.php/Promocao/lista'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Lista de Promocao</button></a>
    <a href="<?= $this->config->base_url() . 'index.php/Promocao/cadastro'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Cadastrar Promoção</button></a>
    <a href="<?= $this->config->base_url() . 'index.php/ProdutoPromocao/lista'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Lista de Produtos em Promoção</button></a>
  
    
    <div class="form-group">
        <div class="form-group col-md-10">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>   
            <label for="id_promocao">Promoção</label>
            <select id="id_promocao" name="id_promocao" class="form-control">
                <option selected>Selecione a promoção</option>
                <?php
                foreach ($promocao as $pmc) {
                    echo '<option value="' . $pmc->id_promocao . '">' . $pmc->nome_promocao . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group col-md-10">
            <label for="id_produto">Produto</label>
            <select id="id_produto" name="id_produto" class="form-control">
                <option selected>Selecione o produto</option>
                <?php
                foreach ($produto as $pr) {
                    echo '<option value="' . $pr->id_produto . '">' . $pr->nome_produto . '</option>';
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success mb-2">Salvar</button>
        <button type="reset" class="btn btn-secondary mb-2">Cancelar</button>
    </div>
</form>
</body>
</html>
