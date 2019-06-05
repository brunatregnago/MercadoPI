
<form class="col-md-9 mt-5">
    <div class="form-row">
        <div class="form-group col-md-9">
            <input type="hidden" name="id" value="<?= (isset($prova)) ? $prova->id_prova : ''; ?>">
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
        <div class="form-group col-md-9">
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
        <div class="form-group col-md-9">
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
        <div class="form-group col-md-9">
            <label for="nomeproduto">Descrição</label>
            <input type="text" class="form-control" id="nome_produto" placeholder="">
        </div>
        <div class="form-group col-md-6">
            <label for="valor">Preço</label>
            <input type="text" class="form-control" id="valor_unitario_produto" placeholder="">
        </div>
        <div class="form-group col-md-3">
            <label for="medida_valor">Unidade do preço</label>
            <select id="medida_valor" class="form-control" name="medida_valor">
                <option selected>Unidade de medida</option>
                <?php
                    foreach ($medida_valor as $mval) {
                        echo '<option value="' . $mval->medida_valor . '">' . $mval->medida_valor . '</option>';
                    }
                    ?>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="peso">Peso</label>
            <input type="text" class="form-control" id="peso_produto" placeholder="">
        </div>
    <div class="form-group col-md-3">
        <label for="unidade_medida">Unidade de medida</label>
        <select id="unidade_medida" class="form-control">
            <option selected>Unidade do peso</option>
            <?php
                    foreach ($unidade_medida as $uni) {
                        echo '<option value="' . $uni->id_medida . '">' . $uni->medida . '</option>';
                    }
                    ?>
        </select>
    </div>


    <input type="file" name="userfile" size="20" />
    <input type="submit" value="upload" />
    </div>

    <button type="submit" class="btn btn-success  mt-4 mb-2">Salvar</button>
    <button type="reset" class="btn btn-secondary mt-4 mb-2">Cancelar</button>
</form>
</body>
</html>
