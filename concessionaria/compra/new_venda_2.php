<?php
	error_reporting(0);
	ini_set(“display_errors”, 0 );
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);

	$Codigo = $_GET['modelo'];
	$CodigoCli = $_GET['cliente'];
	$func_id = $_GET['func_id'];
	$valor = $_GET['valor'];

	echo 'modelo:'.$Codigo.'<br/>';
	echo 'cliente:'.$CodigoCli.'<br/>';
	echo 'Funcionario:'.$func_id.'<br/>';
	echo 'valor:'.$valor.'<br/>';

	$sql = mysqli_query($con, 'SELECT * FROM cliente');
	
	if(!mysqli_query($con,"INSERT INTO compra(funcionario_id,cliente_id,veiculo_id,valor) value ('$func_id','$CodigoCli','$Codigo','$valor')" )){
		echo("<h3 align='center'> falha ao inserir</h3>");
		header("Refresh:1; url='../gerente/gerente_ini.php'");
		
	}
	else{
		echo("<h3 align= 'center' > inserido com sucesso! </h3>");
		header("Refresh:1; url='../gerente/gerente_ini.php'");
		 	
	}
?>