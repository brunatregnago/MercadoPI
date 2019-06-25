
<div class="container">
    <div class="promocao">
        <div class="row">
            <div class="col-12">
                <h1></h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div id="owl-demo" class="owl-carousel owl-theme owl-bruna">
                <?php
                foreach ($departamento as $dep) {
                    echo '<div class="item">';
                    echo '<div class="produto">';if ($po->imagem_produto === Null) {
                        echo '<img src="uploads/noimage.png"/>';
                    } else {
                        echo '<img src="' . $po->imagem_produto . '"/>';
                    }
                    echo '<h2>' . $po->nome_produto . '</h2>';
                    echo '<h5>' . $po->peso_produto . ' ' . $po->medida . '</h5>';
                    echo '<h4>R$ ' . $po->valor_unitario_produto . ' ' . $po->medida_valor . '</h4>';
                    echo '<center><a href="http://127.0.0.1/MercadoPI/index.php/PagProdutoEspecifico/lista/'.$po->id_produto.'"><input type="hidden" value="' . $pr->id_produto . '"><button type="submit" class="btn">Visualizar</button></a></center>';
                   echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
