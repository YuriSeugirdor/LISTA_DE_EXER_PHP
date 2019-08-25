<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exerl2_04.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exerl2_06.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 02</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 05</h2><br><br>

      </blockquote>


      <h3>

        Escreva um programa para que leia um número e verifique se ele se encontra no intervalo entre 5 e 20.

      </h3>
      <br>
      <br>
      <hr>

      <div class="container">
          <fieldset>
              <legend>Calculo de valores</legend>
              <form action="#" method="post">
                  <div class="form-group">
                      <label>Informe o número</label>
                      <input type="number" step="1" name="num" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-dark">Verificar!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $num = 0;

      $num = isset($_POST['num']) ? $_POST['num'] : 0;


      if ($num >= 5 && $num <= 20) {
      echo "$num Está entre 5 e 20";
      }else{
        echo "Não está entre 5 e 20";
      }
       ?>
       <br>

       <hr>


      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $num = 0;

          $num = isset($_POST['num']) ? $_POST['num'] : 0;


          if ($num >= 5 && $num <= 20) {
          echo "$num Está entre 5 e 20";
          }else{
            echo "Não está entre 5 e 20";
          }



            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
