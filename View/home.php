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
            <a class="btn btn-primary" href="View/add.php" role="button" style="margin-top: 10px">Adicionar</a>
            <?php
            include_once "Controller/homeController.php";
            $a = new homeController;
            $g = $a->getTabela();
            echo '
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Numero</th>
                                <th>Nome</th>
                                <th></th>
                            </tr>
                        </thead>';
            foreach ($g as $row) {
                echo '<tbody>
                        <tr>
                            <td>' . $row['id'] . '</td>
                            <td>' . $row['numero'] . '</td>
                            <td>' . $row['nome'] . '</td>
                            <td><a class="btn btn-primary" href="View/delete.php?variavel=' . $row['id'] . '" role="button" style="margin-top: 0px;background-color:red">Remover</a><a class="btn btn-primary" href="View/update.php?variavel=' . $row['id'] . '" role="button" style="margin-left:10px;">Atualizar</a><a href="https://api.whatsapp.com/send?phone=55929' . $row["numero"] . '"><img style="heigth:110px; width:42px;"src="https://lh3.googleusercontent.com/proxy/C6cfkXt3r4KlkYKz2zyb677MAo3n4w5wa2uxm2JfT4xG7DIZBZHZsQdNhn1xkA_IJ-JwGu_XiCvnEXeSk9IwMOTM5aSmB4mGUifKdPs65GI9_ZlKwPWiONwZDgKvvJYOumHk"></a></td>
                            
                            </tr>
                        
                        </tbody>';
            }
            echo '</table>';
            ?>
        </div>
    </section>

    <footer>
    </footer>
</body>

</html>