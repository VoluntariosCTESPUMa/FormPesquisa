<!DOCTYPE html>
<html>
<head>
<title>Alojamento</title>
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
  <a href="./hotel.php">Hoteis</a>
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
  <a href="#"  onclick="addall()">Adicionar todos <i class="glyphicon glyphicon-file"></i> </a>
  <div style="overflow-x:scroll; overflow-y:scroll; height:380px;">
  <table > 
  <meta charset="utf-8"/>
  <?php include './includes/getalojamento.php';?>
</table>
</div>
  </div>
  


  <div class='column' >
  <h4 style="text-align:center;background-color:#2196F3;color:white;height:60px;" ><br>Lista de Exportação <i class="fa fa-bars"></i></h4>
  <a href="#" style="display:none;" id="rem"  onclick="removeall()">Remover todos <i class="glyphicon glyphicon-file"></i> </a>
  <a href="#" style="display:none;" id="down">Exportar lista <i class="glyphicon glyphicon-file"></i> </a>
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

  <p style="text-align:center">A pedido do turismo da madeira , foi desenvolvida a seguinte ferramenta pelos alunos da UMa </p>
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


function removeall(){
  while(arr.length > 0) {
    arr.pop();//vai retirando 1 a 1 elemento do array
}
  d = document.getElementById("replaceme");
  window.console&&console.log(d);
  d.innerHTML=""; //esvaziamos a tabela
  var a= document.getElementById('down')
       a.style.display="none"; // e escondemos o botao de download e remover
    a= document.getElementById('rem')
       a.style.display="none";

}
function addall(){
      var linha={}; //criamos uma variavel local
      var t = document.getElementById("sourcetable");//pegamos no elemento da primeira tabela
      d = t.getElementsByTagName("tr");//pegamos na TR
     var cabeca=["numero_registo","Data_registo","Nome_Alojamento","Imovel_Posterior_1951","Data_Abertura_Publico","Modalidade","numero_camas","Numero_Utentes","numero_quartos","numero_beliches","Endereco","codigo_postal","Localidade","Freguesia","Concelho","Distrito","NUTT_II","Titular_da_Exploracao","Titular_Qualidade","Contribuinte","Tipo_Titular","Pais_Titular","Telefone","Fax","Telemovel","Email"];  //defenimos as propriedades do objeto
      for(var i=1;i!=d.length;i++){
        linha={};//esvaziamos o objeto
          var temp=d[i].innerText.split("\t"); //agarramos nas trs das linhas seguintes
        for(var k=0;k!=26;k++){
     linha[cabeca[k]]=temp[k];//adicionamos a cada propriedade a sua entrada
    }
    arr.push(linha) // e damos push
    var table = document.getElementById("replaceme");//inserimos esta nova entrada na lista do outro lado
    var row   = table.insertRow(-1);
    var cell1 = row.insertCell(-1);
    cell1.innerHTML = '<table id="a"><tr><td onclick="tdclick(event,$(this))"><a style="color:red;" href="#" title="Clique aqui para remover esta entrada">'+linha['numero_registo']+'</a></td><td>'+linha['Data_registo']+'</td><td>'+linha['Nome_Alojamento']+'</td><td>'+linha['Imovel_Posterior_1951']+'</td><td>'+linha['Data_Abertura_Publico']+'</td><td>'+linha['Modalidade']+'</td><td>'+linha['numero_camas']+'</td><td>'+linha['Numero_Utentes']+'</td><td>'+linha['numero_quartos']+'</td><td>'+linha['numero_beliches']+'</td><td>'+linha['Endereco']+'</td><td>'+linha['codigo_postal']+'</td><td>'+linha['Localidade']+'</td><td>'+linha['Freguesia']+'</td><td>'+linha['Concelho']+'</td><td>'+linha['Distrito']+'</td><td>'+linha['NUTT_II']+'</td><td>'+linha['Titular_da_Exploracao']+'</td><td>'+linha['Titular_Qualidade']+'</td><td>'+linha['Contribuinte']+'</td><td>'+linha['Tipo_Titular']+'</td><td>'+linha['Pais_Titular']+'</td><td>'+linha['Telefone']+'</td><td>'+linha['Fax']+'</td><td>'+linha['Telemovel']+'</td><td>'+linha['Email']+'</td></tr></table><br>';    	         
      
    
      }
      var a= document.getElementById('down') //e mostramos os botoes de download e remover
       a.style.display="block";
       a= document.getElementById('rem')
       a.style.display="block";

    }


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
        var a=e.target.innerText;//agarra o id do produto presente na primeira TD
        for(var i=0;i!=$('#replaceme table').length;i++){
          if(a==arr[i]['numero_registo']){
          arr.splice(i,1) //quando encontra no array,dá splice
          break;//saimos do for
          }
        }
        trclick(thistr);//executamos a funcao que irá retirar aquela tr da tabela
        if(arr.length==0){
       var a= document.getElementById('down')
       a.style.display="none";
       a= document.getElementById('rem')
       a.style.display="none";
        }
      }
        else
        return "";
      }

