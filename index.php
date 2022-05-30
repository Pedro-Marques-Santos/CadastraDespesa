
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

    <section class="abertura_cadastro">
        <h1>Abertura de cadastro</h1>
        <hr>
        <form method="$_GET" action="cadastro.php">
          <h2 for="tipo">Tipo</h2>
          <input type="text" name="tipo" placeholder="Tipo">
          <h2 for="categoria">Categoria</h2>
          <select name="categoria" id="">
            <option value="utensilios">Utensilios</option>
            <option value="Esporte">Esporte</option>
            <option value="Tecnologia">Tecnologia</option>
          </select>
          <h2 for="descricao">Descrição</h2>
          <input type="text" name="descricao" placeholder="Descrição">
          <div class="centralizar_button">
            <button class="buttonsalvar" type="submit">Salvar</button>
          </div>
        </form>
      </section>

  </body>
</html>