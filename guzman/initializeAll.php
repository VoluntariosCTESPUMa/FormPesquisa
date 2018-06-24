<?php

include './includes/phpoffice/convertAll.php'; //incluimos o ficheiro da ligacao
$convert=convert();
//$hotel = convert('hotel');
if ($convert == 'DONE') {
    include './includes/inputDBAll.php';
    $inputDB = putDB();
    if ($inputDB == 'DONE'){
        echo "BD Atualizada com Sucesso";
        session_start();
        $_SESSION['UPTODATE']=true;
    }
    else {
        if ($inputDB == 'FILENOTFOUND')
            echo "ERR#" . $inputDB . " - Erro! Ficheiro CSV não encontrado!";
        elseif ($inputDB == 'ERRORDELETE')
            echo "ERR#" . $inputDB . " - Erro ao apagar os dados anteriores da sua BD";
        elseif ($inputDB == 'NOTINSERTED')
            echo "ERR#" . $inputDB . " - Erro ao Introduzir os dados novos na sua BD";
            else
            echo $inputDB;
    }
}
 else if ($convert == 'FILENOTFOUND') {
    echo " Por favor insira um ficheiro excel valido na pasta";
    }
?>