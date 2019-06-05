<div class="container">
    <div class=" table-responsive mt-5">
        <table class="table table-striped table-bordered" id="table" style="text-align: center;">
            <thead>
                <tr>
                    <th> Descrição </th>
                    <th> Data início </th>
                    <th> Data fim </th>
                    <th> Porcentual de desconto </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($promocao as $pmc) {
                    echo '<tr>';
                    echo '<td>' . $pmc->nome_promocao . '</td>';
                    echo '<td>' . $pmc->inicio_promocao . '</td>';
                    echo '<td>' . $pmc->fim_promocao . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . 'index.php/Prova/alterar/'
                    . $pmc->id_promocao . '"><i class="fas fa-edit"></i></a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Prova/deletar/'
                    . $pmc->id_promocao . '"><i class="fas fa-trash"></i></a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
</div>