<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>NorthWind</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.7-dist/js/npm.js" type="text/javascript"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     
        <style>
            body {
                padding-top: 50px;
            }

            .principal {
                padding: 40px 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class= "container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">NorthWind</a>
                </div>
                <div> 
                    <ul class="nav navbar-nav"> 
                        <li><a href ="cadastrar_funcionario.php">Cadastrar Funcionários</a></li>
                        <li><a href ="clientes.php">Clientes</a></li>
                        <li><a href ="funcionarios.php">Funcionarios</a></li>
                        <li><a href ="funcionarios_territorios.php">Local Funcionarios</a></li>
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href ="#">Produtos
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href ="categorias.php">Categorias</a></li>
                            </ul>
                        </li>
                        <li><a href ="territorios.php">Territórios</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href ="#">Transportadoras
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href ="ordens.php">Ordens</a></li>
                                <li><a href ="fornecedores.php">Fornecedores</a></li>
                            </ul>
                        </li>
                        <li><a href ="regiao.php">Região</a></li>
                             
                    </ul> 
                </div>   
            </div>
        </div>
        <div class="container-fluid text-center">
            <div class="principal">