
<form action="" class="col-md-9" method="POST">
    <div class="form-group col-md-4">
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="hidden" name="id_promocao" value="<?= (isset($promocao)) ? $promocao->id_promocao : ''; ?>">
                
                <label for="nomepromocao">Nome</label>
                <input type="text" class="form-control" id="nome_promocao" name="nome_promocao" placeholder=""  value="<?= (isset($promocao)) ? $promocao->nome_promocao : ''; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inicio">Data de início</label>
                <input type="text" class="form-control" id="inicio_promocao" name="inicio_promocao" placeholder="" value="<?= (isset($promocao)) ? $promocao->inicio_promocao : ''; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="fim">Data de encerramento</label>
                <input type="text" class="form-control" id="fim_promocao" name="fim_promocao" placeholder="" value="<?= (isset($promocao)) ? $promocao->fim_promocao : ''; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="porcento">Porcento de desconto</label>
                <input type="text" class="form-control" id="porcento_desconto" name="porcento_desconto" placeholder="0" value="<?= (isset($promocao)) ? $promocao->porcento_desconto : ''; ?>">
            </div>
            
        <button type="submit" class="btn btn-success mb-2">Salvar</button>
        <button type="reset" class="btn btn-secondary mb-2">Cancelar</button>
        </div>
    </div>
</form>
</body>
</html>
