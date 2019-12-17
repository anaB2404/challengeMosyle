<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>
      Challenge Mosyle - Ana Beatriz Rodrigues
    </title>
    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css">

    <link rel="stylesheet" href="css/analiseCodigo.css">
  </head>
  <body>
    <?php
      require 'reqMenu.php';
    ?>

    <section class="desafio">
      <div class="container">
        <p>1 - Analise os trechos de código abaixo, escritos em uma linguagem de programação
        hipotética, fazendo uso dos comandos “while-do” (enquanto-faça) e “do-while”
        (faça-enquanto) e supondo que a, b e c foram declaradas anteriormente.</p>
        <div class="container">
          <div class="row">
            <div class="col s12 m6">
              <h4>
                while(c < a)<br>
                  do{<br>
                    a=a-1;<br>
                    b=b+1;<br>
                    c=c+b;<br>
                  }
              </h4>
            </div>

            <div class="col s12 m6">
              <h4>
                  do{<br>
                    a=a-1;<br>
                    b=b+1;<br>
                    c=c+b;<br>
                  }<br>
                  while(c < a)
              </h4>
            </div>
          </div>
        </div>
        <p>Quais são os valores de a, b e c, após o término de cada trecho, se as variáveis a, b e c forem
        inicializadas com 3, 0 e 3, respectivamente, antes de cada trecho?</p>
      </div>
    </section>

    <section>
      <div class="container">
        <p>Resposta:
          <?php

          $a = 3;
          $b = 0;
          $c = 3;

          do{
            $a = $a - 1;
            $b = $b + 1;
            $c = $c + $b;

            echo "<br>O valor das letras são: <h6>A: $a</h6> <h6>B: $b</h6> </h6>C: $c</h6>";
          }while ($c < $a)
        ?>
      </p>

      <h6>Perceba que no 1 código a sintaxe do while está incorreta não existe While do, existe apenas While e Do While, ou seja ao rodar o primeiro código apresentaria um erro.</h6>
      </div>
    </section>

    <?php
      require 'footer.php';
    ?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/materialize-css/dist/js/materialize.js"></script>
  </body>
</html>
