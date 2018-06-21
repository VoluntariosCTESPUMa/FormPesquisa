<!DOCTYPE html>
<html>
<head>
  <title>Turismo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 0;
  margin-top: 8px;
  padding-left: 2rem;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.thcss{
  background-color: #2196F3;
  color:white;
  text-align:justify;
  border-right:1px solid white;
  padding:15px;
}
.container{
  width: 100%;
  height: 100%;
}
.direitinho {
 display: flex;
 flex-wrap: wrap;
}

/* #closebtn {
    margin-left: 15px;
    color: black;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

#closebtn:hover {
    color: red;
} */
</style>

</head>
<body>

<div class="topnav">
  <a class="active" href="#home">SiteDeBorla</a>
  <a href="/hoteis">Hoteis</a>
  <a href="/alojamentos">Alojamentos</a>
</div>

<div class='container'>
<div class='col-sm-8'>
<h2>Resultados</h2>
<div class="direitinho">
  <input onkeyup="myFunction()" class="form-control" id='myInput' type='text' style='width: 50%;' placeholder='Search..'>
  <select class="form-control" style='width: 30%; margin-left: 10px;' id="mySelect">
        <option value="0" >Numero de Registo</option>
        <option value="1" >Data do Registo</option>
        <option value="2">Nome do Alojamento</option>
        <option value="3" >Imovél Posterior 1951</option>
        <option value="4" >Data Abertura Público</option>
        <option value="5"> Modalidade</option>
        <option value="6" >Número de camas</option>
        <option value="7" >Número de Utentes</option>
        <option value="8"> Número de Quartos </option>
        <option value="9" >Número de Beliches</option>
        <option value="10">Localização(Endereço) </option>
        <option value="11" >Localização(Código de Postal)</option>
        <option value="12" >Localidade</option>
        <option value="13">Freguesia</option>
        <option value="14" >Concelho</option>
        <option value="15" >Distrito </option>

    </select>
    </div>
    <br>
  <div style='overflow-x:scroll; overflow-y:scroll; height:450px;'>
  <table class='table table-bordered table-striped' style='border:1px solid #2196F3;'>
    <thead>
      <tr>
      <th class="thcss">Numero de Registo</th>
      <th class="thcss">Data do Registo</th>
      <th class="thcss">Nome do Alojamento</th>
      <th class="thcss">Imovél Posterior 1951</th>
      <th class="thcss">Data Abertura Público</th>
      <th class="thcss">Modalidade</th>
      <th class="thcss">Número de camas</th>
      <th class="thcss">Número de Utentes</th>
      <th class="thcss">Número de Quartos</th>
      <th class="thcss">Número de Beliches</th>
      <th class="thcss">Localização(Endereço)</th>
      <th class="thcss">Localização(Código de Postal)</th>
      <th class="thcss">Localidade</th>
      <th class="thcss">Freguesia</th>
      <th class="thcss">Concelho</th>
      <th class="thcss">Distrito </th>
      </tr>
    </thead>
    <tbody id='myTable'>
    <tr>
    <?php include './includes/database.php';?>
    </tr>
    </tbody>
  </table>
  </div> 
</div>

<div class="col-sm-4" >
<h2>Lista de Exportacao</h2>
<input class="form-control" id="myInputlista" type="text" style="width: 50%;" placeholder="Search..">
  <br>
  <div style="overflow-x:scroll; overflow-y:scroll; height:450px;">
  <table class="table table-bordered table-striped">
    <thead >
      <tr>
      <th style="background-color: #2196F3;color:white;text-align:center;" >Lista</th>
      </tr>
    </thead>
    </tbody>
  </table>
  </div> 
</div>

</div>



</body>

<!-- <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> -->

<script>
function myFunction() {
  var x = document.getElementById("mySelect").selectedIndex;
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[x];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>



<script>
$(document).ready(function(){
  $("#myInputlista").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTablelista tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



</html>



/* por tudo direitinho na thea */