<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>flex</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <section>
        <div class="container">
            
        <form   method="POST">
            <div class="form-group row" style="margin-top: 40px">
                <label for="inputNome" class="col-sm-1 col-form-label">Nome</label>
                <div class="col-sm-5">
                <input type="text" name="nome" class="form-control" id="inputPassword">
                </div>
             </div>

             <div class="form-group row" style="margin-top: 40px">
                <label for="inputTelefone" class="col-sm-1 col-form-label">Telefone</label>
                <div class="col-sm-5">
                <input type="number" name="telefone" class="form-control" id="inputTelefone">
                </div>
             </div>

             <input class="btn btn-primary" type="submit" value="Enviar">
             <a href="http://localhost/flex/" class="btn btn-secondary " role="button" aria-pressed="true">Retornar</a>
        </form>
        </div>
         
    </section>

    <footer>
    </footer>
</body>
<?php
    @$telefone=$_POST['telefone'];
    @$nome=$_POST['nome'];
    include "..\Controller\homeController.php";
    $a=new homeController;
     $a->addContato($telefone,$nome);
    
?>
</html>