<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
    
</head>
<body>

<!-- Tu clicaste em: <input type="text" id="fill" value="" /> -->

</body>


<?php
header('Content-Type: text/html; charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "turismo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM alojamento";
$result = $conn->query($sql);

function alerta($num){
   echo "<script type='text/javascript'>alert('$num');</script>";
}
if ($result->num_rows > 0) {
    echo "<table id='sourcetable'><thead><tr><th>Numero de Registo</th><th>Data do Registo</th><th>Nome do Alojamento</th><th>Imovél Posterior 1951</th><th>Data Abertura Público</th><th>Modalidade</th><th>Número de camas</th><th>Número de Utentes</th><th>Número de Quartos</th><th>Número de Beliches</th><th>Localização(Endereço)</th><th>Localização(Código de Postal)</th><th>Localização(Localidade)</th><th>Localização(Freguesia)</th><th>Localização(Concelho)</th><th>Localização(Distrito)</th><th>NUTT_II</th><th>Titular da Exploração</th><th>Titular Qualidade</th><th>Contribuinte</th><th>Tipo de Titular</th><th>Pais Titular</th><th>Telefone</th><th>Fax</th><th>Telemovel</th><th>Email</th></tr></thead>";
    
    while($row = $result->fetch_assoc()) { 
        echo "<tbody><tr><td><a class='ajaxCall' href='#' rel='".json_encode($row, JSON_UNESCAPED_UNICODE)."'>".$row['numero_registo']."</a></td><td>".$row["Data_registo"]."</td><td>".$row["Nome_Alojamento"]."</td><td>".$row["Imovel_Posterior_1951"]."</td><td>".$row["Data_Abertura_Publico"]."</td><td>".$row["Modalidade"]."</td><td>".$row["numero_camas"]."</td><td>".$row["Numero_Utentes"]."</td><td>".$row["numero_quartos"]."</td><td>".$row["numero_beliches"]."</td><td>".$row["Endereco"]."</td><td>".$row["codigo_postal"]."</td><td>".$row["Localidade"]."</td><td>".$row["Freguesia"]."</td><td>".$row["Concelho"]."</td><td>".$row["Distrito"]."</td><td>".$row["NUTT_II"]."</td><td>".$row["Titular_da_Exploracao"]."</td><td>".$row["Titular_Qualidade"]."</td><td>".$row["Contribuinte"]."</td><td>".$row["Tipo_Titular"]."</td><td>".$row["Pais_Titular"]."</td><td>".$row["Telefone"]."</td><td>".$row["Fax"]."</td><td>".$row["Telemovel"]."</td><td>".$row["Email"]."</td></tr></tbody>";
    }
    echo "</table>";
} 

else {
    echo "0 results";
}
$conn->close();
?>

<style>
.thcss{
  background-color: #2196F3;
  color:white;
  text-align:justify;
  border-right:2px solid black;
  padding:15px;
  border:20px;
}

table#sourcetable tbody tr {
  background-color : #fff;
  border: 1px solid grey;
}
/* #sourcetable tr:nth-child(even) {
    background: #f1f1f1;
    color: #999;
} */
table#sourcetable tbody tr {
  cursor : pointer;
}
    </style>