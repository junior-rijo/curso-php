<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php
        include 'filho.php';//relativo se fosse absoluto seria o caminho do diretorio desde seu inicio se tivesse dentro de uma pasta seria arquivospai\filho.
        include 'teste_caminhos.php';//menção relativa include_once para chamar um arquivo apenas uma vez
        require 'nao_existe.php';
        echo 'Isto é um teste'; // Estilo de comentário de uma linha em  c++
        /*comentários em bloco
        */
        echo '<b>Hello World</b>'; ?>
    </body>
</html>
