
<form action="" method="POST" enctype="multipart/form-data" class="col-md-9 mt-5" >

    <a href="<?= $this->config->base_url() . 'index.php/Produto/lista'; ?>"><button type="button" class="btn btn-outline-secondary mb-4">Lista</button></a>

    <div class="form-row">
        <div class="form-group col-md-11">
            <?php
            $mensagem = $this->session->flashdata('mensagem');
            echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
            ?>              
            <label for="departamento">Departamento</label>
            <select id="id_departamento" class="form-control" name="id_departamento">
                <option selected>Selecione o departamento</option>
                <?php
                foreach ($departamento as $dep) {
                    echo '<option value="' . $dep->id_departamento . '">' . $dep->nome_departamento . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group col-md-11">
            <label for="categoria">Categoria</label>
            <select id="id_categoria" class="form-control" name="id_categoria">
                <option selected>Selecione a categoria</option>
                <?php
                foreach ($categoria as $cat) {
                    echo '<option value="' . $cat->id_categoria . '">' . $cat->nome_categoria . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group col-md-11">
            <label for="subcategoria">Subcategoria</label>
            <select id="id_subcategoria" class="form-control" name="id_subcategoria">
                <option selected>Selecione a subcategoria</option>
                <?php
                foreach ($subcategoria as $sub) {
                    echo '<option value="' . $sub->id_subcategoria . '">' . $sub->nome_subcategoria . '</option>';
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-11">
            <label for="nomeproduto">Descrição</label>
            <input type="text" class="form-control" id="nome_produto" placeholder="" name="nome_produto" value="<?= (isset($produto)) ? $produto->nome_produto : ''; ?>">
        </div>
        <div class="form-group col-md-5">
            <label for="valor">Preço</label>
            <input type="text" class="form-control" id="valor_unitario_produto" name="valor_unitario_produto"  placeholder="" value="<?= (isset($produto)) ? $produto->valor_unitario_produto : ''; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="medida_valor">Unidade do preço</label>
            <select id="id_medida_valor" class="form-control" name="id_medida_valor">
                <option selected>Selecione a unidade de medida</option>
                <?php
                foreach ($medida_valor as $mval) {
                    echo '<option value="' . $mval->id_medida_valor . '">' . $mval->medida_valor . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group col-md-5">
            <label for="peso">Peso</label>
            <input type="text" class="form-control" id="peso_produto" placeholder="" name="peso_produto" value="<?= (isset($produto)) ? $produto->peso_produto : ''; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="unidade_medida">Unidade de medida</label>
            <select id="id_medida" name="id_medida" class="form-control">
                <option selected>Selecione a unidade do peso</option>
                <?php
                foreach ($unidade_medida as $uni) {
                    echo '<option value="' . $uni->id_medida . '">' . $uni->medida . '</option>';
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group col-md-11">
            <div class="input-group md-12">
                <input type="file" name="userfile" size="20" />
                <input type="submit" value="upload" />
            </div>
        
        </div>
    <div class="col-md-10">
        <button type="submit" class="btn btn-success  mt-4 mb-2">Salvar</button>
        <button type="reset" class="btn btn-secondary ml-2 mt-4 mb-2">Limpar</button>
    </div>
</form>
</body>
</html>
