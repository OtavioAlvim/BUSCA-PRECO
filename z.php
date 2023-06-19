<?php
  // Exibe o resultado da pesquisa
  if (!empty($resultado_busca)) {
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
        <div class="w-50 p-3 " style="margin-top: 25px;">
          <form class="row g-3" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3">
              <input type="number" class="form-control" id="meuInput" placeholder="CODIGO" name="meuInput" autofocus style="height: 80px; font-size: 40px;">
            </div>
            <div class="col-md-4">
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
            </div>
          </nav>
        </div>
    <?php 
    header("Refresh: 4; url=");
  }
  } else if($resultado_busca == 0){?>
    <!-- echo "Nenhum resultado encontrado."; -->
    <div class="container">
        <br><br><br>
        <div class="title">
          <div class="position-relative">
            <div class="position-absolute top-0 start-50 translate-middle">
              <!-- <h1><strong><?php print_r($resultado[1]); ?></strong></h1> -->
              <h1><strong> PRODUTO NÃO LOCALIZADO</strong></h1>
            </div>
          </div><br><br>
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
            </div>
          </nav>
        </div>
  <?php  
    header("Refresh: 2; url=");
}else{ ?>
     <!-- echo "Nenhum resultado encontrado."; -->
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
            </div>
          </nav>
        </div>
  <?php } 
    ?>























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
            </div>
          </nav>
        </div>