<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>
      Challenge Mosyle - Ana Beatriz Rodrigues
    </title>
    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <?php
      require 'reqMenu.php';
    ?>
    <div class="container">
        <h4>Seja Bem Vindo ao Challenge, relizado por mim Ana Beatriz Rodrigues</h4>
    </div>


    <section class="cards">
      <div class="container">
        <div class="row">
          <div class="col s12 m3">
            <div class="card medium z-depth-4">
              <div class="card-image">
                <img src="assets/img/analiseDeCodigo.jpg">
                <!-- <span class="card-title">Análise de Codigo</span> -->
              </div>
              <div class="card-content">
                <p>Quais são os valores de a, b e c, após o término de cada trecho, se as variáveis a, b e c forem
                  inicializadas com 3, 0 e 3, respectivamente, antes de cada trecho?</p>
              </div>
              <div class="card-action">
                <a href="analiseCodigo.php">Acessar exercício</a>
              </div>
            </div>
          </div>

          <div class="col s12 m3">
            <div class="card medium z-depth-4">
              <div class="card-image">
                <img src="assets/img/trocaDeValores.jpg">
                <!-- <span class="card-title">Card Title</span> -->
              </div>
              <div class="card-content">
                <p>A seguir (utilizando apenas atribuições entre variáveis) troque os seus
                  conteúdos fazendo com que o valor que está em A passe para B e vice-versa. Ao final,
                  escrever os valores que ficaram armazenados nas variáveis.</p>
              </div>
              <div class="card-action">
                <a href="trocaDeValores.php">Acessar exercício</a>
              </div>
            </div>
          </div>

          <div class="col s12 m3">
            <div class="card medium z-depth-4">
              <div class="card-image">
                <img src="assets/img/revendaDeCarros.jpg">
                <!-- <span class="card-title">Card Title</span> -->
              </div>
              <div class="card-content">
                <p>Escrever um algoritmo que leia o número de carros
                  por ele vendidos, o valor total de suas vendas, o salário fixo e o valor que ele recebe por
                  carro vendido. Calcule e escreva o salário final do vendedor.</p>
              </div>
              <div class="card-action">
                <a href="revendedoraCarros.php">Acessar exercício</a>
              </div>
            </div>
          </div>

          <div class="col s12 m3">
            <div class="card medium z-depth-4">
              <div class="card-image">
                <img src="assets/img/calculoMedia.jpg">
                <!-- <span class="card-title">Card Title</span> -->
              </div>
              <div class="card-content">
                <p>Calcular a média da turma e contar quantos alunos obtiveram nota acima desta média
                  calculada. Escrever a média da turma e o resultado da contagem.</p>
              </div>
              <div class="card-action">
                <a href="#">Acessar exercício</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <?php
      require 'footer.php';
    ?>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
  </body>
</html>
