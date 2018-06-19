<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
</style>
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
      </select>
      <button type="submit">Pesquisar <i class="fa fa-search"></i></button>
    </form>
  </div>
  <div class="column" >
  <h4>Resultados</h4>
  <div style="overflow-x:scroll; overflow-y:scroll; height:450px;">
  <table> 
  <tr>
    <th>Nome</th>
    <th>Morada</th>
    <th>dfgdgregerrrrrrrrrrr rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr</th>

  </tr> 

  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>amo-te mario </td> 
  </tr>
  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>exemplo3</td>
  </tr>
  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>exemplo3</td>
  </tr>
  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>exemplo3</td>
  </tr>
  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>exemplo3</td>
  </tr>
  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>exemplo3</td>
  </tr>
  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>exemplo3</td>
  </tr>
  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>exemplo3</td>
  </tr>
  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>exemplo3</td>
  </tr>
  <tr>
    <td>exemplo1</td>
    <td>exemplo2</td>
    <td>exemplo3</td>
  </tr>



</table>
</div>
  </div>
  <div class="column">
    <h4>Lista de Exportação</h4>
    <table>
    <tr>
    <th>Lista</th>
    </tr>
    <tr>
    <td>blablabla</td>
    </tr>
    <tr>
    <td>blablabla</td>
    </tr>
    </table>
  </div>
</div>

</body>
</html>