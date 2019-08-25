<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer010.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer012.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 11</h2><br><br>

      </blockquote>


      <h3>
Ler um número inteiro e imprimir seu sucessor e seu antecessor.
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
                      <input type="number" step="1" name="num_Eonze" class="form-control">
                  </div>

                  <button type="submit" class="btn btn-dark">Calcular!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $num_Eonze = isset($_POST['num_Eonze']) ? $_POST['num_Eonze'] : 0;
      $ant_Eonze = $num_Eonze - 1;
      $suc_Eonze = $num_Eonze + 1;
      echo "Numero: $num_Eonze<br>";
      echo "Antecessor: $ant_Eonze<br>";
      echo "Sucessor: $suc_Eonze<br>";

      echo '<br><hr><br>';
      ?>

  

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $num_Eonze = isset($_POST['num_Eonze']) ? $_POST['num_Eonze'] : 0;
          $ant_Eonze = $num_Eonze - 1;
          $suc_Eonze = $num_Eonze + 1;
          echo "Numero: $num_Eonze";
          echo "Antecessor: $ant_Eonze";
          echo "Sucessor: $suc_Eonze";

            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
