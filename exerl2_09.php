<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exerl2_08.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exerl2_10.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 02</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 09</h2><br><br>

      </blockquote>


      <h3>

        Desenvolva um programa para ler o numerador e denominador de uma divisão e realiza-la verificando a “divisão por zero”.
      </h3>
      <br>
      <br>
      <hr>

      <div class="container">
          <fieldset>
              <legend>Calculo de valores</legend>
              <form action="#" method="post">
                  <div class="form-group">
                      <label>Numerador</label>
                      <input type="number" step="1" name="numer" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Denominador</label>
                      <input type="number" step="1" name="deno" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-dark">Verificar!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $numer = isset($_POST['numer']) ? $_POST['numer'] : 0;
      $deno = isset($_POST['deno']) ? $_POST['deno'] : 0;
      if ($deno == 0) {
        echo "ERRO! Divisão por zero";
      }else {
        echo "O resultado da divisão é: ";
        $divs = $numer / $deno;
        echo number_format($divs,2);
      }
      ?>
      <br>

      <br>
<hr>
      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $numer = isset($_POST['numer']) ? $_POST['numer'] : 0;
          $deno = isset($_POST['deno']) ? $_POST['deno'] : 0;
          if ($deno == 0) {
            echo "ERRO! Divisão por zero";
          }else {
            echo "O resultado da divisão é: ";
            $divs = $numer / $deno;
            echo number_format($divs,2);
          }
            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
