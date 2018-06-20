<?php
$connect = mysqli_connect("localhost", "root", "", "alojamento");
$sql = "SELECT * FROM dados";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Export MySQL data to Excel in PHP</h2><br /> 
    <!-- <table class="table table-bordered">
     <tr>  
                         <th>de registo</th>  
                         <th>Data do registo</th>  
                         <th>Nome do Alojamento</th>  
       <th>Imovél Posterior 1951</th>
       <th>Data Abertura Público</th>
                    </tr> -->
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
        <td>'.$row["de registo"].'</td>  
        <td>'.$row["Data do registo"].'</td>  
        <td>'.$row["Nome do Alojamento"].'</td>  
        <td>'.$row["Imovél Posterior 1951"].'</td>  
        <td>'.$row["Data Abertura Público"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>