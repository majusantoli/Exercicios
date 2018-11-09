<!DOCTYPE HTML>
<!-- 
    *whampserver
    https://profprogramacao.blogspot.com/2016/07/exercicios-resolvidos-instituto-federal.html 

    Construir um algoritmo que leia 2 números e efetue a adição.
    Caso o valor somado seja maior que 20, este deverá ser apresentado somando-se 8;
    Caso o valor seja menor ou igual a 20, este deverá ser apresentado subtraindo 5.
-->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
    </head>
<body>
    <form action="Teste.php" method="post">
      <input type="number" name="pro1" value="<?php if(isset($primeira)){echo $primeira;}else{die;} ?>"><br>
      <input type="number"  name="pro2" value="<?php if(isset($segunda)){echo $segunda;}else{die;}?>"><br>
    <input type="submit" value="Calcular">
    </form>

<?php
    if(isset($_POST['pro1'])){
    $primeira = $_POST['pro1']; 
    }else{echo '';}
    if(isset($_POST['pro2'])){
    $segunda = $_POST['pro2'];
    }else{echo '';}
?>

<?php
    $soma = $primeira + $segunda;
    if($primeira + $segunda >20){
    echo $soma + 8;
    }else{
     echo $soma - 5;
    }﻿
?>
</body>
</html>



