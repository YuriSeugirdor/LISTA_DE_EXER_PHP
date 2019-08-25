<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer014.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="index.php" class="btn btn-primary" >Página inicial</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 15</h2><br><br>

      </blockquote>


      <h3>

      Calcular o salário líquido de uma pessoa. São fornecidos: o valor por hora, o número de horas trabalhadas e o % de desconto do INSS.
      </h3>
      <br>
      <br>
      <hr>

      <div class="container">
          <fieldset>
              <legend>Calculo de valores</legend>
              <form action="#" method="post">
                  <div class="form-group">
                      <label>Informe o salário/hora</label>
                      <input type="number" step="1" name="salarioH" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Informe a quantidade de horas trabalhadas</label>
                      <input type="number" step="1" name="qtdH" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Informe a porcentagem de desconto do INSS %</label>
                      <input type="number" step="1" name="inss" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-dark">Calcular!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $salario = isset($_POST['salarioH']) ? $_POST['salarioH'] : 0;
      $horas = isset($_POST['qtdH']) ? $_POST['qtdH'] : 0;
      $inss = isset($_POST['inss']) ? $_POST['inss'] : 0;

      $sal_bru = $salario * $horas;// SALARIO BRUTO

      $porcdesc_inss = $inss/100; //PORCEN DE DESCONTO

      $desc_inss = $porcdesc_inss * $sal_bru; //VALOR UNITÁRIO DO DESCONTO
      $sal_cdesc = $sal_bru - $desc_inss;// VALOR DO DESCONTO

      echo "Salário bruto: R$$sal_bru <br>";
      echo "Salário com desc do Inss: R$$sal_cdesc <br>";
      echo "Porcentagem do desconto: ";
      echo ($porcdesc_inss*100);
      echo "% <br>";
      echo "Valor do desconto: R$$desc_inss ";


      ?>
      <br>
      <br>
      <hr>

      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $salario = isset($_POST['salarioH']) ? $_POST['salarioH'] : 0;
          $horas = isset($_POST['qtdH']) ? $_POST['qtdH'] : 0;
          $inss = isset($_POST['inss']) ? $_POST['inss'] : 0;

          $sal_bru = $salario * $horas;// SALARIO BRUTO

          $porcdesc_inss = $inss/100; //PORCEN DE DESCONTO

          $desc_inss = $porcdesc_inss * $sal_bru; //VALOR UNITÁRIO DO DESCONTO
          $sal_cdesc = $sal_bru - $desc_inss;// VALOR DO DESCONTO

          echo "Salário bruto: R$$sal_bru ";
          echo "Salário com desc do Inss: R$$sal_cdesc ";
          echo "Porcentagem do desconto: ";
          echo ($porcdesc_inss*100);
          echo "% ";
          echo "Valor do desconto: R$$desc_inss ";


            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
