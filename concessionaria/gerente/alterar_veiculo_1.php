<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);

	$Codigo=$_POST["ID"];

	$strmodelo = trim($_POST["modelo"]);
	$strfabricante = $_POST["fabricante"];
	$strcor = trim($_POST["cor"]);
	$strano = trim($_POST["ano"]);
	$strchassi = trim($_POST["chassi"]);
	$strplaca = trim($_POST["placa"]);
	$strdescricao = trim($_POST["descricao"]);
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
	if(!mysqli_query($con, "UPDATE veiculo SET modelo='$strmodelo', fabricante='$strfabricante', cor='$strcor', ano='$strano', chassi='$strchassi', placa = '$strplaca', descricao='$strdescricao'
		WHERE VEICULO_ID='$Codigo'")){
		echo("<h3 align='center'>ERRO AO ATUALIZAR DADOS</h3>");
		header("Refresh:2; url='veiculo.php'");
	}
	else{
		echo("<h3 align='center'>DADOS ATUALIZADOS COM SUCESSO!</h3>");
		header("Refresh:2; url='veiculo.php'");
	}
?>
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>