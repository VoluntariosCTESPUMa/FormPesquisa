<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">SiteDeBorla</a>
  <a href="/hoteis">Hoteis</a>
  <a href="/alojamentos">Alojamentos</a>
</div>

<div class="row" style="margin:2rem;">
<div class="search-container" style="margin-left:0.5rem;">
    <form action="/action_page.php">
      <input type="text" placeholder="Pesquisar..." name="search">
      <select placeholder="Escolha um filtro...">
        <option disabled selected style="display:none;">Escolha um filtro...</option>
        <option>GUZMAN</option>
        <option>GUZMAN2</option>
      </select>
      <button type="submit"  id="myInput" >Pesquisar <i class="fa fa-search"></i></button>
    </form>
  </div>
  <div class="column" >
  <h4>Resultados</h4>
  <div style="overflow-x:scroll; overflow-y:scroll; height:450px;">
  <table  id="myTable"> 
  <tr>
    <th style="background-color: #2196F3;color:white;text-align:center;border-right:1px solid black">Nome</th>
    <th style="background-color: #2196F3;color:white;text-align:center;border-right:1px solid black">Morada</th>
    <th style="background-color: #2196F3;color:white;text-align:center;">Telemovel</th>
  </tr> 

  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>amo-te mario </td> 
  </tr>
  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>amo-te mario </td> 
  </tr>
  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>amo-te mario </td> 
  </tr>
  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>amo-te mario </td> 
  </tr>




</table>
</div>
  </div>
  <div class="column">
    <h4>Lista de Exportação</h4>
    <table>
    <tr>
    <th style="background-color: #2196F3;color:white;text-align:center;">Lista</th>
    </tr>
    <tr>
    <td>blablabla</td>
    </tr>
    <tr>
    <td>blablabla</td>
    </tr>
    <tr>
    <td>blablabla</td>
    </tr>
    </table>
    <br>
    <div class="middle">
      <button class="button">
        <span><i class="fa fa-floppy-o"></i></span>
     </button>
    </div>
    
   
    <!-- <button class="button"><span>Hover </span></button> -->
  </div>
  
</div>

</body>
</html>
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

<style>
.middle{
  margin:auto;
  border-left:100px;
}
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

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

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}

* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.button {
  border-radius: 50%;
  background-color: black;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin:auto;
  
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>