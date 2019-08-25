<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LISTA02</title>
  </head>
  <body>
    <h1>01 LISTA DE EXERCICIOS - PHP BÁSICO</h1>
    <h2>02</h2>
    <?php

    $num = 6;
    if($num % 2 == 0){
       echo "par";
     } else {
       echo "impar";
     }
     echo '<br><hr><br>';

    ?>


    <h2>03</h2>

    <?php

      $pri_num = 28;
      $seg_num = 24;


      if($pri_num % $seg_num == 0){
         echo "São multiplo";
       } else {
         echo "Não são multiplos";
       }
       echo '<br><hr><br>';

     ?>
<h2>04</h2>

  <?php
  $num_int = -10;
if ($num_int < 0) {
  echo "Número negativo";
}elseif ($num_int == 0) {
  echo "Zero";

}elseif ($num_int > 0) {
  echo "Número positivo!";
}

echo '<br><hr><br>';

   ?>

   <h2>05</h2>
<?php
$num = 0;
$num = 80;

if ($num >= 5 && $num <= 20) {
echo "$num Esta entre 5 e 20";
}else{
  echo "Não esta entre 5 e 20";
}
echo '<br><hr><br>';
 ?>

<h2>06</h2>
<?php
$x = 100;
$y = 50;
$resul = 0;

if ($x > $y) {
$resul = $x + $y;
echo "$x + $y é = $resul";

}else {
  $resul = $x * $y;
  echo "$x x $y é = $resul";
}
echo '<br><hr><br>';

 ?>

 <h2>07</h2>
<?php
$p = 8;
$s = 7;


if ($p == $s) {
echo "São iguais";

}elseif ($p > $s) {
  echo "O primeiro é maior que o segundo";

}elseif ($s > $p) {
  echo "O segundo é maior que o primeiro";
}
echo '<br><hr><br>';

 ?>
<h2>08</h2>

<?php
$ano = 1980;

if ($ano % 400 == 0 || $ano % 4 == 0 && $ano % 100 != 0) {
  echo "$ano é um ano bisexto";
}else {
  echo "$ano não é um ano bisexto";
}

 ?>
 echo '<br><hr><br>';

 <h2>09</h2>
 <?php
$numer = 8;
$deno = 0;
if ($deno == 0) {
  echo "ERRO! Divisão por zero";
}else {
  echo "O resultado da divisão é: ";
  echo ($numer / $deno);
}

 ?>

 <h2>10</h2>

 <?php
 $valEmpres = 1800;
 $salario = 900;
 $vezes = 10;

$prest = $valEmpres / $vezes;

if ($prest > 0.20 * $salario ) {
  echo "Emprestimo não pode ser concedido.";

}elseif ($prest == 0.20 * $salario) {
  echo "Emprestimo em analise...";

}elseif ($prest < 0.20 * $salario) {
  echo "Emprestimo pode ser concedido.";
}


  ?>

  </body>
</html>
