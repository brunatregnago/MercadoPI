<div class="container">
    <div class="col-md-12">
        <div class="painel_produto pt-5 pb-5 mt-4">
            <div class="row">
                <?php
                foreach ($promocao as $po) {
                    echo '<div class="item col-md-2">';
                    echo '<div class="produto">';
                    if ($po->imagem_produto === Null) {
                        echo '<img src="http://127.0.0.1/MercadoPI/uploads/noimage.png"/>';
                    } else {
                        echo '<img src="' . $po->imagem_produto . '"/>';
                    }
                    echo '<h2>' . $po->nome_produto . '</h2>';
                    echo '<h5>' . $po->peso_produto . ' ' . $po->medida . '</h5>';
                    echo '<h4>R$ ' . $po->valor_unitario_produto . ' ' . $po->medida_valor . '</h4>';
                    echo '<center><a href="http://127.0.0.1/MercadoPI/index.php/PagProdutoEspecifico/lista/'.$po->id_produto.'"><button type="submit" class="btn">Visualizar</button></a></center>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
