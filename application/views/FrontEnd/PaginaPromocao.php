<div class="container">
    <div class="promocao">
        <div class="row">
            <div class="col-12">
                <h1>Promoções</h1></a>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($produtopromocao as $pp) {
                foreach ($promocao as $po) {
                    echo '<div class="col-md-2">';
                    echo '<div class="item">';
                    echo '<div class="produto">';
                    if ($po->imagem_produto === Null) {
                        echo '<img style="height:170px; width:170px;margin: 5px;" src="http://127.0.0.1/MercadoPI/uploads/noimage.png"/>';
                    } else {
                        echo '<img style="height:170px; width:170px;margin: 5px;" src="http://127.0.0.1/MercadoPI/uploads/' . $po->imagem_produto . '"/>';
                    }
                    echo '<h2>' . $po->nome_produto . '</h2>';
                    echo '<h5>' . $po->peso_produto . ' ' . $po->medida . '</h5>';
                    if ($pp->cd_produto === $po->id_produto) {
                        $porcento = $pp->porcento_desconto;
                        $valor = $po->valor_unitario_produto;
                        $tt = $valor - (($valor / 100) * $porcento);
                        $total = str_replace(".", ",", $tt);
                        $preco = str_replace(".", ",", $valor);
                        echo '<h6 style="color:#92908F; text-align: center;">De R$ ' . $preco . ' por</h6>';
                        echo '<h4>R$ ' . $total . ' ' . $po->medida_valor . '</h4>';
                    } else {
                        $preco = str_replace(".", ",", $po->valor_unitario_produto);
                        echo '<h4>R$ ' . $preco . ' ' . $po->medida_valor . '</h4>';
                    }
                    echo '<center><a href="http://127.0.0.1/MercadoPI/index.php/PagProdutoEspecifico/lista/' . $po->id_produto . '"><button type="submit" class="btn">Visualizar</button></a></center>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
