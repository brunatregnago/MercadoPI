<div class="menu">
    <nav class="navbar navbar-expand-lg mt-3 bg-success navbar-light text-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li><a href="<?= $this->config->base_url() . 'index.php/PagPromocao/lista' ?>">Promoções</a></li>
                <?php
                foreach ($menu as $m) {
                    echo '<li><a href="'. $this->config->base_url() . 'index.php/PagDepartamento/lista/'.$m->id_departamento  .'">' . $m->nome_departamento . '</a></li>';
                }
                ?>
                <li><a href="<?= $this->config->base_url() . 'index.php/PagTodosDepartamentos/lista'?>">Todos Departamentos</a></li>
            </ul>
        </div>
    </nav>
</div>