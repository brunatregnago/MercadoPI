
<form action="" class="col-8 mt-5" method="POST">
    <div class="form-group">
        <div class="form-row">
            <div class="form-group col-md-10">
                <input type="hidden" name="id_promocao" value="<?= (isset($promocao)) ? $promocao->id_promocao : ''; ?>">

                <label for="nomepromocao">Nome</label>
                <input type="text" class="form-control" id="nome_promocao" name="nome_promocao" placeholder=""  value="<?= (isset($promocao)) ? $promocao->nome_promocao : ''; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inicio">Data de início</label>
                <input type="text" class="form-control" id="inicio_promocao" name="inicio_promocao" placeholder="" value="<?= (isset($promocao)) ? $promocao->inicio_promocao : ''; ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="fim">Data de encerramento</label>
                <input type="text" class="form-control" id="fim_promocao" name="fim_promocao" placeholder="" value="<?= (isset($promocao)) ? $promocao->fim_promocao : ''; ?>">
            </div>
            <div class="col-md-1"></div>
            <div class="form-group col-md-3">
                <label for="porcento">Porcento de desconto</label>
                <input type="text" class="form-control" id="porcento_desconto" name="porcento_desconto" placeholder="0" value="<?= (isset($promocao)) ? $promocao->porcento_desconto : ''; ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-success mr-2">Salvar</button>
        <button type="reset" class="btn btn-secondary mr-2">Cancelar</button>
    </div>
</form>
</div>
</body>
</html>
