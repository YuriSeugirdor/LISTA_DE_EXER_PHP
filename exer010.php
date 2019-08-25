<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer09.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer011.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 10</h2><br><br>

      </blockquote>


      <h3>

      Efetuar a leitura de um número inteiro e imprimir o resto da divisão (%) deste número por 2.
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
                      <input type="number" step="1" name="  num_Edez" class="form-control">
                  </div>

                  <button type="submit" class="btn btn-dark">Calcular!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $num_Edez = isset($_POST['num_Edez']) ? $_POST['num_Edez'] : 0;
      echo "O resto da divisão é ";
      echo ($num_Edez % 2);
      echo '<br><hr><br>';
      ?>

      <br>

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $num_Edez = isset($_POST['num_Edez']) ? $_POST['num_Edez'] : 0;
          echo "O resto da divisão é ";
          echo ($num_Edez % 2);
  

            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