function trclick(row){
  row.parent().parent().parent().parent().remove();
  //usando o $(this) como segundo parametro da outra funcao,aqui removemos o TR
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
window.console&&console.log(linha);
      
      arr.push(linha);
    cell1.innerHTML = '<table id="a"><tr><td onclick="tdclick(event,$(this))"><a style="color:red;" href="#" title="Clique aqui para remover esta entrada">'+linha['numero_registo']+'</a></td><td>'+linha['Data_registo']+'</td><td>'+linha['Nome_Alojamento']+'</td><td>'+linha['Imovel_Posterior_1951']+'</td><td>'+linha['Data_Abertura_Publico']+'</td><td>'+linha['Modalidade']+'</td><td>'+linha['numero_camas']+'</td><td>'+linha['Numero_Utentes']+'</td><td>'+linha['numero_quartos']+'</td><td>'+linha['numero_beliches']+'</td><td>'+linha['Endereco']+'</td><td>'+linha['codigo_postal']+'</td><td>'+linha['Localidade']+'</td><td>'+linha['Freguesia']+'</td><td>'+linha['Concelho']+'</td><td>'+linha['Distrito']+'</td><td>'+linha['NUTT_II']+'</td><td>'+linha['Titular_da_Exploracao']+'</td><td>'+linha['Titular_Qualidade']+'</td><td>'+linha['Contribuinte']+'</td><td>'+linha['Tipo_Titular']+'</td><td>'+linha['Pais_Titular']+'</td><td>'+linha['Telefone']+'</td><td>'+linha['Fax']+'</td><td>'+linha['Telemovel']+'</td><td>'+linha['Email']+'</td></tr></table><br>';    	         
   // window.console&&console.log(linha);
        // var csv = linha['numero_registo'] + "\t" + linha['Data_registo'];
        // var data = new Blob([csv]);
        // var a = document.getElementById('aa');
        // a.href = URL.createObjectURL(data);
    //  var cont = $('#replaceme tr td').length-1;
    //  document.getElementById("demo").innerHTML = "Tem " + cont + " Items na sua lista!";
    var a= document.getElementById('down')
       a.style.display="block";
       a= document.getElementById('rem')
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
			
 
			var headers=["Número Registo", "Data Registo", "Nome do Alojamento", "Imovél Posterior 1951", "Data Abertura Público", "Modalidade", "Número de camas", "Número de Utentes", "Número de Quartos", "Número de Beliches", "Endereço", "Código de Postal", "Localidade", "Freguesia", "Concelho", "Distrito", "NUTT II","Titular_da_Exploracao","Titular_Qualidade","Contribuinte","Tipo_Titular","Pais_Titular","Telefone","Fax","Telemovel","Email"];							// This array holds the HEADERS text
      
      
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
          excel.set(0,4,index+1,arr[index]['Data_Abertura_Publico']);
          excel.set(0,5,index+1,arr[index]['Modalidade']);
          excel.set(0,6,index+1,arr[index]['numero_camas']);
          excel.set(0,7,index+1,arr[index]['Numero_Utentes']);
          excel.set(0,8,index+1,arr[index]['numero_quartos']);
          excel.set(0,9,index+1,arr[index]['numero_beliches']);
          excel.set(0,10,index+1,arr[index]['Endereco']);
          excel.set(0,11,index+1,arr[index]['codigo_postal']);
          excel.set(0,12,index+1,arr[index]['Localidade']);
          excel.set(0,13,index+1,arr[index]['Freguesia']);
          excel.set(0,14,index+1,arr[index]['Concelho']);
          excel.set(0,15,index+1,arr[index]['Distrito']);
          excel.set(0,16,index+1,arr[index]['NUTT_II']);
          excel.set(0,17,index+1,arr[index]['Titular_da_Exploracao']);
          excel.set(0,18,index+1,arr[index]['Titular_Qualidade']);
          excel.set(0,19,index+1,arr[index]['Contribuinte']);
          excel.set(0,20,index+1,arr[index]['Tipo_Titular']);
          excel.set(0,21,index+1,arr[index]['Pais_Titular']);
          excel.set(0,22,index+1,arr[index]['Telefone']);
          excel.set(0,23,index+1,arr[index]['Fax']);
          excel.set(0,24,index+1,arr[index]['Telemovel']);
          excel.set(0,25,index+1,arr[index]['Email']);
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

