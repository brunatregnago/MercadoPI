
<form method="POST" action="" class="col-9 mt-5">
    
    <a href="<?= $this->config->base_url() . 'index.php/Categoria/lista'; ?>"><button type="button" class="btn btn-outline-secondary ml-3 mb-4">Lista</button></a>

    <div class="form-group">
        <div class="form-group col-md-10">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
            <input type="hidden" name="id_categoria" value="<?= (isset($categoria)) ? $categoria->id_categoria : ''; ?>">
            
            <label for="departamento">Departamento</label>
            <select id="id_departamento" name="id_departamento" class="form-control">
                <option selected>Departamento</option>
                <?php
                foreach ($departamento as $dep) {
                    echo '<option value="' . $dep->id_departamento . '">' . $dep->nome_departamento . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group col-md-9">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control" id="nome_categoria" placeholder="" name="nome_categoria" placeholder="" value="<?= (isset($categoria)) ? $categoria->nome_categoria : ''; ?>">
        </div>
        <button type="submit" class="btn btn-success mb-2">Salvar</button>
        <button type="reset" class="btn btn-secondary mb-2">Cancelar</button>
    </div>
</form>
</body>
</html>
