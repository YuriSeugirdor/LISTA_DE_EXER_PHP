<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer04.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer06.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 05</h2><br><br>

      </blockquote>


      <h3>

        Um professor atribui pesos de 1 a 4 para as notas de quatro avaliações. A nota é calculada por meio da média ponderada (N1*1 + N2*2 + N3*3 + N4*4) / (1+2+3+4), onde N1 é a nota da primeira avaliação, N2 a da segunda, etc. Um aluno tirou as seguintes notas: 8, 7.5, 10, 9. Faça um programa que calcula e escreva a média deste aluno.
      </h3>
      <br>
      <br>


      <hr>
      <h4>Resultado:</h4>
      <br>
      <?php
      $notaum = 11;
      $notadois = 19;
      $notatres = 7;
      $media = ($notaum+$notadois+$notatres)/3;
      echo number_format($media,2);
      echo '<br><hr><br>';

      ?>



      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código PHP:</h4>

      <pre>

          <p><b><</b>?php</p>

          $notaum = 11;
          $notadois = 19;
          $notatres = 7;
          $media = ($notaum+$notadois+$notatres)/3;
          echo number_format($media,2);


            <p>?<b>></b></p>

      </pre>

        <hr>

</div>
<?php require './footer.php' ?>
