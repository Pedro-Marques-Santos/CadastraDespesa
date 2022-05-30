<?php

    echo '<prev>';
    print_r( $_GET );
    echo '</prev>';
    echo '<hr>';

    $tipo = $_GET['tipo'];
    $categoria = $_GET['categoria'];
    $descricao = $_GET['descricao'];

    $campos = array( $tipo, $categoria, $descricao );

    foreach($campos as $i) {
        if(empty($i)) {
            echo 'campos obrigatórios faltando. Volte e preencha!';
            header('location: index.php');
            exit();
        }
    }

    print_r( $campos );
    echo '<hr>';

    //verificar se há '#' na aplicação

    $tipo = str_replace('#', '-', $_GET['tipo']);
    $categoria = str_replace('#', '-', $_GET['categoria']);
    $descricao = str_replace('#', '-', $_GET['descricao']);

    $compras = $tipo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    $arquivo = fopen('arquivo.hd', 'a');

    fwrite($arquivo, $compras);

    fclose($arquivo);

    header('location: consultar_despesas.php');

?>