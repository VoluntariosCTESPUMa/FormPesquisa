<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<script type="text/javascript" src="./includes/jszip.js"></script>
<script type="text/javascript" src="./includes/FileSaver.js"></script>
<script type="text/javascript" src="./includes/myexcel.js"></script>

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
        <option><?php ?></option>
      </select>
      <button type="submit">Pesquisar <i class="fa fa-search"></i></button>
    </form>
  </div>
  <div class="column" >
  <h4>Resultados</h4>
  <div style="overflow-x:scroll; overflow-y:scroll; height:450px;">
  <table> 
  <meta charset="utf-8"/>
  <?php include './includes/database.php';?>
</table>
</div>
  </div>
  <div class='column'>
    <h4>Lista de Exportação</h4>
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
    var row_id;
    var linha;

    $('#sourcetable').on('click', "tr", function(e){
    row_id = $("td:first a.ajaxCall", this).attr("rel");
    window.console&&console.log(JSON.parse(row_id));

    var table = document.getElementById("replaceme");
    var row   = table.insertRow(-1);
    var cell1 = row.insertCell(-1);
    linha = JSON.parse(row_id);

    cell1.innerHTML = '<table id="a"><tr><td class="wtf">'+linha['numero_registo']+'</td><td>'+linha['Data_registo']+'</td><td>'+linha['Nome_Alojamento']+'</td><td>'+linha['Imovel_Posterior_1951']+'</td></tr></table><br><a href="#" id="down">Download</a>';
    
    $('#down').on('click', function(){
      function randomDate(start, end) {
			var d= new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime()));
			return d;
		}
		  var excel = $JExcel.new("Calibri light 10 #333333");			// Default font
			
			// excel.set is the main function to generate content:
			// 		We can use parameter notation excel.set(sheetValue,columnValue,rowValue,cellValue,styleValue) 
			// 		Or object notation excel.set({sheet:sheetValue,column:columnValue,row:rowValue,value:cellValue,style:styleValue })
			// 		null or 0 are used as default values for undefined entries		
			
			excel.set( {sheet:0,value:"Alojamentos" } );
		    // excel.addSheet("Sheet 2");	
			
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
			
																					
				excel.set(0,0,1,linha['numero_registo']);	
        excel.set(0,1,1,linha['Data_registo']);
        excel.set(0,2,1,linha['Nome_Alojamento']);
        excel.set(0,3,1,linha['Imovel_Posterior_1951']);															
				var d=randomDate(initDate,endDate);															
				excel.set(0,1,d.toLocaleString());														
				excel.set(0,2,$JExcel.toExcelLocalTime(d));											
				excel.set(0,3,$JExcel.toExcelLocalTime(d),dateStyle);										
				excel.set(0,4,"Some other text");															
			
					
		    excel.generate("ALOJAMENTOS.xlsx");
			
		});
        // var csv = linha['numero_registo'] + "\t" + linha['Data_registo'];
        // var data = new Blob([csv]);
        // var a = document.getElementById('aa');
        // a.href = URL.createObjectURL(data);
    //  var cont = $('#replaceme tr td').length-1;
    //  document.getElementById("demo").innerHTML = "Tem " + cont + " Items na sua lista!";
     
    });
  

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