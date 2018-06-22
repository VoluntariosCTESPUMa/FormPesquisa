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
  .loader {
  position: fixed;
  background-color: #FFF;
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


/* loading screen */
.layer1_class { position: absolute; z-index: 1; top: 100px; left: 0px; visibility: visible; }
.layer2_class { position: absolute; z-index: 2; top: 10px; left: 10px; visibility: hidden }

</style>
</head>


<body onload="downLoad()">

<div id="layer1" class="layer1_class">
      <table width="100%">
        <tr>
          <td  class="loader"><strong><em><img style="margin-left: auto;margin-right: auto;display: block;" src="loading.gif"></em></strong> </p></td>
        </tr>
      </table>
    </div>



<div class="topnav">
  <a class="active" href="#home">SiteDeBorla</a>
  <a href="/hoteis">Hoteis</a>
  <a href="/alojamentos">Alojamentos</a>
</div>

<div class='container'>
<div>
<h2>Resultados</h2>
<div class="direitinho">
  <input onkeyup="myFunction()" class="form-control" id='myInput' type='text' style='width: 50%;' placeholder='Search..'>
  <select class="form-control" style='width: 30%; margin-left: 10px;' id="mySelect">
        <option value="0">Numero de Registo</option>
        <option value="1">Data do Registo</option>
        <option value="2">Nome do Alojamento</option>
        <option value="3">Imovél Posterior 1951</option>
        <option value="4">Data Abertura Público</option>
        <option value="5">Modalidade</option>
        <option value="6">Número de camas</option>
        <option value="7">Número de Utentes</option>
        <option value="8">Número de Quartos </option>
        <option value="9">Número de Beliches</option>
        <option value="10">Localização(Endereço) </option>
        <option value="11">Localização(Código de Postal)</option>
        <option value="12">Localização(Localidade)</option>
        <option value="13">Localização(Freguesia)</option>
        <option value="14">Localização(Concelho)</option>
        <option value="15">Localização(Distrito)</option>
        <option value="16">NUTT_II</option>
        <option value="17">Titular da Exploração</option>
        <option value="18">Titular Qualidade</option>
        <option value="19">Contribuinte</option>
        <option value="20">Tipo de Titular</option>
        <option value="21">Telefone</option>
        <option value="22">Fax</option>
        <option value="23">Telemovel</option>
        <option value="24">Email</option>

    </select>
    </div>
    <br>
  <div style='overflow-x:scroll; overflow-y:scroll; height:450px;'>
  <table id='sourcetable' class='table table-bordered table-striped' style='border:1px solid #2196F3;'>
    <thead>
      <!-- <tr>
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
      </tr> -->
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
      <th class="thcss">Localização(Localidade)</th>
      <th class="thcss">Localização(Freguesia)</th>
      <th class="thcss">Localização(Concelho)</th>
      <th class="thcss">Localização(Distrito)</th>
      <th class="thcss">NUTT_II</th>
      <th class="thcss">Titular da Exploração</th>
      <th class="thcss">Titular Qualidade</th>
      <th class="thcss">Contribuinte</th>
      <th class="thcss">Tipo de Titular</th>
      <th class="thcss">Pais Titular</th>
      <th class="thcss">Telefone</th>
      <th class="thcss">Fax</th>
      <th class="thcss">Telemovel</th>
      <th class="thcss">Email</th>
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

<div>
<h2>Lista de Exportacao</h2>
<!-- <input class="form-control" id="myInputlista" type="text" style="width: 50%;" placeholder="Search..">
<br> -->
  <!-- <div style='overflow-x:scroll; overflow-y:scroll; height:450px;'>
  <table id='replaceme' class='table table-bordered table-striped' style='border:1px solid #2196F3;'>
  <thead >
      <tr >
      <th class='thcss'>Numero de Registo</th>
      <th class='thcss'>Data do Registo</th>
      <th class='thcss'>Nome do Alojamento</th>
      <th class='thcss'>Imovél Posterior 1951</th>
      <th class='thcss'>Data Abertura Público</th>
      <th class='thcss'>Modalidade</th>
      <th class='thcss'>Número de camas</th>
      <th class='thcss'>Número de Utentes</th>
      <th class='thcss'>Número de Quartos</th>
      <th class='thcss' >Número de Beliches</th>
      <th class='thcss'>Localização(Endereço)</th>
      <th class='thcss'>Localização(Código de Postal)</th>
      <th class='thcss'>Localidade</th>
      <th class='thcss'>Freguesia</th>
      <th class='thcss'>Concelho</th>
      <th class='thcss'>Distrito </th>
      </tr>
    </thead>
    <tbody>
    <tr><td>'+linha['numero_registo']+'</td><td>'+linha['Data_registo']+'</td><td>'+linha['Nome_Alojamento']+'</td><td>'+linha['Imovel_Posterior_1951']+'</td></tr>
    </tbody>
  </table>
  </div> 
</div> -->



<table >
<!-- <thead >
      <tr >
      <th class='thcss'>Numero de Registo</th>
      <th class='thcss'>Data do Registo</th>
      <th class='thcss'>Nome do Alojamento</th>
      <th class='thcss'>Imovél Posterior 1951</th>
      <th class='thcss'>Data Abertura Público</th>
      <th class='thcss'>Modalidade</th>
      <th class='thcss'>Número de camas</th>
      <th class='thcss'>Número de Utentes</th>
      <th class='thcss'>Número de Quartos</th>
      <th class='thcss' >Número de Beliches</th>
      <th class='thcss'>Localização(Endereço)</th>
      <th class='thcss'>Localização(Código de Postal)</th>
      <th class='thcss'>Localidade</th>
      <th class='thcss'>Freguesia</th>
      <th class='thcss'>Concelho</th>
      <th class='thcss'>Distrito </th>
      </tr>
    </thead> -->
    <!-- <tr id="count">
    <td id="demo"> -->
    <tbody id="replaceme">

</tbody>
    <!-- </td>
    </tr> -->
    <a href="#" id="down">Download</a>
    </table>
    <br>
    
   
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




$(document).ready(function(){
  $("#myInputlista").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTablelista tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


<script>
      function downLoad(){
        if (document.all){
            document.all["layer1"].style.visibility="hidden";
            document.all["layer2"].style.visibility="visible";
        } else if (document.getElementById){
            node = document.getElementById("layer1").style.visibility='hidden';
            node = document.getElementById("layer2").style.visibility='visible';
        }
      }
    </script>




     <script>
    // if( $('#replaceme td').length == 0) {
    //   document.getElementById("replaceme").innerHTML = "Não tem nada dentro da sua lista de exportação!"
    // }
    // else if(){
    var row_id;
    var linha;


    $('#sourcetable').on('click', "tr", function(e){
    row_id = $("td:first a.ajaxCall", this).attr("rel");
    // window.console&&console.log(JSON.parse(row_id));

    var table = document.getElementById("replaceme");
    var row   = table.insertRow(-1);
    var cell1 = row.insertCell(-1);
    linha = JSON.parse(row_id);
  
    

      cell1.innerHTML ='<div style="overflow-x:scroll; overflow-y:scroll; height:450px;"><table id="replaceme" class="table table-bordered table-striped" style="border:1px solid #2196F3;"><thead><tr><th class="thcss">Numero de Registo</th><th class="thcss">Data do Registo</th><th class="thcss">Nome do Alojamento</th><th class="thcss">Imovél Posterior 1951</th><th class="thcss">Data Abertura Público</th><th class="thcss">Modalidade</th><th class="thcss">Número de camas</th><th class="thcss">Número de Utentes</th><th class="thcss">Número de Quartos</th><th class="thcss">Número de Beliches</th><th class="thcss">Localização(Endereço)</th><th class="thcss">Localização(Código de Postal)</th><th class="thcss">Localidade</th><th class="thcss">Freguesia</th><th class="thcss">Concelho</th><th class="thcss">Distrito </th></tr></thead><tbody><tr><td>'+linha['numero_registo']+'</td><td>'+linha['Data_registo']+'</td><td>'+linha['Nome_Alojamento']+'</td><td>'+linha['Imovel_Posterior_1951']+'</td></tr></tbody></table></div></div>'


    window.console&&console.log(linha);
        // var csv = linha['numero_registo'] + "\t" + linha['Data_registo'];
        // var data = new Blob([csv]);
        // var a = document.getElementById('aa');
        // a.href = URL.createObjectURL(data);
    //  var cont = $('#replaceme tr td').length-1;
    //  document.getElementById("demo").innerHTML = "Tem " + cont + " Items na sua lista!";
     
    });
    $('#down').on('click', function(){
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
			
				for(var i=1; i<$('#replaceme table').length+1;i++){																
          excel.set(0,0,i,linha['numero_registo']);	
          excel.set(0,1,i,linha['Data_registo']);
          excel.set(0,2,i,linha['Nome_Alojamento']);
          excel.set(0,3,i,linha['Imovel_Posterior_1951']);															
          var d=randomDate(initDate,endDate);															
          excel.set(0,1,d.toLocaleString());														
          excel.set(0,2,$JExcel.toExcelLocalTime(d));											
          excel.set(0,3,$JExcel.toExcelLocalTime(d),dateStyle);										
          excel.set(0,4,"Some other text");															
        }	
					
		    excel.generate("ALOJAMENTOS.xlsx");
			
		});
  

  // } 
    
</script>



</html>
