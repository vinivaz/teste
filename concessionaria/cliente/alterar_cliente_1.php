<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);

	$Codigo=$_POST["ID"];

	$strnome = trim($_POST["nome"]);
	$strdt = $_POST["ddn"];
	$strende = trim($_POST["endereco"]);
	$strcomp = trim($_POST["complementoend"]);
	$strcpf = trim($_POST["cpf"]);
	$stremail = trim($_POST["email"]);
	$strtelefone = trim($_POST["fone"]);
	$strsexo = trim($_POST["sexo"]);
?>
<!DOCTYPE html>
<html>
<head>
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
	if(!mysqli_query($con, "UPDATE cliente SET nome='$strnome', dt_nas='$strdt', endereco='$strende', complementoend='$strcomp', CPF='$strcpf', email = '$stremail', telefone='$strtelefone', sexo='$strsexo'
		WHERE CLIENTE_ID='$Codigo'")){
		echo("<h3 align='center'>ERRO AO ATUALIZAR DADOS</h3>");
		header("Refresh:2; url='../cliente_ini.php'");
	}
	else{
		echo("<h3 align='center'>DADOS ATUALIZADOS COM SUCESSO!</h3>");
		header("Refresh:2; url='cliente_ini.php'");
	}
?>
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>