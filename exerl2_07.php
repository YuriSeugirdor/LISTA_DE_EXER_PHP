<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exerl2_06.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exerl2_08.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 02</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 07</h2><br><br>

      </blockquote>


      <h3>

        Efetuar a leitura de dois números inteiros e apresentar a relação existente entre eles, ou seja: <br> <br>
a.	O primeiro é maior que o segundo <br>
b.	São iguais <br>
c.	O segundo maior que o primeiro <br>


      </h3>
      <br>
      <br>
      <hr>

      <div class="container">
          <fieldset>
              <legend>Calculo de valores</legend>
              <form action="#" method="post">
                  <div class="form-group">
                      <label>Informe o primeiro valor</label>
                      <input type="number" step="1" name="p" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Informe o segundo valor</label>
                      <input type="number" step="1" name="s" class="form-control">
                  </div>

                  <button type="submit" class="btn btn-dark">Verificar!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $p = isset($_POST['p']) ? $_POST['p'] : 0;
      $s = isset($_POST['s']) ? $_POST['s'] : 0;


      if ($p == $s) {
      echo "São iguais";

      }elseif ($p > $s) {
        echo "O primeiro é maior que o segundo";

      }else {
        echo "O segundo é maior que o primeiro";
      }
      echo '<br><hr><br>';
      ?>



      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $p = isset($_POST['p']) ? $_POST['p'] : 0;
          $s = isset($_POST['s']) ? $_POST['s'] : 0;


          if ($p == $s) {
          echo "São iguais";

          }elseif ($p > $s) {
            echo "O primeiro é maior que o segundo";

          }else {
            echo "O segundo é maior que o primeiro";
          }

            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
