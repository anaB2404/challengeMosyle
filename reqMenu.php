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
    <header>
      <nav class="blue lighten-1">
        <div class="container">
          <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">Challenge</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger">
              <i class="fas fa-bars fa-2x icon" aria-hidden="true"></i>
            </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="index.php">Home</a></li>
              <li><a href="analiseCodigo.php">Análise de Código</a></li>
              <li><a href="trocaDeValores.php">Troca de Valores</a></li>
              <li><a href="revendedoraCarros.php">Revendedora de Carros</a></li>
              <li><a href="collapsible.html">Cálculo Média</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <ul class="sidenav" id="mobile-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="analiseCodigo.php">Análise de Código</a></li>
        <li><a href="trocaDeValores.php">Troca de Valores</a></li>
        <li><a href="revendedoraCarros.php">Revendedora de Carros</a></li>
        <li><a href="collapsible.html">Cálculo Média</a></li>
      </ul>
    </header>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/materialize-css/dist/js/materialize.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
