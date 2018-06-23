<?php

function putDB($name){
include './includes/config.php'; //incluimos o ficheiro da ligacao
$con = getdb();//os dados desta serao retornados desta funcao
mysqli_set_charset($con, 'utf8'); //declaramos que a charset a usar e utf8
set_time_limit(1000000);//e absurdamente aumentamos o tempo limite
$query="";
 if(file_exists ('C:xampp/mysql/data/'.$name.'.csv')){
	 $see="Select * from `alojamento`";
	 $result=mysqli_query($con,$see);
	 if(mysqli_num_rows($result)>=1)
{
	$del="Delete  from `alojamento`";//primeiro apagamos os dados ja existentes
	$con->query($del);
}


		if($name=='aloj'){
		$query = <<<eof
	LOAD DATA INFILE './aloj.csv'
	 INTO TABLE alojamento
	  FIELDS TERMINATED BY ','
	   OPTIONALLY ENCLOSED BY '"'
		   LINES TERMINATED BY '\r\n'
		   IGNORE 1 LINES
		   (numero_registo,Data_registo,Nome_Alojamento,Imovel_Posterior_1951,Data_Abertura_Publico,Modalidade,numero_camas,Numero_Utentes,numero_quartos,numero_beliches,Endereco,codigo_postal,Localidade,Freguesia,Concelho,Distrito,NUTT_II,Titular_da_Exploracao,Titular_Qualidade,Contribuinte,Tipo_Titular,Pais_Titular,Telefone,Fax,Telemovel,Email)
eof;
	}
// 	else if($name=='hotel'){
// 	$query = <<<eof
// 	LOAD DATA INFILE './hotel.csv'
// 	 INTO TABLE hotel
// 	  FIELDS TERMINATED BY ','
// 	   OPTIONALLY ENCLOSED BY '"'
// 		   LINES TERMINATED BY '\r\n'
// 		   IGNORE 1 LINES
// 		   (numero_registo,Data_registo,Nome_Alojamento,Imovel_Posterior_1951,Data_Abertura_Publico,Modalidade,numero_camas,Numero_Utentes,numero_quartos,numero_beliches,Endereco,codigo_postal,Localidade,Freguesia,Concelho,Distrito,NUTT_II,Titular_da_Exploracao,Titular_Qualidade,Contribuinte,Tipo_Titular,Pais_Titular,Telefone,Fax,Telemovel,Email)
		   
// eof;
// 	}

//na query iremos usar o estilo LOAD DATA CSV.O ficheiro csv sempre necessitará estar na pasta C:/xampp/mysql/data
//nao conseguimos alterar o caminho,por mais que se especifique,ele sempre só procura dentro dessa pasta.Sem problemas.
$con->query($query);
$arr=mysqli_error_list($con);
if(mysqli_affected_rows($con)>0){
return "DONE";
}
else if(mysqli_affected_rows($con)==-1){
	return "NOTINSERTED";
}
	}	 
else{
	return "FILENOTFOUND";
}
}
 ?>