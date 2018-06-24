<?php

function putDB(){
include './includes/config.php'; //incluimos o ficheiro da ligacao
$con = getdb();//os dados desta serao retornados desta funcao
mysqli_set_charset($con, 'utf8'); //declaramos que a charset a usar e utf8
set_time_limit(1000000);//e absurdamente aumentamos o tempo limite
$query="";
$table="";
     $see="Select * from `alojamento`";
     $see2="Select * from `hotel`";
     $result=mysqli_query($con,$see);
     $result2=mysqli_query($con,$see2);
	 if(mysqli_num_rows($result)>=1)
{
    $see="delete from alojamento";
	$con->query($see);
}
if(mysqli_num_rows($result2)>=1)
{
    $see="delete from hotel";
	$con->query($see);
}


	
		$query = <<<eof
	LOAD DATA INFILE './aloj.csv'
	 INTO TABLE alojamento
	  FIELDS TERMINATED BY ','
	   OPTIONALLY ENCLOSED BY '"'
		   LINES TERMINATED BY '\r\n'
		   IGNORE 1 LINES
		   (numero_registo,Data_registo,Nome_Alojamento,Imovel_Posterior_1951,Data_Abertura_Publico,Modalidade,numero_camas,Numero_Utentes,numero_quartos,numero_beliches,Endereco,codigo_postal,Localidade,Freguesia,Concelho,Distrito,NUTT_II,Titular_da_Exploracao,Titular_Qualidade,Contribuinte,Tipo_Titular,Pais_Titular,Telefone,Fax,Telemovel,Email)
eof;
	
	$query2 = <<<eof
	LOAD DATA INFILE './hotel.csv'
	 INTO TABLE hotel
	  FIELDS TERMINATED BY ','
	   OPTIONALLY ENCLOSED BY '"'
		   LINES TERMINATED BY '\r\n'
		   IGNORE 1 LINES
		   (categoria,classificacao,unidade_hoteleira,diretor,email_diretor,diretor_comercial,email_diretor_comercial,email_geral,telefone,grupo_hoteleiro)
		   
eof;

//na query iremos usar o estilo LOAD DATA CSV.O ficheiro csv sempre necessitará estar na pasta C:/xampp/mysql/data
//nao conseguimos alterar o caminho,por mais que se especifique,ele sempre só procura dentro dessa pasta.Sem problemas.
$con->query($query);
$arr=mysqli_error_list($con);
$affr=mysqli_affected_rows($con);
$con->query($query2);
$arr2=mysqli_error_list($con);
$affr2=mysqli_affected_rows($con);

if($affr>0 && $affr2>0){
return "DONE";
}
else if($affr==-1 || $affr2==-1){
	return ($affr==-1)? "NOT INSERTED Alojamento":"NOT INSERTED Hotel";
}
		 
else{
	return "FILENOTFOUND";
}
}
 ?>