<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Administrador</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="card mx-auto" style="max-width: 45%; max-height: 90%;">
                    <div class="card-header">
                        <i class="fas fa-user"></i> Login Administrador
                    </div>
                    <div class="card-body">
                        <?php
                        $mensagem = $this->session->flashdata('mensagem');
                        echo (isset($mensagem) ? '<div class="alert alert-warning" role="alert">' . $mensagem . '</div>' : '');
                        ?>     
                        <form action="<?= base_url('Usuario/login') ?>" method="POST" name="login">
                            <div class="form-group">
                                <label for="nome_usuario">Usuário</label> 
                                <input type="text" class="form-control" name="nome_usuario" id="nome_usuario">
                            </div>
                            <div class="form-group">
                                <label for="senha_usuario">Senha</label>
                                <input type="password" class="form-control" name="senha_usuario" id="senha_usuario">
                            </div>

                            <button type="submit" class="btn btn-success mr-2">
                                <i class="fas fa-check"></i> Acessar
                            </button>
                        </form>
                    </div>
                </div>
        </div>
    </body>
</html>