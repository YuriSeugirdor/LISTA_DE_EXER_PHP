<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer01.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer03.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 02</h2><br><br>

      </blockquote>


      <h3>

          Escreva um programa que declare 6 variáveis do tipo caractere e atribua a elas as letras a, l, u, n, o, s. O programa deverá imprimir, usando todas as variáveis declaradas, o seguinte resultado: alunos.
      </h3>
      <br>
      <br>


      <hr>
      <h4>Resultado:</h4>
      <br>
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

      <br>

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $a = "A";
          $l = "L";
          $u = "U";
          $n = "N";
          $o = "O";
          $s = "S";

          echo "$a$l$u$n$o$s";
          echo "$s$o$n$u$l$a";


            <p>?<b>></b></p>

      </pre>
      <hr>
        <!---->

</div>
<?php require './footer.php' ?>
