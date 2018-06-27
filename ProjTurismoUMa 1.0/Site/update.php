<?php

include './includes/phpoffice/convertAll.php'; //incluimos o ficheiro da ligacao
$convert=convert();
//$hotel = convert('hotel');
if ($convert == 'DONE') {
    include './includes/inputDBAll.php';
    $inputDB = putDB();
    if ($inputDB == 'DONE')
      echo "<script>window.location.href = './'</script>";

    else {
        if ($inputDB == 'FILENOTFOUND')
            echo "<h1>ERR#" . $inputDB . " - Erro! Ficheiro CSV não encontrado!</h1>";
        else
            echo "ERR#" .$inputDB;
    }
}
 else if ($convert == 'FILENOTFOUND1') {
    echo "<h1> Por favor verifique que o ficheiro excel aloj.xlsx se encontram na pasta.</h1>";
    }
    else
    echo "<h1> Por favor verifique que o ficheiro excel hotel.xlsx se encontram na pasta.</h1>";
?>