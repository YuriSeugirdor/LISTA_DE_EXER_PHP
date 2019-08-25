<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exerl2_09.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="index.php" class="btn btn-primary" >Página inicial</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 02</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 10</h2><br><br>

      </blockquote>


      <h3>
        10.	Escreva um algoritmo para que solicite o salário e o valor da prestação de um empréstimo pretendido. Seu programa deve exibir uma mensagem se baseando na seguinte estrutura: <br><br>
        a.	Se a prestação for maior que 20% do salário: <br> “Empréstimo não pode ser concedido”. <br>
        b.	Se a prestação for igual a 20% do salário: “Empréstimo em analise” <br>
        c.	Se a prestação for menor que 20% do salário: “Empréstimo pode ser concedido”. <br>

      </h3>
      <br>
      <br>
      <hr>

      <div class="container">
          <fieldset>
              <legend>Calculo de valores</legend>
              <form action="#" method="post">
                  <div class="form-group">
                      <label>Informe o valor do Emprestimo</label>
                      <input type="number" step="1" name="valEmpres" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Informe o valor salário</label>
                      <input type="number" step="1" name="salario" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Informe em quantas vezes</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="vezes">
                     <option>2</option>
                     <option>6</option>
                     <option>8</option>
                     <option>10</option>
                     <option>12</option>
                   </select>
                  </div>
                  <button type="submit" class="btn btn-dark">Verificar!</button>
              </form>
          </fieldset>
      </div>
      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $valEmpres = isset($_POST['valEmpres']) ? $_POST['valEmpres'] : 0;
      $salario = isset($_POST['salario']) ? $_POST['salario'] : 0;
      $vezes = isset($_POST['vezes']) ? $_POST['vezes'] : 0;

      $prest = $valEmpres / $vezes;
      echo "Seu salário: R$ $salario <br>";
      echo "Valor do empretimo: R$$valEmpres <br>";
      echo "Parcelado em $vezes vezes <br>";
      echo "Status: ";
      if ($prest > 0.20 * $salario ) {
       echo "***Emprestimo não pode ser concedido.***";

      }elseif ($prest == 0.20 * $salario) {
       echo "***Emprestimo em analise...***";

      }elseif ($prest < 0.20 * $salario) {
       echo "***Emprestimo pode ser concedido.***";
      }
      ?>

      <br>
<hr>
      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $valEmpres = isset($_POST['valEmpres']) ? $_POST['valEmpres'] : 0;
          $salario = isset($_POST['salario']) ? $_POST['salario'] : 0;
          $vezes = isset($_POST['vezes']) ? $_POST['vezes'] : 0;

          $prest = $valEmpres / $vezes;
          echo "Seu salário: R$ $salario ";
          echo "Valor do empretimo: R$$valEmpres ";
          echo "Parcelado em $vezes vezes ";
          echo "Status: ";
          if ($prest > 0.20 * $salario ) {
           echo "***Emprestimo não pode ser concedido.***";

          }elseif ($prest == 0.20 * $salario) {
           echo "***Emprestimo em analise...***";

          }elseif ($prest < 0.20 * $salario) {
           echo "***Emprestimo pode ser concedido.***";
          }
            <p>?<b>></b></p>

      </pre>
        <hr>

        <!---->

</div>
<?php require './footer.php' ?>
