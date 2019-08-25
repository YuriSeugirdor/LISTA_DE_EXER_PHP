<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer05.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer07.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 06</h2><br><br>

      </blockquote>


      <h3>

      Escreva um programa que obtêm dois valores inteiros (variáveis A e B) e apresente as operações de adição, subtração, multiplicação e divisão de A por B.

      </h3>
      <br>
      <br>
      <hr>

      <div class="container">
          <fieldset>
              <legend>Calculo de valores</legend>
              <form action="#" method="post">
                  <div class="form-group">
                      <label>Informe o valor de "A"</label>
                      <input type="number" step="1" name="a" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>IInforme o valor de "B"</label>
                      <input type="number" step="1" name="b" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-dark">Calcular!</button>
              </form>
          </fieldset>
      </div>



      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $a = isset($_POST['a']) ? $_POST['a'] : 0;
      $b = isset($_POST['b']) ? $_POST['b'] : 0;
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

      <br>

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $a = isset($_POST['a']) ? $_POST['a'] : 0;
          $b = isset($_POST['b']) ? $_POST['b'] : 0;
          $soma = $a + $b;
          $subt = $a - $b;
          $mulp = $a * $b;
          $divi = $a / $b;

          echo "a + b = $soma
          echo "a - b = $subt
          echo "a * b = $mulp
          echo "a / b = $divi

            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
