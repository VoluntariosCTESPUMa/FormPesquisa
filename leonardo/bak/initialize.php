<?php

include './includes/phpoffice/convert.php'; //incluimos o ficheiro da ligacao
$alojamento = convert('aloj');
//$hotel = convert('hotel');
if ($alojamento == 'DONE') {
    include './includes/inputDB.php';
    $inputDB = putDB('aloj');
    if ($inputDB == 'DONE')
        echo "BD Atualizada com Sucesso";
    else {
        if ($inputDB == 'FILENOTFOUND')
            echo "ERR#" . $inputDB . " - Erro! Ficheiro CSV não encontrado!";
        elseif ($inputDB == 'ERRORDELETE')
            echo "ERR#" . $inputDB . " - Erro ao apagar os dados anteriores da sua BD";
        elseif ($inputDB == 'NOTINSERTED')
            echo "ERR#" . $inputDB . " - Erro ao Introduzir os dados novos na sua BD";
    }
}
 else if ($alojamento == 'FILENOTFOUND') {
    echo " Por favor insira um ficheiro excel valido na pasta";
    }
?>