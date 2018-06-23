<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<script type="text/javascript" src="./includes/jszip.js"></script>
<script type="text/javascript" src="./includes/FileSaver.js"></script>
<script type="text/javascript" src="./includes/myexcel.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>

<div class="topnav">
  <a href="./home.php">Turismo Madeira</a>
  <a href="/hoteis">Hoteis</a>
  <a class="active" href="./index.php">Alojamentos</a>
</div>

<div class="row" style="margin:2rem;">
<div class="search-container" style="margin-left:0.5rem;">
<div class="direitinho">
  <input onkeyup="myFunction()" class="form-control" id='myInput' type='text' style='width: 28%;height:35px;' placeholder='Search..'>
  <select class="form-control" style='width: 20%; margin-left: 10px; height:35px;' id="mySelect">
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
    </div></div>
  <div class="column" >
  <h4 style="text-align:center;background-color:#2196F3;color:white;height:60px;" ><br>Resultados <i class="fa fa-search"></i></h4>
  <div style="overflow-x:scroll; overflow-y:scroll; height:380px;">
  <table > 
  <meta charset="utf-8"/>
  <?php include './includes/database.php';?>
</table>
</div>
  </div>
  


  <div class='column' >
  <h4 style="text-align:center;background-color:#2196F3;color:white;height:60px;" ><br>Lista de Exportação <i class="fa fa-bars"></i></h4>
  <a href="#" style="display:none;" id="down">Importar lista <i class="glyphicon glyphicon-file"></i> </a>
  <br>
  <div class="column" style="overflow-y:scroll; width:100%;" >

  
    <table id="replaceme" >
    <!-- <tr id="count">
    <td id="demo">

    </td>
    </tr> -->
   
   
    <br>
    
    </table>
    </div>
    <br>

    <button class="collapsible">Turismo da Madeira</button>
<div class="content">
  <p style="text-align:left">A pedido do turismo da madeira , foi desenvolvida a seguinte ferramenta pelos alunos da UMa do curso TPSI </p>
</div>
<style>


/* .navbar {
  overflow: hidden;
  background-color: #333;  
  position: fixed;
  bottom: 0;
  left:0;
  height:60px;
  width: 100%;
}

.navbar h5 {
  float: center;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px;
  text-decoration: none;
  font-size: 17px;
}

.navbar:hover {
  background-color:#2196F3;
  color: black;
} */

.collapsible {
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    background-color: #333;  
  position: fixed;
  bottom: 0;
  left:0;
  height:55px;

}

.active, .collapsible:hover {
    background-color: #555;
}

.content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #333;  
    color:white;
  position: fixed;
  bottom: 0;
  right:0;
  height:55px;
  width: 50%;
}

</style>    
<script>

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}
 


function myFunction() {
  var x = document.getElementById("mySelect").selectedIndex;
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("sourcetable");
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
        if(arr.length==0){
       var a= document.getElementById('down')
       a.style.display="none";
        }
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
    cell1.innerHTML = '<table id="a"><tr><td onclick="tdclick(event,$(this))"><a style="color:red;" href="#" title="Clique aqui para remover esta entrada">'+linha['numero_registo']+'</a></td><td>'+linha['Data_registo']+'</td><td>'+linha['Nome_Alojamento']+'</td><td>'+linha['Imovel_Posterior_1951']+'</td></tr></table><br>';
   // window.console&&console.log(linha);
        // var csv = linha['numero_registo'] + "\t" + linha['Data_registo'];
        // var data = new Blob([csv]);
        // var a = document.getElementById('aa');
        // a.href = URL.createObjectURL(data);
    //  var cont = $('#replaceme tr td').length-1;
    //  document.getElementById("demo").innerHTML = "Tem " + cont + " Items na sua lista!";
    var a= document.getElementById('down')
       a.style.display="block";
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

.direitinho {
 display: flex;
 flex-wrap: wrap;
}

#a{
  border-style:none;
}
</style>



</body>
</html>

