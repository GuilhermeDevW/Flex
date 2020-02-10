<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>flex</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php include_once "head.php" ?>
    <section>
        <div class="container">
            <?php
            $i = $_GET['variavel'];
            include "..\Controller\homeController.php";
            $a = new homeController;
            $t = $a->getU($i);
            foreach ($t as $row) {
            }
            ?>
            <div class="container">
                <form method="POST">
                    <div class="form-group row" style="margin-top: 40px">
                        <label for="inputNome" class="col-sm-1 col-form-label">Nome</label>
                        <div class="col-sm-5">
                            <input type="text" name="nome" value=<?php echo $row['nome'] ?> class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="form-group row" style="margin-top: 40px">
                        <label for="inputTelefone" class="col-sm-1 col-form-label">Telefone</label>
                        <div class="col-sm-5">
                            <input type="number" name="telefone" value=<?php echo $row['numero'] ?> class="form-control" id="inputTelefone">
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Atualizar">
                    <a href="http://localhost/flex/" class="btn btn-secondary " role="button" aria-pressed="true">Retornar</a>
                </form>
            </div>
    </section>
    <footer>
    </footer>
</body>
<?php

@$telefone = $_POST['telefone'];
@$nome = $_POST['nome'];
$a->updateContato($i, $telefone, $nome);

?>

</html>