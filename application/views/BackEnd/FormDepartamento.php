
    <form action="" class="col-8" method="POST">
        <div class="form-group mt-5">
            <div class="form-row">
                <div class="form-group col-10">
                    <input type="hidden" name="id_departamento" value="<?= (isset($departamento)) ? $departamento->id_departamento : ''; ?>">
                    <label for="departamento">Departamento</label>
                    <input type="text" class="form-control" id="nome_departamento" name="nome_departamento" placeholder="" value="<?= (isset($departamento)) ? $departamento->nome_departamento : ''; ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-success mb-2">Salvar</button>
            <button type="reset" class="btn btn-secondary mb-2">Cancelar</button>
        </div>
    </form>
</div>
</div>
</body>
</html>