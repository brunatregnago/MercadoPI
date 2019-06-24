
<form action="" class="col-md-8 mt-5" method="POST">
    
    <a href="<?= $this->config->base_url() . 'index.php/Pais/lista'; ?>"><button type="button" class="btn btn-outline-secondary ml-3 mb-4">Lista</button></a>

    <div class="form-group col-md-10">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
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
