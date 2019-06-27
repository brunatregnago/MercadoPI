
<div class="container">
    <div class="col-md-12 mt-5">
        <div class="produtoespecifico"  style="border:1px solid #e6e9ea">  
            <div class="row mt-5 mb-5">
                <div class="col-md-3 mt-5"></div>
                <?php
                foreach ($produtopromocao as $pp) {
                    foreach ($produto as $po) {
                        echo '<div class="col-md-3">';
                        if ($po->imagem_produto === Null) {
                            echo '<img style="height:350px; width:350px;" src="http://127.0.0.1/MercadoPI/uploads/noimage.png"/>';
                        } else {
                            echo '<img style="height:350px; width:350px;" src="http://127.0.0.1/MercadoPI/uploads/' . $po->imagem_produto . '"/>';
                        }
                        echo '</div>';
                        echo '<div class="col-md-3 mt-5">';
                        echo '<h1>' . $po->nome_produto . '</h2>';
                        echo '<h4>' . $po->peso_produto . ' ' . $po->medida . '</h4>';
                        if ($pp->cd_produto === $po->id_produto) {
                            $porcento = $pp->porcento_desconto;
                            $valor = $po->valor_unitario_produto;
                            $tt = $valor - (($valor / 100) * $porcento);
                            $total = str_replace(".", ",", $tt);
                            $preco = str_replace(".", ",", $valor);
                            echo '<h6>De R$ ' . $preco . ' por</h6>';
                            echo '<h5>R$ ' . $total . ' ' . $po->medida_valor . '</h5>';
                        } else {
                            $preco = str_replace(".", ",", $po->valor_unitario_produto);
                            echo '<h5>R$ ' . $preco . ' ' . $po->medida_valor . '</h5>';
                        }
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>