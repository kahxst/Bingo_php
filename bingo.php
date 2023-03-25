<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form method="post">
        <div class="p1">
        <input type="submit" value="Sortear" name="bt-sortear">
        <input type="submit" value="Limpar" name="bt-limpar">
        </div>
        <div class="p2">
        <input type="submit" value="BINGO!" name="bt-bingo">
        </div>
    </form>



    <?php
    session_start();
    if(!isset($_SESSION['numeros'])){
        $_SESSION['numeros'] = array();
    }

    if(isset($_POST['bt-limpar'])){
        unset($_SESSION['numeros']);

    }
    if(isset($_POST['bt-bingo'])){
    header("location:bingo.act.php")  ;

    }

    if(isset($_POST['bt-sortear'])){
        do{
            $num = rand(1,75);
        }while(in_array($num, $_SESSION['numeros']));

        $tamanho = sizeof($_SESSION['numeros']);
        $_SESSION['numeros'][$tamanho] = $num;
        sort($_SESSION['numeros']);
        // var_dump($_SESSION['numeros']);

    }
    ?>

<div class="box">
    <div class="b um">
        <div class="titulo">
            <h1>B</h1>
        </div>
        <div class="resto">
            <?php
                if(isset($_POST['bt-sortear'])){
                    foreach($_SESSION['numeros'] as $indice){
                        if($indice <=15){
                            echo "<div class='teste indice'>$indice</div>";
                        }
                    }
                }
            ?>
        </div>
    </div>

    <div class="b dois">
        <div class="titulo">
            <h1>I</h1>
        </div>
        <div class="resto">
            <?php
                if(isset($_POST['bt-sortear'])){
                    foreach($_SESSION['numeros'] as $indice){
                        if($indice >15 && $indice<=30){
                            echo "<div class='indice' >$indice</div>";
                        }
                    }
                }
            ?>
        </div>
    </div>

    <div class="b tres">
        <div class="titulo">
            <h1>N</h1>
        </div>
        <div class="resto">
            <?php
                if(isset($_POST['bt-sortear'])){
                    foreach($_SESSION['numeros'] as $indice){
                        if($indice >30 && $indice<=45){
                            echo "<div class='indice' >$indice</div>";
                        }
                    }
                }
            ?>
        </div>
    </div>

    <div class="b quatro">
        <div class="titulo">
            <h1>G</h1>
        </div>
        <div class="resto">
            <?php
                if(isset($_POST['bt-sortear'])){
                    foreach($_SESSION['numeros'] as $indice){
                        if($indice >45 && $indice<=60){
                            echo "<div class='indice' >$indice</div>";
                        }
                    }
                }
            ?>
        </div>
    </div>

    <div class="b cinco">
        <div class="titulo">
            <h1>O</h1>
        </div>
        <div class="resto">
            <?php
                if(isset($_POST['bt-sortear'])){
                    foreach($_SESSION['numeros'] as $indice){
                        if($indice >60 && $indice<=75){
                            echo "<div class='indice' >$indice</div>";
                        }
                    }
                }
            ?>
        </div>
    </div>
</div>
    
</body>
</html>