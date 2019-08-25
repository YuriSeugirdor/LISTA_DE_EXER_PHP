<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exerl2_01.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exerl2_03.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 02</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 02</h2><br><br>

      </blockquote>


      <h3>

        Elabore um algoritmo para ler um valor inteiro e informar, através de uma mensagem se este valor é um número par ou ímpar.

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
      $num = isset($_POST['num']) ? $_POST['num'] : 0;
      echo "O número $num é: ";
      if($num % 2 == 0){
         echo "PAR";
       } else {
         echo "IMPAR";
       }


      ?>


<hr>
      <br>

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $num = isset($_POST['num']) ? $_POST['num'] : 0;
          echo "O número $num é: ";
          if($num % 2 == 0){
             echo "PAR";
           } else {
             echo "IMPAR";
           }

            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
