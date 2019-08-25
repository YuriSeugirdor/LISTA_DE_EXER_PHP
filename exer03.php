<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer02.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer04.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 03</h2><br><br>

      </blockquote>


      <h3>

      Uma conta telefônica é composta dos seguintes custos:<br><br>
      Assinatura: R$ 32,00 <br>
Impulsos: R$ 0,09 por impulso que exceder a 90 <br>
Chamadas p/ celular: R$0,35 por impulso <br><br>

Escreva um programa que monte a fórmula para calcular o valor da conta para 254 impulsos e 23 chamadas para celular imprimindo o resultado obtido.

      </h3>
      <br>
      <br>


      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
        $assinatura = 32;
        $impulso = 0.09;
        $chamCell = 0.35;

        $excedido = 254 - 90;

        $conta = $assinatura + ($excedido * $impulso) + (23 * $chamCell);

        echo $conta;
        echo '<br><hr><br>';

      ?>



      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>


          $assinatura = 32;
          $impulso = 0.09;
          $chamCell = 0.35;

          $excedido = 254 - 90;

          $conta = $assinatura + ($excedido * $impulso) + (23 * $chamCell);

          echo $conta;




            <p>?<b>></b></p>

      </pre>

        <!---->

</div>
<?php require './footer.php' ?>
