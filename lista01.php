<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LISTA 01</title>
  </head>
  <body>
<h1>01 LISTA DE EXERCICIOS - PHP BÁSICO</h1>
<hr>
    <h2>01</h2>
    <?php
        $inteiro = 10;
        $real = 20.3;
        echo "Valor inteiro --> $inteiro <br> Valor real --> $real";
        echo '<br><hr><br>';
  ?>
<h2>02</h2>
  <?php
    $a = "A";
    $l = "L";
    $u = "U";
    $n = "N";
    $o = "O";
    $s = "S";

    echo "$a$l$u$n$o$s<br>";
    echo "$s$o$n$u$l$a";
    echo '<br><hr><br>';
    ?>

    <h2>03</h2>

    <?php
    $assinatura = 32;
    $impulso = 0.09;
    $chamCell = 0.35;

    $excedido = 254 - 90;

    $conta = $assinatura + ($excedido * $impulso) + (23 * $chamCell);

    echo $conta;
    echo '<br><hr><br>';

   ?>
       <h2>04</h2>
       <?php
        $notaum = 11;
        $notadois = 19;
        $notatres = 7;
        $media = ($notaum+$notadois+$notatres)/3;
        echo "$media";
        echo '<br><hr><br>';
        ?>
        <h2>05</h2>
        <?php
        $pri_nota = 8*1;
        $seg_nota = 7.5*2;
        $ter_nota = 10*3;
        $qua_nota = 9*4;
        $conta_um = ($pri_nota + $seg_nota + $ter_nota + $qua_nota);
        $conta_dois = (1+2+3+4);
        echo ($conta_um) / $conta_dois;
        echo '<br><hr><br>';

         ?>
         <h2>06</h2>
         <?php

         $a = 30;
         $b = 10;
         $soma = $a + $b;
         $subt = $a - $b;
         $mulp = $a * $b;
         $divi = $a / $b;
         echo "a + b = $soma <br>";
         echo "a - b = $subt <br>";
         echo "a * b = $mulp <br>";
         echo "a / b = $divi <br>";
         echo '<br><hr><br>';
         ?>

         <h2>07</h2>
         <?php

         // O "_Esete" variavel do exercicio 07
         // caso eu repta a variavel

        $num_Esete = 10;
        $aux_Esete = $num_Esete;

        $elevado_Esete = 2;

        echo "$num_Esete elevado a $elevado_Esete é ";


        for ($i_Esete = 1; $i_Esete < $elevado_Esete; $i_Esete++) {
        $num_Esete = $aux_Esete * $num_Esete;

        }



        echo $num_Esete;
        echo '<br><hr><br>';

        ?>


        <!--EXERCICIO 08-->
        <h2>08</h2>
        <?php



       $num_Eoito = 10;
       $aux_Eoito = $num_Eoito;

       $elevado_Eoito = 3;

       echo "$num_Eoito elevado a $elevado_Eoito é ";


       for ($i_Eoito = 1; $i_Eoito < $elevado_Eoito; $i_Eoito++) {
       $num_Eoito = $aux_Eoito * $num_Eoito;

       }



       echo $num_Eoito;
       echo '<br><hr><br>';

       ?>
       <!--EXERCICIO 09-->
       <h2>09</h2>
       <?php
       $primNum = 30;
       $segNum = 17;
       $div_Enove = $primNum /$segNum;
       echo "Resultado real da divisão: $div_Enove<br>";

       $num_Enove = $primNum;
       $aux_Enove = $num_Enove;
       $elevado_Enove = 2;
       for ($i_Enove = 1; $i_Enove < $elevado_Enove; $i_Enove++) {
       $num_Enove = $aux_Enove* $num_Enove;

       }

      echo "Quadrado do primeiro numero: $num_Enove<br>";


      $num_Enove = 0;
      $elevado_Enove = 0;
      $aux_Enove = 0;

      $num_Enove = $segNum;//17
      $aux_Enove = $num_Enove;
      $elevado_Enove = 3;
      for ($i_Enove = 1; $i_Enove < $elevado_Enove; $i_Enove++) {
      $num_Enove = $aux_Enove * $num_Enove;

      }
      echo "Cubo do segundo numero: $num_Enove<br>";
      echo '<br><hr><br>';
      ?>


      <h2>10</h2>
      <?php
      $num_Edez = 15;
      echo "O resto da divisão é ";
      echo ($num_Edez % 2);
      echo '<br><hr><br>';

      ?>

      <h2>11</h2>
      <?php
      $num_Eonze = 5;
      $ant_Eonze = $num_Eonze - 1;
      $suc_Eonze = $num_Eonze + 1;
      echo "Antecessor: $ant_Eonze<br>";
      echo "Sucessor: $suc_Eonze<br>";

      echo '<br><hr><br>';

       ?>

       <h2>12</h2>

       <?php
       $valor_Reais = 10;
       $resul_Edoze = $valor_Reais / 4.09;
       echo "R$$valor_Reais em dollar é: U$$";
       echo number_format($resul_Edoze,2);
       echo '<br><hr><br>';


        ?>

      <h2>13</h2>
      <?php
      $num_Etreze = 30;
      $rea_Etreze =  $num_Etreze * 0.10;
      $resul_Etreze =  $rea_Etreze + $num_Etreze;
      echo "Resultado do reajuste é: $resul_Etreze";
      echo '<br><hr><br>';

       ?>
       <h2>14</h2>
       <?php
       $sal_Mensal = 500;
       $porc_Equat = 35;
       $calc_Equat = $porc_Equat * $sal_Mensal;
       $resul_Equat = $calc_Equat / 100;
       echo "$porc_Equat % de R$$sal_Mensal é : R$$resul_Equat<br>";
       echo "Novo salario é: ";
       echo ($resul_Equat + $sal_Mensal);
       echo '<br><hr><br>';

        ?>
        <h2>15</h2>
        <?php




         ?>




  </body>
</html>
