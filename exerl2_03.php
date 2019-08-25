<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exerl2_02.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exerl2_04.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 02</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 03</h2><br><br>

      </blockquote>


      <h3>
        Implemente um programa que leia dois valores inteiros e verificar se o primeiro é múltiplo do segundo, seu programa deverá exibir a mensagem: “São múltiplos” ou “Não são múltiplos” dependendo da condição.

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
                      <input type="number" step="1" name="pri_num" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Informe o segundo valor</label>
                      <input type="number" step="1" name="seg_num" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-dark">Verificar!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $pri_num = isset($_POST['pri_num']) ? $_POST['pri_num'] : 0;
      $seg_num = isset($_POST['seg_num']) ? $_POST['seg_num'] : 0;


      if($seg_num == 0 || $pri_num == 0){
        echo "*Adicione o valor nos formulários*";

       }elseif($pri_num % $seg_num == 0) {
          echo "São multiplo";
      }else{
         echo "Não são multiplos";
       }
       echo '<br><hr>';

     ?>



      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $pri_num = isset($_POST['pri_num']) ? $_POST['pri_num'] : 0;
          $seg_num = isset($_POST['seg_num']) ? $_POST['seg_num'] : 0;


          if($seg_num == 0 || $pri_num == 0){
            echo "*Adicione o valor nos formulários*";

           }elseif($pri_num % $seg_num == 0) {
              echo "São multiplo";
          }else{
             echo "Não são multiplos";
           }

            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
