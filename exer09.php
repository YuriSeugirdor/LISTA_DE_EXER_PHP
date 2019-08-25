<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer08.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer010.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 09</h2><br><br>

      </blockquote>


      <h3>

        Ler dois números inteiros informados pelo usuário, dividi-los, apresentar o resultado da divisão real desses números, o quadrado do primeiro número e o cubo do segundo número.

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
                      <input type="number" step="1" name="primNum" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Informe o segundo valor</label>
                      <input type="number" step="1" name="segNum" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-dark">Calcular!</button>
              </form>
          </fieldset>
      </div>

      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $primNum = isset($_POST['primNum']) ? $_POST['primNum'] : 0;
      $segNum = isset($_POST['segNum']) ? $_POST['segNum'] : 0;
      $div_Enove = $primNum /$segNum;
      echo "Resultado real da divisão: ";
      echo number_format($div_Enove,2);
      echo "<br>";
      $num_Enove = $primNum;
      $aux_Enove = $num_Enove;
      $elevado_Enove = 2;
      for ($i_Enove = 1; $i_Enove < $elevado_Enove; $i_Enove++) {
      $num_Enove = $aux_Enove* $num_Enove;

      }

     echo "Quadrado do primeiro numero: $num_Enove<br>";


     $num_Enove = 0;
     $elevado_Enove = 0;
     $aux_Enove = 0;

     $num_Enove = $segNum;//17
     $aux_Enove = $num_Enove;
     $elevado_Enove = 3;
     for ($i_Enove = 1; $i_Enove < $elevado_Enove; $i_Enove++) {
     $num_Enove = $aux_Enove * $num_Enove;

     }
     echo "Cubo do segundo numero: $num_Enove<br>";
     echo '<br><hr><br>';
     ?>


      <br>

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $primNum = isset($_POST['primNum']) ? $_POST['primNum'] : 0;
          $segNum = isset($_POST['segNum']) ? $_POST['segNum'] : 0;
          $div_Enove = $primNum /$segNum;
          echo "Resultado real da divisão: ";
          echo number_format($div_Enove,2);

          $num_Enove = $primNum;
          $aux_Enove = $num_Enove;
          $elevado_Enove = 2;
          for ($i_Enove = 1; $i_Enove < $elevado_Enove; $i_Enove++) {
          $num_Enove = $aux_Enove* $num_Enove;

          }

         echo "Quadrado do primeiro numero: $num_Enove";


         $num_Enove = 0;
         $elevado_Enove = 0;
         $aux_Enove = 0;

         $num_Enove = $segNum;//17
         $aux_Enove = $num_Enove;
         $elevado_Enove = 3;
         for ($i_Enove = 1; $i_Enove < $elevado_Enove; $i_Enove++) {
         $num_Enove = $aux_Enove * $num_Enove;

         }
         echo "Cubo do segundo numero: $num_Enove";
            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
