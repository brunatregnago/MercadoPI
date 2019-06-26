
<div class="container">
    <div class="promocao">
        <div class="row">
            <div class="col-12">
                <?php
                foreach ($subcategoria as $sub) {
                    echo '<h1>' . $sub->nome_subcategoria . '</h1>';
                    $subcat = $sub->id_subcategoria;
                }
                echo '<hr>';
                echo '<div class="row">';
                echo '<div id="owl-demo" class="owl-carousel owl-theme owl-bruna">';
                foreach ($produto as $po) {
                    if ($po->cd_categoria == $subcat) {
                        echo '<div class="item">';
                        echo '<div class="col-md-12">';
                        echo '<div class="produto">';
                        if ($po->imagem_produto === Null) {
                            echo '<img src="http://127.0.0.1/MercadoPI/uploads/noimage.png"/>';
                        } else {
                            echo '<img src="' . $po->imagem_produto . '"/>';
                        }
                        echo '<h2>' . $po->nome_produto . '</h2>';
                        echo '<h5>' . $po->peso_produto . ' ' . $po->medida . '</h5>';
                        echo '<h4>R$ ' . $po->valor_unitario_produto . ' ' . $po->medida_valor . '</h4>';
                        echo '<center><a href="http://127.0.0.1/MercadoPI/index.php/PagProdutoEspecifico/lista/' . $po->id_produto . '"><button type="submit" class="btn">Visualizar</button></a></center>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }

                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
