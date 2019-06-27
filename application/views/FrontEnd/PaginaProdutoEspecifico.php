
<div class="container">
    <div class="col-md-12 mt-5">
        <div class="produtoespecifico"  style="border:1px solid #e6e9ea">  
            <div class="row mt-5 mb-5">
                <div class="col-md-3 mt-5"></div>
                <?php
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
                    echo '<h5>R$ ' . $po->valor_unitario_produto . ' ' . $po->medida_valor . '</h5>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>