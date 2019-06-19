
<div class="container">
    <div class="row">
        <div id="owl-demo" class="owl-theme owl-bruna">
            <?php
            foreach ($todosdepartamentos as $tdep) {
                echo '<div class="col-5">';
                echo '<div class="promocao">';
                echo '<h1>' . $tdep->nome_departamento . '</h1>';
                echo '<hr>';
                if ($categoria->cd_departamento === $todosdepartamentos->id_departamento) {
                    foreach ($categoria as $cat) {
                        echo '<div class="item">';
                        echo '<a href="">'. $cat->nome_categoria . '</a>';
                        echo '</div>';
                    }
                }
                echo ' </div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>
