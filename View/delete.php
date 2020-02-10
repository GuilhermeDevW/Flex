<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>flex</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    </nav>
    <section>
        <div class="container">
            <?php echo $_GET['variavel'];
              $i=$_GET['variavel'];
              include "..\Controller\homeController.php";
              $a=new homeController;
              $a->deleteContato($i);
              header('Location:http://localhost/flex/');
            ?>
         </div>
    </section>

    <footer>
    </footer>
</body>
<?php
    
    
?>
</html>