<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
	
	$Codigo=$_GET['ID'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link href="../css/estilo_gerente.css" rel="stylesheet">
	<title> criado </title>
</head>
<body bgcolor="#585858">
	
	<header id="cabecalho">
		<p>Roads</p>
		<nav id="menu">
			<ul type="disc">
				<li class="menu">Promoçoes</li>
				<li class="menu">Carros</li>
				<li class="menu">Marcas</li>
				<li class="menu">seminovos</li>
				<li class="menu">Novos</li>
			</ul>
		</nav>
	</header>
<?php
	if(!mysqli_query($con, "DELETE FROM funcionario WHERE FUNCIONARIO_ID='$Codigo'")){
		echo("<h3 align='center'>ERRO AO DELETAR FUNCIONARIO!</h3>");
		header("Refresh:2; url='funcionario.php'");
	}
	else{
		echo("<h3 align='center'>FUNCIONARIO DELETADO COM SUCESSO!</h3>");
		header("Refresh:2; url='funcionario.php'");
	}
?>
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>
