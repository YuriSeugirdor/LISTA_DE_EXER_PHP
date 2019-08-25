<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer06.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer08.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 07</h2><br><br>

      </blockquote>


      <h3>

        Efetuar a leitura de um número inteiro e apresentar o resultado do quadrado deste número.
      </h3>
      <br>
      <br>
      <hr>

      <div class="container">
          <fieldset>
              <legend>Calculo de valores</legend>
              <form action="#" method="post">
                  <div class="form-group">
                      <label>Informe um numero inteiro</label>
                      <input type="number" step="1" name="  num_Esete" class="form-control">
                  </div>

                  <button type="submit" class="btn btn-dark">Calcular!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $num_Esete = isset($_POST['num_Esete']) ? $_POST['num_Esete'] : 0;
      $aux_Esete = $num_Esete;

      $elevado_Esete = 2;

      echo "$num_Esete elevado a $elevado_Esete é ";


      for ($i_Esete = 1; $i_Esete < $elevado_Esete; $i_Esete++) {
      $num_Esete = $aux_Esete * $num_Esete;

      }

      echo $num_Esete;
      echo '<br><hr><br>';
      ?>

      <br>

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $num_Esete = isset($_POST['num_Esete']) ? $_POST['num_Esete'] : 0;
          $aux_Esete = $num_Esete;

          $elevado_Esete = 2;

          echo "$num_Esete elevado a $elevado_Esete é ";


          for ($i_Esete = 1; $i_Esete < $elevado_Esete; $i_Esete++) {
          $num_Esete = $aux_Esete * $num_Esete;

          }

          echo $num_Esete;

            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
