
<form method="POST" action="" class="col-9 mt-5">
    <div class="form-group col-md-9">
        <div class="form-group col-md-9">
            <input type="hidden" name="id_cidade" value="<?= (isset($cidade)) ? $cidade->id_cidade : ''; ?>">
            
            <label for="estado">Estado</label>
            <select id="id_estado" name="id_estado" class="form-control">
                <option selected>Selecione o estado</option>
                <?php
                foreach ($estado as $e) {
                    echo '<option value="' . $e->id_estado . '">' . $e->nome_estado . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group col-md-9">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="nome_cidade" name="nome_cidade" placeholder="" value="<?= (isset($cidade)) ? $cidade->nome_cidade : ''; ?>">
        </div>
        <button type="submit" class="btn btn-success mb-2">Salvar</button>
        <button type="reset" class="btn btn-secondary mb-2">Cancelar</button>
    </div>
</form>
</body>
</html>
