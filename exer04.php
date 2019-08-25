<?php include './header.php' ?>
<br>
<div class="float-left" style="margin-left:10px">

    <a href="exer03.php" class="btn btn-primary" >Anterior</a><br><br><br>

</div>
<div class="float-right" style="margin-right:10px">

    <a href="exer05.php" class="btn btn-primary" >Próximo</a><br><br><br>

</div><br>
<div class="container"><br>

      <h4>Lista 01</h4>

      <blockquote class="blockquote text-center">

          <h2>Exercício 04</h2><br><br>

      </blockquote>


      <h3>
Fazer um programa que imprima a média dos números 11, 19 e 7.
      </h3>
      <br>
      <br>


      <hr>
      <h4>Resultado:</h4>

      <?php
      $notaum = 11;
      $notadois = 19;
      $notatres = 7;
      $media = ($notaum+$notadois+$notatres)/3;
      echo number_format($media,2);
      echo '<br><hr><br>';
      ?>

      <br>
      <hr>
      <!-- COD QUE VAI MOSTRAR NA TELA-->
      <h4>Código:</h4>

      <pre>

          <p><b><</b>?php</p>

              $notaum = 11;
              $notadois = 19;
              $notatres = 7;
              $media = ($notaum+$notadois+$notatres)/3;
              echo number_format($media,2);PHP-->

            <p>?<b>></b></p>
      </pre>
<hr>
        <!---->

</div>
<?php require './footer.php' ?>
