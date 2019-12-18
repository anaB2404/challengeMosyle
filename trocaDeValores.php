<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>
      Challenge Mosyle - Ana Beatriz Rodrigues
    </title>
    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css">

    <link rel="stylesheet" href="css/default.css">
  </head>
  <body>
    <?php
      require 'reqMenu.php';
    ?>

    <section class="desafio">
      <div class="container">
        <div class="center-align">
          <h4>Exercício</h4>
        </div>
        <p>2 - Escreva um algoritmo que armazene o valor 10 em uma variável A e o valor 20 em uma
          variável B. A seguir (utilizando apenas atribuições entre variáveis) troque os seus
          conteúdos fazendo com que o valor que está em A passe para B e vice-versa. Ao final,
          escrever os valores que ficaram armazenados nas variáveis.</p>
        <div class="container">
          <div class="row">
            <div class="col s12 m6">

            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <p>Resposta:
          <?php
            $Adez = 10;
            $Bvinte = 20;

            $trocaA = $Adez;
            $trocaB =  $Bvinte;

            $Adez = $trocaB;
            $Bvinte = $trocaA;

            echo "<br>O valor das letras são: <h6>A: $Adez</h6> <h6>B: $Bvinte</h6>";
          ?>
      </p>
      </div>
    </section>

    <?php
      require 'footer.php';
    ?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/materialize-css/dist/js/materialize.js"></script>
  </body>
</html>
