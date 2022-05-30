<?php

  //array de despesas
  $despesas = array();

  //recperando as despesas
  $arquivos = fopen('arquivo.hd', 'r');

  //a função feof exerga a parte sem nada, por isso usa-se !
  while( !feof( $arquivos ) ) {

    //a função gts recupera tudo q o ponteiro está apontando
    $registro = fgets($arquivos);
    $despesas[] = $registro;
  }

  fclose( $arquivos );

?>








<!DOCTYPE html>
<html>
  <head>
    <title></title>

    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="nomalize.css" >
    <link rel="stylesheet" type="text/css" href="estilo.css" >
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    
    
  </head>
  <body>
    
    <header class="mb-4">
        <nav class="menu">
            <a href="index.php"><img src="img/reddit-brands (4).svg" width="50px"></a>
            <div class="centralizar_logo_titulo">APP Cadastrar despesa</div>
        </nav>
    </header>

    <section class="despesa_consulta">
        <h1>Consultar Despesas</h1>
        <hr>
        <div class="depesa_consulta_conteudo">
          <?php

            foreach( $despesas as $i ) {
              $quebra_despesas = explode('#', $i);

              if(count($quebra_despesas) < 3){
                continue;
              }
          
          ?>

          <div class="despesa_consulta_item">
              <h4><?php echo $quebra_despesas[0] ?></h4>
              <h5><?php echo $quebra_despesas[1] ?></h5>
              <h5><?php echo $quebra_despesas[2] ?></h5>
          </div>

          <?php } ?>
        </div>
    </section>

  </body>
</html>