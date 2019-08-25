<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exerl2_09.php" class="btn btn-primary" >Página inicial</a><br><br><br>

</div>

<div class="float-right" style="margin-right:10px">

    <a href="exer02.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 01</h2><br><br>

      </blockquote>


      <h3>

        Escreva um programa que declare uma variável inteira e atribua o valor 10 a mesma. Declare uma variável real e atribua para a mesma o valor 20.3. Como saída o programa deverá imprimir, usando as variáveis declaradas, o seguinte resultado:<br>

        a.	O valor inteiro é 10.<br>
        b.	O valor real é 20.3.


      </h3>
      <br>
      <br>


      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $inteiro = 10;
      $real = 20.3;
      echo "Valor inteiro --> $inteiro <br> Valor real --> $real";
      echo '<br>';
      ?>

      <br>
      <hr>

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>
          $inteiro = 10;
          $real = 20.3;
          echo "Valor inteiro --> $inteiro Valor real --> $real";
          echo '<br>
            <p>?<b>></b></p>

      </pre>

      <hr>
        <!---->

</div>
<?php require './footer.php' ?>
