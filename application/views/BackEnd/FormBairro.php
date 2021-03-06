
<form method="POST" action="" class="col-9 mt-5">
        
    <a href="<?= $this->config->base_url() . 'index.php/Bairro/lista'; ?>"><button type="button" class="btn btn-outline-secondary ml-3 mb-4">Lista</button></a>

    <div class="form-group col-md-10">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
        <div class="form-group">
            <input type="hidden" name="id_bairro" value="<?= (isset($bairro)) ? $bairro->id_bairro : ''; ?>">
            
            <label for="cidade">Cidade</label>
            <select id="id_cidade" name="id_cidade" class="form-control">
                <option selected>Cidade</option>
                <?php
                foreach ($cidade as $cid) {
                    echo '<option value="' . $cid->id_cidade . '">' . $cid->nome_cidade . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="nome_bairro" name="nome_bairro" placeholder="" value="<?= (isset($bairro)) ? $bairro->nome_bairro: ''; ?>">
        </div>
        <button type="submit" class="btn btn-success mb-2">Salvar</button>
        <button type="reset" class="btn btn-secondary mb-2">Cancelar</button>
    </div>
</form>
</body>
</html>
