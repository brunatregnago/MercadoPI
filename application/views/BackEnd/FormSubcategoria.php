
<form method="POST" action="" class="col-9 mt-5">
    <div class="form-group col-9">
        <div class="form-group col-md-9">
            <input type="hidden" name="id_subcategoria" value="<?= (isset($subcategoria)) ? $subcategoria->id_subcategoria : ''; ?>">
            
            <label for="categoria">Categoria</label>
            <select id="id_categoria" name="id_categoria" class="form-control">
                <option selected>Categoria</option>
                <?php
                foreach ($categoria as $cat) {
                    echo '<option value="' . $cat->id_categoria . '">' . $cat->nome_categoria . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group col-md-9">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control" id="nome_subcategoria" placeholder="" name="nome_subcategoria" placeholder="" value="<?= (isset($subcategoria)) ? $subcategoria->nome_subcategoria : ''; ?>">
        </div>
        <button type="submit" class="btn btn-success mb-2">Salvar</button>
        <button type="reset" class="btn btn-secondary mb-2">Cancelar</button>
    </div>
</form>
</body>
</html>