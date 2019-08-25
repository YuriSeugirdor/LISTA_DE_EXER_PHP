<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer012.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer014.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 13</h2><br><br>

      </blockquote>


      <h3>

          Ler um valor e imprimir esse valor com reajuste de 10%.

      </h3>
      <br>
      <br>
      <hr>

      <div class="container">
          <fieldset>
              <legend>Calculo de valores</legend>
              <form action="#" method="post">
                  <div class="form-group">
                      <label>Informe o valor</label>
                      <input type="number" step="1" name="num_Etreze" class="form-control">
                  </div>

                  <button type="submit" class="btn btn-dark">Calcular!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $num_Etreze = isset($_POST['num_Etreze']) ? $_POST['num_Etreze'] : 0;
      $rea_Etreze =  $num_Etreze * 0.10;
      $resul_Etreze =  $rea_Etreze + $num_Etreze;
      echo "Número: $num_Etreze<br>";
      echo "Resultado com o reajuste de 10% é: $resul_Etreze";
      echo '<br><hr><br>';
      ?>

      <br>

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $num_Etreze = isset($_POST['num_Etreze']) ? $_POST['num_Etreze'] : 0;
          $rea_Etreze =  $num_Etreze * 0.10;
          $resul_Etreze =  $rea_Etreze + $num_Etreze;
          echo "Numero: $num_Etreze";
          echo "Resultado com o reajuste de 10% é: $resul_Etreze";


            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
