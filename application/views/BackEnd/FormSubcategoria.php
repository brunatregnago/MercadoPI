<form method="POST" action="" class="col-9 mt-5">
    <a href="<?= $this->config->base_url() . 'index.php/Subcategoria/lista'; ?>"><button type="button" class="btn btn-outline-secondary ml-3 mb-4">Lista</button></a>

    <div class="form-group col-10">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
        <div class="form-group">
            <input type="hidden" name="id_subcategoria" id="id_subcategoria" value="<?= (isset($subcategoria)) ? $subcategoria->id_subcategoria : ''; ?>">
            
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
        <div class="form-group">
            <label for="subcategoria">Subcategoria</label>
            <input type="text" class="form-control" id="nome_subcategoria" placeholder="" name="nome_subcategoria" placeholder="" value="<?= (isset($subcategoria)) ? $subcategoria->nome_subcategoria : ''; ?>">
        </div>
        <button type="submit" class="btn btn-success mb-2">Salvar</button>
        <button type="reset" class="btn btn-secondary mb-2">Cancelar</button>
    </div>
</form>
</div>
</body>
</html>