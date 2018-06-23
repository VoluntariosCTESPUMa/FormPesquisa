<?php
// header('Content-Type: text/html; charset=utf-8');
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

//$result1 = $conn->query("SET Nome do Alojamento utf8");
$sql = "SELECT * FROM alojamento";
$result = $conn->query($sql);

function alerta($num){
   echo "<script type='text/javascript'>alert('$num');</script>";
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { 
        echo "<tr style='border-bottom:1px solid black;' onclick='alerta(".$row['numero_registo'].")'><td>".$row["numero_registo"]."</td><td>".$row["Data_registo"]."</td><td>".$row["Nome_Alojamento"]."</td><td style='text-align:center'>".$row["Imovel_Posterior_1951"]."</td><td>".$row["Data_Abertura_Publico"]."</td><td>".$row["Modalidade"]."</td><td style='text-align:center'>".$row["numero_camas"]."</td><td style='text-align:center'>".$row["Numero_Utentes"]."</td><td style='text-align:center'>".$row["numero_quartos"]."</td><td style='text-align:center'>".$row["numero_beliches"]."</td><td>".$row["Endereco"]."</td><td style='text-align:center'>".$row["codigo_postal"]."</td><td>".$row["Localidade"]."</td><td>".$row["Freguesia"]."</td><td>".$row["Concelho"]."</td><td>".$row["Distrito"]."</td><td>".$row["NUTT_II"]."</td><td>".$row["Titular_da_Exploracao"]."</td><td>".$row["Titular_Qualidade"]."</td><td>".$row["Contribuinte"]."</td><td>".$row["Tipo_Titular"]."</td><td>".$row["Pais_Titular"]."</td><td>".$row["Telefone"]."</td><td>".$row["Fax"]."</td><td>".$row["Telemovel"]."</td><td>".$row["Email"]."</td></tr></tbody>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>