<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: rgb(255,0,0);
            background: linear-gradient(90deg, rgba(255,0,0,0.45) 0%, rgba(255,222,0,0.45) 24%, rgba(0,255,29,0.45) 48%, rgba(0,26,255,0.45) 73%, rgba(171,0,255,0.45) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-size: 70pt;
            overflow: hidden;
            flex-direction:column;
        }
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction:column;
        }

    input{
    border: black solid 2px;
    background-color: rgb(0, 0, 0);
    color: white;
    width: 130px;
    height: 45px;
    font-size: 15pt;
    border-radius:20px ;
    cursor: pointer;
}
    
    </style>
</head>
<body>
    
<form method="post">

    <h1>PARABÉNS!!</h1>
    <input type="submit" value="Voltar" name="bt-voltar">

</form>
    <?php

if(isset($_POST['bt-voltar'])){
    header("location:bingo.php")  ;

    }
?>
</body>
</html>