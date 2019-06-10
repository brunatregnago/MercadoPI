
<form action="" class="col-md-8 mt-5" method="POST">
    <div class="form-group col-md-10">
        <div class="form-group">
             <input type="hidden" name="id_pais" value="<?= (isset($pais)) ? $pais->id_pais : ''; ?>">
            <label for="pais">País</label>
            <input type="text" class="form-control" id="nome_pais" name="nome_pais" placeholder="" value="<?= (isset($pais)) ? $pais->nome_pais : ''; ?>">
        </div>
        <button type="submit" class="btn btn-success mb-2">Salvar</button>
        <button type="reset" class="btn btn-secondary mb-2">Cancelar</button>
    </div>
</form>
</body>
</html>
