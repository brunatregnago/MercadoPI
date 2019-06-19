<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light text-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li><a href="">Promoções</a></li>
                    <?php
                    foreach ($departamento as $dep) {
                        echo '<li><a href="">' . $dep->nome_departamento . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</div>