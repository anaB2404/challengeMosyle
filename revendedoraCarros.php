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
    <link rel="stylesheet" href="css/revendedora.css">
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
        <p>3 - Uma revendedora de carros usados paga a seus funcionários vendedores um salário
          fixo por mês, mais uma comissão também fixa para cada carro vendido e mais 5% do
          valor das vendas por ele efetuadas. Escrever um algoritmo que leia o número de carros
          por ele vendidos, o valor total de suas vendas, o salário fixo e o valor que ele recebe por
          carro vendido. Calcule e escreva o salário final do vendedor.</p>
        <div class="container">
          <div class="row">
            <div class="center-align form">
              <h5>Preencha os campos abaixo</h5>
            </div>
            <form class="col s12 m12" method="post">
              <div class="row">
                <div class="input-field col s6 m6">
                    <input name="salario" id="first_name" type="text" class="validate" data-mask="$000.000.000.000">
                    <label for="first_name">Salário Fixo</label>
                </div>
                <div class="input-field col s6 m6">
                    <input id="first_name" type="text" class="validate" data-mask="000.000.000.000">
                    <label for="first_name">Número de carros vendidos</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6 m6">
                  <input id="first_name" type="text" class="validate" data-mask="$000.000.000.000">
                  <label for="last_name">Valor por carro vendido</label>
                </div>
                <div class="input-field col s6 m6">
                  <input id="first_name" type="text" class="validate" data-mask="$000.000.000.000">
                  <label for="last_name">Valor total das vendas</label>
                </div>
              </div>
              <button class="center-align btn" type="submit" name="button">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <p>Resposta:
          <?php
            $salario = $_POST["salario"];

          ?>
      </p>
      </div>
    </section>

    <?php
      require 'footer.php';
    ?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/materialize-css/dist/js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
  </body>
</html>
