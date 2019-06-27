<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mercado</title>  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link href="<?= $this->config->base_url() ?>css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $this->config->base_url() ?>css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <link href="<?= $this->config->base_url() ?>css/Style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
                <div class="col-md-12 mt-5">
                        <div class="produtoespecifico">  
                            <div class="row">
                                <div class="col-md-3"></div>
                            <?php
                            foreach ($produto as $po) {
                                echo '<div class="col-md-3">';
                                if ($po->imagem_produto === Null) {
                                    echo '<img style="height:300px; width:300px;" src="http://127.0.0.1/MercadoPI/uploads/noimage.png"/>';
                                } else {
                                    echo '<img style="height:300px; width:300px;" src="http://127.0.0.1/MercadoPI/uploads/' . $po->imagem_produto . '"/>';
                                }
                                echo '</div>';
                                echo '<div class="col-md-3">';
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
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="<?= $this->config->base_url() ?>js/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        responsiveClass: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
</script>

</body>
</html>