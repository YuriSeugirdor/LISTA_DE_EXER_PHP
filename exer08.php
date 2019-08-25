<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer07.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer09.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 08</h2><br><br>

      </blockquote>


      <h3>

      Efetuar a leitura de um número inteiro e apresentar o resultado do cubo deste número.
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
                      <input type="number" step="1" name="  num_Eoito" class="form-control">
                  </div>

                  <button type="submit" class="btn btn-dark">Calcular!</button>
              </form>
          </fieldset>
      </div>

      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php


             $num_Eoito = isset($_POST['num_Eoito']) ? $_POST['num_Eoito'] : 0;
             $aux_Eoito = $num_Eoito;

             $elevado_Eoito = 3;

             echo "$num_Eoito elevado a $elevado_Eoito é ";


             for ($i_Eoito = 1; $i_Eoito < $elevado_Eoito; $i_Eoito++) {
             $num_Eoito = $aux_Eoito * $num_Eoito;

             }



             echo $num_Eoito;
             echo '<br><hr><br>';

      ?>

      <br>

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $num_Eoito = isset($_POST['num_Eoito']) ? $_POST['num_Eoito'] : 0;
          $aux_Eoito = $num_Eoito;

          $elevado_Eoito = 3;

          echo "$num_Eoito elevado a $elevado_Eoito é ";


          for ($i_Eoito = 1; $i_Eoito < $elevado_Eoito; $i_Eoito++) {
          $num_Eoito = $aux_Eoito * $num_Eoito;

          }


          echo $num_Eoito;


            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
