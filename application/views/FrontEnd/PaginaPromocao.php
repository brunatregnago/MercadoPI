<div class="col-md-10">
    <div class="painel_produto pt-5 pb-5">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">  
                <div class="col-md-12">
                    <div class="produto"><?php
                        foreach ($promocao as $po) {
                            echo '<img src="' . $po->imagem_produto . '"/>';
                            echo '<h2>' . $po->nome_produto . '</h2>';
                            echo '<h5>' . $po->peso_produto . ' ' . $po->cd_unidade_medida . '</h5>';
                            echo '<h4>R$ ' . $po->valor_unitario_produto . ' ' . $po->cd_medida_valor . '</h4>';
                            echo '<center><button type="button" class="btn" data-toggle="button" aria-pressed="false" autocomplete="off">Visualizar</button></center>';
                        }
                        ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
