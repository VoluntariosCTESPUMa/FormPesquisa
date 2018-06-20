<?php

include './includes/config.php'; //incluimos o ficheiro da ligacao
$con = getdb();//os dados desta serao retornados desta funcao

mysqli_set_charset($con, 'utf8'); //declaramos que a charset a usar e utf8
set_time_limit(1000000);//e absurdamente aumentamos o tempo limite
 if(file_exists ('C:xampp/mysql/data/alocmf.csv')){
	$del="Delete  from `alojamento`";//primeiro apagamos os dados ja existentes
	$con->query($del);
	$arr=mysqli_error_list($con); //se tiver erros na query esta variavel guardará-os a todos[em array]
	if(!mysqli_affected_rows($con)){
		echo "error";//no caso de nada ser mudado
	}
	else{
		$query = <<<eof
	LOAD DATA INFILE './alocmf.csv'
	 INTO TABLE alojamento
	  FIELDS TERMINATED BY ','
	   OPTIONALLY ENCLOSED BY '"'
		   LINES TERMINATED BY '\r\n'
		   IGNORE 1 LINES
		   (numero_registo,Data_registo,Nome_Alojamento,Imovel_Posterior_1951,Data_Abertura_Publico,Modalidade,numero_camas,Numero_Utentes,numero_quartos,numero_beliches,Endereco,codigo_postal,Localidade,Freguesia,Concelho,Distrito,NUTT_II,Titular_da_Exploracao,Titular_Qualidade,Contribuinte,Tipo_Titular,Pais_Titular,Telefone,Fax,Telemovel,Email)
eof;
//na query iremos usar o estilo LOAD DATA CSV.O ficheiro csv sempre necessitará estar na pasta C:/xampp/mysql/data
//nao conseguimos alterar o caminho,por mais que se especifique,ele sempre só procura dentro dessa pasta.Sem problemas.
$con->query($query);
$arr=mysqli_error_list($con);
if(mysqli_affected_rows($con)>0){
echo "<script type=\"text/javascript\">
alert(\"Done.\");
window.location = \"index.php\"
</script>";		
}
else if(mysqli_affected_rows($con)==-1){
	echo "<script type=\"text/javascript\">
	alert(\"Error.\");
	window.location = \"index.php\"
	</script>";	
}
	}	 
}
else{
	echo "<script type=\"text/javascript\">
	alert(\"Error.\");
	window.location = \"index.php\"
	</script>";	
}
 ?>