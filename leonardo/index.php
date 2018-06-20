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
.container{
  width: 100%;
  height: 100%;
}
#closebtn {
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
}

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
  <input class='form-control' id='myInput' type='text' style='width: 50%;' placeholder='Search..'>
  <br>
  <div style='overflow-x:scroll; overflow-y:scroll; height:450px;'>
  <table class='table table-bordered table-striped' style='border:1px solid #2196F3;'>
    <thead>
      <tr>
      <th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;'>asdasdad</th>
      <th style='background-color: #2196F3;color:white;text-align:center;border-right:1px solid white;'>Morada</th>
      <th style='background-color: #2196F3;color:white;text-align:center;'>Telemovel</th>
  
      </tr>
    </thead>
    <tbody id='myTable'>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
    </tbody>
  </table>
  </div> 
</div>";

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
    <tbody id="myTablelista">
      <tr>
        <td><span id='closebtn' onclick=this.parentElement.style.display='none'>&times</span>John</td>
      </tr>
      <tr>
      <td><span id='closebtn' onclick=this.parentElement.style.display='none'>&times</span>John2</td>
      </tr>
      <tr>
        <td> <span id='closebtn' onclick=this.parentElement.style.display='none'>&times</span>John</td>
      </tr>
      <tr >
        <td>teste</td>
      </tr>
      <tr>
        <td>teste2</td>
      </tr>
      <tr>
        <td>asd</td>
      </tr>
      <tr>
        <td>John</td>
      </tr>
      <tr>
        <td>John</td>
      </tr>
      <tr>
        <td>fgh</td>
      </tr>
      <tr>
        <td>qwe</td>
      </tr>
      <tr>
        <td>qwe</td>
      </tr>
      <tr>
        <td>asd</td>
      </tr>
      <tr>
        <td>John</td>
      </tr>
      <tr>
        <td>John</td>
      </tr>
      <tr>
        <td>fgh</td>
      </tr>
      <tr>
        <td>qwe</td>
      </tr>
      <tr>
        <td>qwe</td>
      </tr>
      <tr>
        <td>asd</td>
      </tr>
      <tr>
        <td>John</td>
      </tr>
      <tr>
        <td>John</td>
      </tr>
      <tr>
        <td>fgh</td>
      </tr>
      <tr>
        <td>qwe</td>
      </tr>
      <tr>
        <td>qwe</td>
      </tr>
      <tr>
        <td>asd</td>
      </tr>
    </tbody>
  </table>
  </div> 
</div>

</div>



</body>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
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