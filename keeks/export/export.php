<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "alojamento");
$output = '';

 $query = "SELECT * FROM dados";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>de registo</th>  
                         <th>Data do registo</th>  
                         <th>Nome do Alojamento</th>  
       <th>Imovél Posterior 1951</th>
       <th>Data Abertura Público</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["de registo"].'</td>  
                         <td>'.$row["Data do registo"].'</td>  
                         <td>'.$row["Nome do Alojamento"].'</td>  
       <td>'.$row["Imovél Posterior 1951"].'</td>  
       <td>'.$row["Data Abertura Público"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }

?>