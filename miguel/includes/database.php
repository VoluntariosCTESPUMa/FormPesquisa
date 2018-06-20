<?php

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


if ($result->num_rows > 0) {
    echo "<table><tr><th>Numero de Registo</th><th>Data do Registo</th><th>Nome do Alojamento</th><th>Imovél Posterior 1951</th><th>Data Abertura Público</th><th>Modalidade</th><th>Número de camas</th><th>Número de Utentes</th><th>Número de Quartos</th><th>Número de Beliches</th><th>Localização(Endereço)</th><th>Localização(Código de Postal)</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["numero registo"]."</td><td>".$row["Data do registo"]."</td><td>".$row["Nome do Alojamento"]."</td><td>".$row["Imovel_Posterior_1951"]."</td><td>".$row["Data_Abertura_Publico"]."</td><td>".$row["Modalidade"]."</td><td>".$row["numero_camas"]."</td><td>".$row["Numero_Utentes"]."</td><td>".$row["numero_quartos"]."</td><td>".$row["numero_beliches"]."</td><td>".$row["Endereco"]."</td><td>".$row["codigo_postal"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>