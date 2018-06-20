<?php require_once("cabecalho.php"); ?>
<?php require_once("ligacao.php"); ?>


<div class="container container-conteudo">
  <div class="col-sm-9">
  <h2>Livros</h2>
  <form action="livros.php" method="post" accept-charset="utf-8">
  <input type="text" name="pesquisar" class="form" required> <button type="submit" class="btn">Pesquisar</button>
  </form>
  </div>
    
  </div>

  <?php  
  if (isset($_POST['pesquisar'])){
    $sql="SELECT * FROM Livro WHERE titulo LIKE '%{$_POST['pesquisar']}%' OR autor LIKE '%{$_POST['pesquisar']}%' OR genero LIKE '%{$_POST['pesquisar']}%'";
  }else{
    $sql="SELECT * FROM Livro";    
  }
  $resultados=mysqli_query($conn,$sql); 
  $nresultadostodos=mysqli_num_rows($resultados);




  while($livro=mysqli_fetch_assoc($resultados)){

echo"<div class='col-sm-4 col-md-3'>
   <div class='thumbnail'>       
   <img src='http://alexandrel.esffpap.xyz/imagens/{$livro['imagem']}' class='img-thumbnail'>
   <div class='caption'>
   <h3>{$livro['titulo']}</h3>"; 
   $sql3="SELECT * FROM Requisita LEFT JOIN Livro ON Requisita.IDLivro = Livro.ID WHERE Livro.ID = '{$livro['ID']}' AND datadaentrega IS NULL";     
   $resultados3=mysqli_query($conn,$sql3); 
   $nresultados3=mysqli_num_rows($resultados3);

   $sql2="SELECT * FROM Reserva LEFT JOIN Livro ON Reserva.IDLivro = Livro.ID WHERE Livro.ID = '{$livro['ID']}' AND DATE(NOW()) < Reserva.datadereserva+INTERVAL 2 DAY";
   $resultados2=mysqli_query($conn,$sql2); 
   $nresultados2=mysqli_num_rows($resultados2);

   $sql4="SELECT * FROM Reserva LEFT JOIN Livro ON Reserva.IDLivro = Livro.ID INNER JOIN Utilizador ON Reserva.IDutilizador = Utilizador.ID WHERE Utilizador.ID = '{$_SESSION['id']}' AND Livro.ID = '{$livro['ID']}' AND DATE(NOW()) < Reserva.datadereserva+INTERVAL 2 DAY";
   $resultados4=mysqli_query($conn,$sql4); 
   $nresultados4=mysqli_num_rows($resultados4);

   $sql5="SELECT * FROM `Reserva` INNER JOIN Utilizador ON Reserva.IDutilizador = Utilizador.ID INNER JOIN Livro ON Livro.ID = Reserva.IDlivro WHERE IDutilizador = '{$_SESSION['id']}' AND Livro.ID = '{$livro['ID']}' AND Reserva.estado = '{$livro['estado']}'";
   $resultados5=mysqli_query($conn,$sql5); 
   $nresultados5=mysqli_num_rows($resultados5);

   $ndelivrosdisponiveis = $nresultados2 + $nresultados3;
   if(isset($_SESSION['user'])){
    if ($nresultados4 > 0) {
      echo"<a class='btn btn-default btnLivros disabled' role='button'>Já Reservou</a>";
    }else if ($livro['ndeexemplares'] > $ndelivrosdisponiveis) {
      echo"<a href='reservar.php?idl={$livro['ID']}&idu={$_SESSION['id']}' class='btn btn-default btnLivros' role='button'>Reservar</a>"; 
    }else if ($nresultados5 < 0) {      
      echo"<a href='reservarespera.php?idl={$livro['ID']}&idu={$_SESSION['id']}' class='btn btn-default btnLivros' role='button'>Receber Notificação</a>"; 
    }else{      
      echo"<a class='btn btn-default btnLivros disabled' role='button'>Já receberá Notificação</a>"; 
    }
  }
  echo"<a href='detalhes.php?id={$livro['ID']}' class='btn btn-default btnLivros' role='button'>+Info</a>";

  echo"</div>
  </div>
  </div>";
}
?>
<?php require_once("rodape.php"); ?>