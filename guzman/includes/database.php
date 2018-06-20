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
    // echo "<table><tr><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;padding:15px;'>Numero de Registo</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;padding:15px;' >Data do Registo</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;'>Nome do Alojamento</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;padding:15px;'>Imovél Posterior 1951</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;padding:10px;'>Data Abertura Público</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;'>Modalidade</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;padding:15px;'>Número de camas</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;padding:15px;'>Número de Utentes</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;padding:15px;'>Número de Quartos</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;padding:15px;'>Número de Beliches</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;'>Localização(Endereço)</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;'>Localização(Código de Postal)</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;'> Localidade  </th> <th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;padding:15px;'>Freguesia</th> <th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;padding:15px;'>Concelho</th><th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;padding:15px;'>Distrito </th></tr>";
    
    while($row = $result->fetch_assoc()) { 
        echo "<tr style='border-bottom:1px solid black;' onclick='alerta(".$row['numero_registo'].")'><td>".$row["numero_registo"]."</td><td>".$row["Data_registo"]."</td><td>".$row["Nome_Alojamento"]."</td><td style='text-align:center'>".$row["Imovel_Posterior_1951"]."</td><td>".$row["Data_Abertura_Publico"]."</td><td>".$row["Modalidade"]."</td><td style='text-align:center'>".$row["numero_camas"]."</td><td style='text-align:center'>".$row["Numero_Utentes"]."</td><td style='text-align:center'>".$row["numero_quartos"]."</td><td style='text-align:center'>".$row["numero_beliches"]."</td><td>".$row["Endereco"]."</td><td style='text-align:center'>".$row["codigo_postal"]."</td><td style='text-align:center'>".$row["Localidade"]."</td><td style='text-align:center'>".$row["Freguesia"]."</td><td style='text-align:center'>".$row["Concelho"]."</td><td style='text-align:center'>".$row["Distrito"]."</td></tr>";
    }
    // echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>