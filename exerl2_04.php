<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exerl2_03.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exerl2_05.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 02</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 04</h2><br><br>

      </blockquote>


      <h3>

        Desenvolva um programa para ler um valor inteiro e apresentar: <br><br>
          a.	Exibir a mensagem “número negativo” se n < 0.<br>
          b.	Exibir a mensagem “zero” se n = 0.<br>
          c.	Exibir a mensagem “número positivo” se n > 0.<br>

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
                      <input type="number" step="1" name="num_int" class="form-control">
                  </div>

                  <button type="submit" class="btn btn-dark">Verificar!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>

      <?php
      $num_int = isset($_POST['num_int']) ? $_POST['num_int'] : 0;
    if ($num_int < 0) {
      echo "Número negativo";
    }elseif ($num_int == 0) {
      echo "Zero";

    }elseif ($num_int > 0) {
      echo "Número positivo";
    }

    ?>



      <br>
<hr>
      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $num_int = isset($_POST['num_int']) ? $_POST['num_int'] : 0;
        if ($num_int < 0) {
          echo "Número negativo";
        }elseif ($num_int == 0) {
          echo "Zero";

        }elseif ($num_int > 0) {
          echo "Número positivo";
        }

            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
