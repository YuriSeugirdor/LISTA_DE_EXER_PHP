<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exerl2_07.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exerl2_09.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 02</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 08</h2><br><br>

      </blockquote>


      <h3>
Um ano é bissexto se for divisível por 4 e não for divisível por 100. Também são bissextos os divisíveis por 400. Desenvolva um programa para determinar se um ano informado é bissexto.
      </h3>
      <br>
      <br>
      <hr>
      <div class="container">
          <fieldset>
              <legend>Calculo de valores</legend>
              <form action="#" method="post">
                  <div class="form-group">
                      <label>Informe o Ano</label>
                      <input type="number" step="1" name="ano" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-dark">Verificar!</button>
              </form>
          </fieldset>
      </div>

      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $ano = isset($_POST['ano']) ? $_POST['ano'] : 0;

      if ($ano % 400 == 0 || $ano % 4 == 0 && $ano % 100 != 0) {
        echo "$ano é um ano bisexto";
      }else {
        echo "$ano não é um ano bisexto";
      }
      ?>

      <br>
      <br>
      <hr>

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $ano = isset($_POST['ano']) ? $_POST['ano'] : 0;

          if ($ano % 400 == 0 || $ano % 4 == 0 && $ano % 100 != 0) {
            echo "$ano é um ano bisexto";
          }else {
            echo "$ano não é um ano bisexto";
          }
            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
