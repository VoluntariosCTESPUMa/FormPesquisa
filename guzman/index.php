<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<script type="text/javascript" src="./includes/jszip.js"></script>
<script type="text/javascript" src="./includes/FileSaver.js"></script>
<script type="text/javascript" src="./includes/myexcel.js"></script>
<title>Turismo</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  <style>
  .loader {
  position: fixed;
  background-color: black;
  opacity: 1;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 10;
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
.thcss{
  background-color: #2196F3;
  color:white;
  text-align:justify;
  border-right:1px solid white;
  padding:15px;
  border:20px;
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


/* loading screen */

</style>
<!-- loading -->
<style media="screen" type="text/css">
      .layer1_class { position: absolute; z-index: 1; top: 100px; left: 0px; visibility: visible; }
      .layer2_class { position: absolute; z-index: 2; top: 10px; left: 10px; visibility: hidden }
    </style>



</head>
<body>

<style>
.direitinho {
 display: flex;
 flex-wrap: wrap;
}
</style>
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
        <option value="0">Numero de Registo</option>
        <option value="1">Data do Registo</option>
        <option value="2">Nome do Alojamento</option>
        <option value="3">Imovél Posterior 1951</option>
        <option value="4">Data Abertura Público</option>
        <option value="5"> Modalidade</option>
        <option value="6">Número de camas</option>
        <option value="7">Número de Utentes</option>
        <option value="8"> Número de Quartos </option>
        <option value="9">Número de Beliches</option>
        <option value="10">Localização(Endereço) </option>
        <option value="11">Localização(Código de Postal)</option>
        <option value="12">Localidade</option>
        <option value="13">Freguesia</option>
        <option value="14">Concelho</option>
        <option value="15">Distrito </option>

    </select>
    </div>
    <br>
  <div style='overflow-x:scroll; overflow-y:scroll; height:450px;'>
  <table id='sourcetable' class='table table-bordered table-striped' style='border:1px solid #2196F3;'>
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

  <div class='column'>
    <h4>Lista de Exportação</h4>
    <a href="#" id="down">Download</a>
    <table id="replaceme">
    <!-- <tr id="count">
    <td id="demo">

    </td>
    </tr> -->
    
    </table>
    <br>
    
    <script>
    // if( $('#replaceme td').length == 0) {
    //   document.getElementById("replaceme").innerHTML = "Não tem nada dentro da sua lista de exportação!"
    // }
    // else if(){

      function tdclick(e,thistr){
       
        if(!(e.target.innerText=="undefined")){
        var a=e.target.innerText;
        for(var i=0;i!=$('#replaceme table').length;i++){
          if(a==arr[i]['numero_registo']){
          arr.splice(i,1)
          break;
          }
        }
        trclick(thistr);
        }
        else
        return "";
      }

function trclick(row){
  row.parent().parent().parent().parent().remove();
}
  

    var row_id;
    var linha;
    var arr=[];
    $('#sourcetable').on('click', "tr", function(e){
    row_id = $("td:first a.ajaxCall", this).attr("rel");





    var table = document.getElementById("replaceme");
    var row   = table.insertRow(-1);
    var cell1 = row.insertCell(-1);
  //  window.console&&console.log($('#replaceme table').length)
    linha = JSON.parse(row_id);
//window.console&&console.log(linha);
   
      arr.push(linha);
    cell1.innerHTML = '<table id="a"><tr><td onclick="tdclick(event,$(this))" class="wtf"><a href="#" title="Clique aqui para remover esta entrada">'+linha['numero_registo']+'</a></td><td>'+linha['Data_registo']+'</td><td>'+linha['Nome_Alojamento']+'</td><td>'+linha['Imovel_Posterior_1951']+'</td></tr></table><br>';
   // window.console&&console.log(linha);
        // var csv = linha['numero_registo'] + "\t" + linha['Data_registo'];
        // var data = new Blob([csv]);
        // var a = document.getElementById('aa');
        // a.href = URL.createObjectURL(data);
    //  var cont = $('#replaceme tr td').length-1;
    //  document.getElementById("demo").innerHTML = "Tem " + cont + " Items na sua lista!";
     
    });
    $('#down').click({arr:arr},getarray); //criamos um evento para quando clicarmos no botao download,queira trazer o array como parametro
    function getarray(event){
       var arr= event.data.arr; //fazemos a declaracao da variavel local

      function randomDate(start, end) {
			var d= new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime()));
			return d;
    }
    
		  var excel = $JExcel.new("Calibri light 10 #333333");			// Default font
			
			excel.set( {sheet:0,value:"Alojamentos" } );
			
			var evenRow=excel.addStyle ( { 																	// Style for even ROWS
				border: "none,none,none,thin #333333"});													// Borders are LEFT,RIGHT,TOP,BOTTOM. Check $JExcel.borderStyles for a list of valid border styles
			var oddRow=excel.addStyle ( { 																	// Style for odd ROWS
				fill: "#ECECEC" , 																			// Background color, plain #RRGGBB, there is a helper $JExcel.rgbToHex(r,g,b)
				border: "none,none,none,thin #333333"}); 
			
 
			var headers=["Número Registo", "Data Registo", "Nome do Alojamento", "Imovél Posterior 1951", "Data Abertura Público", "Modalidade", "Número de camas", "Número de Utentes", "Número de Quartos", "Número de Beliches", "Endereço", "Código de Postal", "Localidade", "Freguesia", "Concelho", "Distrito", "NUTT_II"];							// This array holds the HEADERS text
			var formatHeader=excel.addStyle ( { 															// Format for headers
					border: "none,none,none,thin #333333", 													// 		Border for header
					font: "Calibri 12 #0000AA B"}); 														// 		Font for headers
			for (var i=0;i<headers.length;i++){																// Loop all the haders
				excel.set(0,i,0,headers[i],formatHeader);													// Set CELL with header text, using header format
				excel.set(0,i,undefined,"auto");															// Set COLUMN width to auto (according to the standard this is only valid for numeric columns)
			}
			
			
			// Now let's write some data
			var initDate = new Date(2000, 0, 1);
			var endDate = new Date(2016, 0, 1);
			var dateStyle = excel.addStyle ( { 																// Format for date cells
					align: "R",																				// 		aligned to the RIGHT
					format: "yyyy.mm.dd hh:mm:ss", 															// 		using DATE mask, Check $JExcel.formats for built-in formats or provide your own 
					font: "#00AA00"}); 																		// 		in color green
      
        
        $.each(arr, function (index, value) {
				//para cada item no array
          excel.set(0,0,index+1,arr[index]['numero_registo']);	
          excel.set(0,1,index+1,arr[index]['Data_registo']);
          excel.set(0,2,index+1,arr[index]['Nome_Alojamento']);
          excel.set(0,3,index+1,arr[index]['Imovel_Posterior_1951']);															
          var d=randomDate(initDate,endDate);															
          excel.set(0,1,d.toLocaleString());														
          excel.set(0,2,$JExcel.toExcelLocalTime(d));											
          excel.set(0,3,$JExcel.toExcelLocalTime(d),dateStyle);										
          excel.set(0,4,"Some other text");			
         								
        })	
					
        excel.generate("ALOJAMENTOS.xlsx");
      
			
		};
  

  // } 

  


</script>
  </div>
</div>
  

<style>
.wtf{
  border-style:none;
}

#a{
  border-style:none;
}
</style>
</body>
</html>