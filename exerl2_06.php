<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exerl2_05.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exerl2_07.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 02</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 06</h2><br><br>

      </blockquote>


      <h3>

        Desenvolva um programa para ler dois valores inteiros e apresentar a adição destes valores quando o x > y, caso contrário, deve ser efetuado a multiplicação deles.
      </h3>
      <br>
      <br>
      <hr>

      <div class="container">
          <fieldset>
              <legend>Calculo de valores</legend>
              <form action="#" method="post">
                  <div class="form-group">
                      <label>Informe o valor "X"</label>
                      <input type="number" step="1" name="x" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Informe o valor "Y"</label>
                      <input type="number" step="1" name="y" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-dark">Verificar!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $x = isset($_POST['x']) ? $_POST['x'] : 0;
      $y = isset($_POST['y']) ? $_POST['y'] : 0;
      $resul = 0;


      echo "Valor de X: $x <br>";
      echo "Valor de Y: $y <br>";

      if ($x > $y) {
      $resul = $x + $y;

      echo "$x + $y é = $resul";

      }else {
        $resul = $x * $y;

        echo "$x x $y é = $resul";
      }
      echo '<br><hr>';

      ?>



      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $x = isset($_POST['x']) ? $_POST['x'] : 0;
          $y = isset($_POST['y']) ? $_POST['y'] : 0;
          $resul = 0;


          echo "Valor de X: $x ";
          echo "Valor de Y: $y ";

          if ($x > $y) {
          $resul = $x + $y;

          echo "$x + $y é = $resul";

          }else {
            $resul = $x * $y;

            echo "$x x $y é = $resul";
          }

            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
