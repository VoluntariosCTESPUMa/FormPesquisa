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


$sql = "SELECT * FROM hotel";
$result = $conn->query($sql);

function alerta($num){
   echo "<script type='text/javascript'>alert('$num');</script>";
}
if ($result->num_rows > 0) {
    echo "<table id='sourcetable'><thead><tr><th>IDHotel(BD)</th><th>Categoria</th><th>Classificacao</th><th>Unidade Hoteleira</th><th>Diretor</th><th>Email Diretor</th><th>Diretor Comercial</th><th>Email Diretor Comercial</th><th>Email Geral</th><th>Telefone</th><th>Grupo Hoteleiro</th></thead>";
    
    while($row = $result->fetch_assoc()) { 
        
        echo "<tbody><tr><td><a class='ajaxCall' href='#' rel='".json_encode($row, JSON_UNESCAPED_UNICODE)."'>".$row['IdHotel']."</a></td><td>".$row["categoria"]."</td><td>".$row["classificacao"]."</td><td>".$row["unidade_hoteleira"]."</td><td>".$row["diretor"]."</td><td>".$row["email_diretor"]."</td><td>".$row["diretor_comercial"]."</td><td>".$row["email_diretor_comercial"]."</td><td>".$row["email_geral"]."</td><td>".$row["telefone"]."</td><td>".$row["grupo_hoteleiro"]."</td></tr></tbody>";
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