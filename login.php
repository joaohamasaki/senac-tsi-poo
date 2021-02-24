<?php
require_once "db.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8455a3d02b.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./page-inicial.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <title> Espaço Hair</title>
</head>

<body>
    <header>
        <section>
            <nav class="navbar navbar-expand-sm">
                <img id="logo" src="./img/logo-icon2.png" alt="Logo">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <div id="myNavbar" class="collapse navbar-collapse">
                    <ul class="navbar-nav mb-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
            </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form id="login" method="post" action="agendamento.html">
                        <div class="row">
                            <div class="form-group col-md-8 mt-5">
                                <h2 class="mb-3" style="text-align:center" id="lblLogin">Acessar</h2>
                                <label for="email" id="lblLoginCampos">Endereço de email</label>
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Seu email">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="senha" id="lblLoginCampos">Senha</label>
                                <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
                            </div>
                            <div class="form-group col-md-8">
                                <input class="botaoLogin" type="submit" class="btn btn-primary" value="Login">
                            </div>
                        </div>
                    </form>
                    <?php
                    require "entrar.php";
                    ?>
                </div>
                <div class="form-group col-md-6 mt-5">
                    <h2 class="mb-3" style="text-align:center" id="lblLogin">Cadastrar Usuário</h2>
                    <form id="login" method="post" action="agendamento.html">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="nome" id="lblLoginCampos">Nome Completo</label>
                                <input type="text" class="form-control" name="nome" placeholder="Digite seu nome e sobrenome" required>
                            </div>
                            <div class=" form-group col-md-12">
                                <label for="telefone" id="lblLoginCampos">Whastapp</label>
                                <input type="text" name="whatsapp" class="form-control" placeholder="Informe seu número">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="email" id="lblLoginCampos">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Digite seu email">
                            </div>


                            <div class=" form-group col-md-6">
                                <label for="senha" id="lblLoginCampos">Senha</label>
                                <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                            </div>
                            <div class=" form-group col-md-6">
                                <label for="confPass" id="lblLoginCampos">Confirme sua Senha</label>
                                <input type="password" name="confPass" class="form-control" placeholder="Digite novamente sua senha">
                            </div>
                            <div class="form-group col-md-6">
                                <input class="botaoLogin" type="submit" name="Cadastrar" class="btn btn-primary" value="Cadastrar">
                            </div>
                            <div class="form-group col-md-6">
                                <input class="botaoLogin" type="submit" class="btn btn-primary" value="Voltar">
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            </section>
            <?php
            require "register.php";
            ?>
        </div>
    </main>
    <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: #E2CFB9;">
            <div class="container">

                <div class="row py-4 d-flex align-items-center">

                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">NOSSAS REDES SOCIAIS</h6>
                    </div>

                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <a class="fb-ic">
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g white-text mr-4"> </i>
                        </a>
                        <a class="ins-ic">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>

                    </div>

                </div>

            </div>
        </div>

        <div class="container text-center text-md-left mt-5">

            <div class="row mt-3">

                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">


                    <h4 class="text-uppercase font-weight-bold lblFooter">Estudio HAIR</h4>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <h6 class="lblFooter">Diariamente: 10am - 10pm</h6>
                    <h6 class="lblFooter">Sabado: 12am - 20pm</h6>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h4 class="text-uppercase font-weight-bold lblFooter">contato</h4>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <h6 class="lblFooter">
                        <i class="fas fa-home mr-3"></i> São Paulo, SP</h6>
                    <h6>
                        <h6 class="lblFooter">
                            <i class="fas fa-home mr-3"></i> Av. Eng. Eusébio Stevaux, 823</h6>
                        <h6 class="lblFooter">
                            <i class="fas fa-envelope mr-3"></i> estudiohair@senac.com.br</h6>
                        <h6 class="lblFooter">
                            <i class="fas fa-phone mr-3"></i> + 11 123456789</h6>
                        <h6 class="lblFooter">
                            <i class="fas fa-print mr-3"></i> + 11 987654321</h6>
                </div>

            </div>
            <div class="footer-copyright text-center py-3 lblFooter">© 2020 Copyright:
                <a href="https://www.sp.senac.br/" style="text-decoration: none;" class="lblFooter"> Senac</a>
            </div>
        </div>
    </footer>
</body>

</html>