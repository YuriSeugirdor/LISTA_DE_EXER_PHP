<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="index.php" class="btn btn-primary" >Página inicial
</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exerl2_02.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 02</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 01</h2><br><br>

      </blockquote>


      <h3>
Desenvolva um programa para efetuar a leitura de um valor inteiro positivo ou negativo e apresentar o número lido como sendo um valor positivo, ou seja, o programa deverá apresentar o módulo de um número fornecido.

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
                      <input type="number" step="1" name="valor01" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-dark">Verificar!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $valor01 = isset($_POST['valor01']) ? $_POST['valor01'] : 0;

      if($valor01 < 0) {
          echo "O modulo do {$valor01} é: " . ($valor01 * -1);
      } else {
          echo "O modulo do {$valor01} é: " . $valor01;
      }
      ?>
      <br>


      <br>
      <hr>
      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>
          $valor01 = isset($_POST['valor01']) ? $_POST['valor01'] : 0;

          if($valor01 < 0) {
              echo "O modulo do {$valor01} é: " . ($valor01 * -1);
          } else {
              echo "O modulo do {$valor01} é: " . $valor01;
          }
            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
