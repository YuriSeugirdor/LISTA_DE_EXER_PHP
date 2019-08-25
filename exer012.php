<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer011.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer013.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 12</h2><br><br>

      </blockquote>


      <h3>

        Escreva um programa que calcule e mostre o valor da conversão em dólar de um valor lido em real. O programa deverá ler o valor da cotação do dólar e a quantidade de reais.
      </h3>
      <br>
      <br>
      <hr>

      <div class="container">
          <fieldset>
              <legend>Calculo de valores</legend>
              <form action="#" method="post">
                  <div class="form-group">
                      <label>Informe o valor real R$</label>
                      <input type="number" step="1" name="valor_Reais" class="form-control">
                  </div>

                  <button type="submit" class="btn btn-dark">Calcular!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $valor_Reais = isset($_POST['valor_Reais']) ? $_POST['valor_Reais'] : 0;
      $resul_Edoze = $valor_Reais / 4.09;
      echo "R$$valor_Reais em dollar é: U$$";
      echo number_format($resul_Edoze,2);
      echo '<br><hr><br>';
      ?>



      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $valor_Reais = isset($_POST['valor_Reais']) ? $_POST['valor_Reais'] : 0;
          $resul_Edoze = $valor_Reais / 4.09;
          echo "R$$valor_Reais em dollar é: U$$";
          echo number_format($resul_Edoze,2);

            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
