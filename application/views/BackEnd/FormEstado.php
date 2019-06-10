
<form action="" class="col-md-8 mt-5" method="POST">
    <div class="form-group col-md-10">
        <div class="form-group">
             <input type="hidden" name="id_estado" value="<?= (isset($estado)) ? $estado->id_estado : ''; ?>">
            <label for="pais">País</label>
            <select id="id_pais" name="id_pais" class="form-control">
                <option selected>País</option>
                <?php
                foreach ($pais as $p) {
                    echo '<option value="' . $p->id_pais . '">' . $p->nome_pais. '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" id="nome_estado" name="nome_estado" placeholder=""value="<?= (isset($estado)) ? $estado->nome_estado : ''; ?>">
        </div>
        <button type="submit" class="btn btn-success mb-2">Salvar</button>
        <button type="reset" class="btn btn-secondary mb-2">Cancelar</button>
    </div>
</form>
</body>
</html>
