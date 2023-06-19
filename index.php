<?php

require_once 'vendor/autoload.php';

use App\Hello;

// $hello = new Hello();
// $hello->pega_valor("ola");
// $_post['codigo'];
// header("Refresh: 0");


// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Lógica de processamento do formulário
  $codigo = $_POST['meuInput'];
  $hello = new Hello();
  $resultado_busca = $hello->pega_valor($codigo);
  $resultado_busca;
  // if(empty($resultado_busca)){
  //   echo "inicio";
  // }
  // if(empty($resultado_busca)){
  //     echo "esta vazio";
  // }else if ($resultado_busca == 1){
  //   echo "produto não cadastrado!";
  // }else {
  //   echo "pagina inicial";
  // }
  // if($resultado_busca){
  //   $resultado_busca = 0;
  // }
  // Define o ID do campo de entrada que deve receber o foco
  $campoFoco = 'meuInput';
}
// header("Refresh: 2; url=");
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagina Inicial</title>
  <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <?php
  if (empty($codigo)) { ?>
    <!-- echo "estou aqui"; -->
    <div class="container">
      <br><br><br>
      <div class="title">
        <div class="position-relative">
          <div class="position-absolute top-0 start-50 translate-middle">
            <!-- <h1><strong><?php print_r($resultado[1]); ?></strong></h1> -->
            <h1><strong> PESQUISAR PRODUTO</strong></h1>
          </div>
        </div><br><br>
      </div>
      <div class="position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
          <img src="./img/sem fundo .png" alt="" srcset="">
        </div>
      </div>
      <div class="w-50 p-3 " style="margin-top: 25px;">
        <form class="row g-3" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="mb-3">
            <input type="number" class="form-control" id="meuInput" placeholder="CODIGO" name="meuInput" autofocus style="height: 80px; font-size: 40px;" required>
          </div>
          <div class="col-md-4">
            <!-- <h2><strong>R$:<?php print_r($resultado[2]); ?></strong></h2> -->
            <h2><strong>R$:0,00</strong></h2>
          </div>
        </form>

        <br>
        <br>
        <nav class="navbar fixed-bottom ">
          <div class="container-fluid">

            <a class="navbar-brand" href="./index.php"><STRong>
                <P>SUPERMERCADO AVENIDA - ME</P>
              </STRong></a>
              <a class="navbar-brand" href="./index.php"><STRong>
                <P>F5 - REINICIAR</P>
              </STRong></a>
          </div>
          
        </nav>
      </div>

    <?php
    header("Refresh: 6; url=");
  } else if ($resultado_busca == 1) { ?>
      <!-- echo "produto não cadastrado!"; -->
      <!-- echo "Nenhum resultado encontrado."; -->
      <div class="container">
        <br><br><br>
        <div class="title">
          <div class="position-relative">
            <div class="position-absolute top-0 start-50 translate-middle">
              <!-- <h1><strong><?php print_r($resultado[1]); ?></strong></h1> -->
              <h3><strong> PRODUTO NÃO LOCALIZADO</strong></h3>
            </div>
          </div><br><br>
        </div>
        <div class="position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
          <img src="./img/sem fundo .png" alt="" srcset="">
        </div>
      </div>
        <div class="w-50 p-3 " style="margin-top: 25px;">
          <form class="row g-3" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3">
              <input type="number" class="form-control" id="meuInput" placeholder="CODIGO" name="meuInput" autofocus style="height: 80px; font-size: 40px;">
            </div>
            <div class="col-md-4">
              <!-- <h2><strong>R$:<?php print_r($resultado[2]); ?></strong></h2> -->
              <h2><strong>R$:0,00</strong></h2>
            </div>
          </form>

          <br>
          <br>
          <nav class="navbar fixed-bottom ">
            <div class="container-fluid">

              <a class="navbar-brand" href="./index.php"><STRong>
                  <P>SUPERMERCADO AVENIDA - ME</P>
                </STRong></a>
                <a class="navbar-brand" href="./index.php"><STRong>
                <P>F5 - REINICIAR</P>
              </STRong></a>
            </div>
            
          </nav>
        </div>
        <?php
        header("Refresh: 2; url="); ?>
        <?php
      } else {
        // echo "aqui";
        foreach ($resultado_busca as $resultado) { ?>
          <div class="container">
            <br><br><br>
            <div class="title">
              <div class="position-relative">
                <div class="position-absolute top-0 start-50 translate-middle">
                  <h1><strong><?php print_r($resultado[1]); ?></strong></h1>
                  <!-- <h1><strong><?php print_r($resultado[1]); ?> PESQUISAR PRODUTO</strong></h1> -->
                </div>
              </div><br><br>
            </div>
            <div class="position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
          <img src="./img/sem fundo .png" alt="" srcset="">
        </div>
      </div>
            <div class="w-50 p-3 " style="margin-top: 25px;">
              <form class="row g-3" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                  <input type="number" class="form-control" id="meuInput" placeholder="CODIGO" name="meuInput" autofocus style="height: 80px; font-size: 40px;">
                </div>
                <div class="col-md-4"><br>
                  <h2><strong>R$:<?php print_r($resultado[2]); ?></strong></h2>
                  <!-- <h2><strong>R$:0,00</strong></h2> -->
                </div>
              </form>

              <br>
              <br>
              <nav class="navbar fixed-bottom ">
                <div class="container-fluid">

                  <a class="navbar-brand" href="./index.php"><STRong>
                      <P>SUPERMERCADO AVENIDA - ME</P>
                    </STRong></a>
                    <a class="navbar-brand" href="./index.php"><STRong>
                <P>F5 - REINICIAR</P>
              </STRong></a>
                </div>
              </nav>
            </div>
        <?php
          header("Refresh: 3; url=");
        }
      }
        ?>
        <script>
          <?php if (isset($campoFoco)) : ?>
            // Se houver um campo definido para receber o foco, focaliza o elemento
            document.getElementById('<?php echo $campoFoco; ?>').focus();
          <?php endif; ?>
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>