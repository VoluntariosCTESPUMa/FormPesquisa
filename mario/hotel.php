<!DOCTYPE html>
<html>
<head>
<title>Hotel</title>
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
  <a class="active" href="./hotel.php">Hoteis</a>
  <a  href="./alojamento.php">Alojamentos</a>
</div>

<div class="row" style="margin:2rem;">
<div class="search-container" style="margin-left:0.5rem;">
<div class="direitinho">
  <input onkeyup="myFunction()" class="form-control" id='myInput' type='text' style='width: 28%;height:35px;' placeholder='Search..'>
  <select class="form-control" style='width: 20%; margin-left: 10px; height:35px;' id="mySelect">
        <option value="0">IdHotel(BD)</option>
        <option value="1">Categoria</option>
        <option value="2">Classificação</option>
        <option value="3">Unidade Hoteleira</option>
        <option value="4">Diretor</option>
        <option value="5">Diretor Comercial</option>
        <option value="6">E-mail Diretor Comercial</option>
        <option value="7">E-mail Geral</option>
        <option value="8">Telefone</option>
        <option value="9">Grupo Hoteleiro</option>
    </select>
    </div></div>
  <div class="column" >

  <h4 style="text-align:center;background-color:#2196F3;color:white;height:60px;" ><br>Resultados <i class="fa fa-search"></i></h4>
  <a href="#"  onclick="addall()">Adicionar todos <i class="glyphicon glyphicon-file"></i> </a>
  <div style="overflow-x:scroll; overflow-y:scroll; height:380px;">
  <table > 
  <meta charset="utf-8"/>
  <?php include './includes/gethotel.php';?>
</table>
</div>
  </div>
  


  <div class='column' >
  <h4 style="text-align:center;background-color:#2196F3;color:white;height:60px;" ><br>Lista de Exportação <i class="fa fa-bars"></i></h4>
  <a href="#" style="display:none;" id="rem"  onclick="removeall()">Remover todos <i class="glyphicon glyphicon-file"></i> </a>
  <a href="#" style="display:none;" id="down">Exportar lista <i class="glyphicon glyphicon-file"></i> </a>
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
      
     var cabeca=["IdHotel","categoria","classificacao","unidade_hoteleira","diretor","email_diretor","diretor_comercial","email_diretor_comercial","email_geral","telefone","grupo_hoteleiro"];  //defenimos as propriedades do objeto
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
    cell1.innerHTML = '<table id="a"><tr><td onclick="tdclick(event,$(this))"><a style="color:red;" href="#" title="Clique aqui para remover esta entrada">'+linha['IdHotel']+'</a></td><td>'+linha['categoria']+'</td><td>'+linha['classificacao']+'</td><td>'+linha['unidade_hoteleira']+'</td><td>'+linha['diretor']+'</td><td>'+linha['email_diretor']+'</td><td>'+linha['diretor_comercial']+'</td><td>'+linha['email_diretor_comercial']+'</td><td>'+linha['email_geral']+'</td><td>'+linha['telefone']+'</td><td>'+linha['grupo_hoteleiro']+'</td></tr></table><br>';
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
          if(a==arr[i]['IdHotel']){
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
    cell1.innerHTML = '<table id="a"><tr><td onclick="tdclick(event,$(this))"><a style="color:red;" href="#" title="Clique aqui para remover esta entrada">'+linha['IdHotel']+'</a></td><td>'+linha['categoria']+'</td><td>'+linha['classificacao']+'</td><td>'+linha['unidade_hoteleira']+'</td><td>'+linha['diretor']+'</td><td>'+linha['email_diretor']+'</td><td>'+linha['diretor_comercial']+'</td><td>'+linha['email_diretor_comercial']+'</td><td>'+linha['email_geral']+'</td><td>'+linha['telefone']+'</td><td>'+linha['grupo_hoteleiro']+'</td></tr></table><br>';
    
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
			
			excel.set( {sheet:0,value:"Hoteis" } );
			
			var evenRow=excel.addStyle ( { 																	// Style for even ROWS
				border: "none,none,none,thin #333333"});													// Borders are LEFT,RIGHT,TOP,BOTTOM. Check $JExcel.borderStyles for a list of valid border styles
			var oddRow=excel.addStyle ( { 																	// Style for odd ROWS
				fill: "#ECECEC" , 																			// Background color, plain #RRGGBB, there is a helper $JExcel.rgbToHex(r,g,b)
				border: "none,none,none,thin #333333"}); 
			
 
			var headers=["Categoria","Classificacao","Unidade Hoteleira","Diretor","Email Diretor","Diretor Comercial","Email Diretor Comercial","Email Geral","Telefone","Grupo Hoteleiro"];  //defenimos as propriedades do objeto							// This array holds the HEADERS text
      
      
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
          excel.set(0,0,index+1,arr[index]['categoria']);	
          excel.set(0,1,index+1,arr[index]['classificacao']);
          excel.set(0,2,index+1,arr[index]['unidade_hoteleira']);
          excel.set(0,3,index+1,arr[index]['diretor']);		
          excel.set(0,4,index+1,arr[index]['email_diretor']);	
          excel.set(0,5,index+1,arr[index]['diretor_comercial']);	
          excel.set(0,6,index+1,arr[index]['email_diretor_comercial']);	
          excel.set(0,7,index+1,arr[index]['email_geral']);	
          excel.set(0,8,index+1,arr[index]['telefone']);	
          excel.set(0,9,index+1,arr[index]['grupo_hoteleiro']);														

          var d=randomDate(initDate,endDate);															
          excel.set(0,1,d.toLocaleString());														
          excel.set(0,2,$JExcel.toExcelLocalTime(d));											
          excel.set(0,3,$JExcel.toExcelLocalTime(d),dateStyle);										
          excel.set(0,4,"Some other text");			
         								
        })	
					
        excel.generate("HOTEL.xlsx");
      
			
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

