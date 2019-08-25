<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer013.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer015.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 14</h2><br><br>

      </blockquote>


      <h3>
        Escreva um programa para ler o salário mensal de um funcionário e o percentual de reajuste. Calcular e escrever o valor do novo salário.
      </h3>
      <br>
      <br>
      <hr>

      <div class="container">
          <fieldset>
              <legend>Calculo de valores</legend>
              <form action="#" method="post">
                  <div class="form-group">
                      <label>Informe o valor sálario mensal</label>
                      <input type="number" step="1" name="sal_Mensal" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Informe o número do percentual de reajuste</label>
                      <input type="number" step="1" name="porc_Equat" class="form-control">
                  </div>

                  <button type="submit" class="btn btn-dark">Calcular!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $sal_Mensal = isset($_POST['sal_Mensal']) ? $_POST['sal_Mensal'] : 0;
      $porc_Equat = isset($_POST['porc_Equat']) ? $_POST['porc_Equat'] : 0;
      $calc_Equat = $porc_Equat * $sal_Mensal;
      $resul_Equat = $calc_Equat / 100;
      echo "$porc_Equat % de R$$sal_Mensal é : R$$resul_Equat<br>";
      echo "Novo salario é: ";
      echo ($resul_Equat + $sal_Mensal);
      echo '<br><hr><br>';

      ?>

      <br>

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $sal_Mensal = isset($_POST['sal_Mensal']) ? $_POST['sal_Mensal'] : 0;
          $porc_Equat = isset($_POST['porc_Equat']) ? $_POST['porc_Equat'] : 0;
          $calc_Equat = $porc_Equat * $sal_Mensal;
          $resul_Equat = $calc_Equat / 100;
          echo "$porc_Equat % de R$$sal_Mensal é : R$$resul_Equat";
          echo "Novo salario é: ";
          echo ($resul_Equat + $sal_Mensal);


            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
