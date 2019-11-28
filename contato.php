<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Informações</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <!-- NavBar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">

                <a class="navbar-brand" href="#"><img src="img/logo.png" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sabores.html">Sabores</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contato.php">Seja nosso cliente</a>
                        </li>
                    </ul>
                    <a class="btn btn-outline-danger" href="painel.php">Painel de usuários</a>
                </div>
            </div>
        </nav>
        <div id="carouselSite" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSite" data-slide-to="1"></li>
                <li data-target="#casouselSite" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
        
                <div class="carousel-item active">
                    <img src="img/BackgroundS/background.jpg" class="img-fluid d-block">
                </div>
        
                <div class="carousel-item">
                    <img src="img/BackgroundS/background01.jpg" class="img-fluid d-block">
                </div>
        
                <div class="carousel-item">
                    <img src="img/BackgroundS/background03.jpg" class="img-fluid d-block">
                </div>
            </div>
        
            <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
        <!-- Formulario -->
        <div id="formulario" class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4"><i class="fa fa-wpforms"></i> Formulário</h1>

                </div>

            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-sm-12 col-md-10 col-lg-8">
                    <form action="salvar.php" method="POST">
                        <div class="form-row">

                            <div class="form-group col-sm-12">
                                <label for="inputNome">Nome</label>
                                <input type="text" class="form-control" id="inputNome" name="nome_usuario" placeholder="Informe seu nome">

                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-sm-12">
                                <label for="inputEnde">Endereço</label>
                                <input type="text" class="form-control" id="inputEnde" name="endereco_usuario" placeholder="Informe seu endereço">

                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-sm-8">
                                <label for="inputCidade">Cidade</label>
                                <input type="text" class="form-control" id="inputCidade" name="cidade_usuario" placeholder="Informe sua cidade">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="inputCep">Telefone</label>
                                <input type="text" class="form-control" id="inputCep" name="fone_usuario" placeholder="Telefone">
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-sm-12">
                                <label for="inputEmail">E-mail</label>
                                <input type="email" class="form-control" id="inputEmail" name="email_usuario" placeholder="Informe seu e-mail">

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <div class="form-check">
                                    <label class="form-check-label" for="">
                                        <input class="form-check-input" type="checkbox"> Desejo receber novidades por e-mail
                                    </label>

                                </div>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-dark">Enviar</button>
                                <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" dataplacement="right"
                                data-trigger="focus" title="Texto de ajuda" data-content="Preencha os campos do formulário com suas informações.">Ajuda</a>
                            </div>

                        </div>

                    </form>
                </div>

            </div>
        <!-- Rodape -->
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3"><hr></div>
            
                <div class="col-sm-6"> 
                    <h3>Menu</h3>
                    <div class="list-group text-center">
                        <a href="index.html" class="list-group-item list-group-item-action">Home</a>
                        <a href="sabores.html" class="list-group-item list-group-item-action">Sabores</a>
                        <a href="painel.php" class="list-group-item list-group-item-action">Painel de usuários</a>
            
                    </div>
                </div>
            
                <div class="col-sm-6">
                    <h3>Redes Sociais</h3>
            
                    <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                        <a class="btn btn-outline-primary" href="https://pt-br.facebook.com/Coca-Cola/">Facebook</a>
                        <a class="btn btn-outline-primary" href="https://www.instagram.com/cocacola_br/?hl=pt-br">Instagram</a>
                        <a class="btn btn-outline-info" href="https://twitter.com/CocaCola_Br?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a>
            
                    </div>
                </div>
            
                <div class="col-12 mt-5">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">O sucesso não é garantido, mas o fracasso é certo se você não estiver 
                            emocionalmente envolvido em seu trabalho.</p>
                            <footer class="blockquote-footer">Biz Stone <cite title="Source Title">Fundador do Twitter</cite></footer>
                    </blockquote>
            
                </div>
            </div>
        </div>

        <?php
            include_once("conexao.php")
        ?>
        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
            $(function(){
                $('[data-toggle="popover"]').popover()
            })
        </script>
    </body>
</html>