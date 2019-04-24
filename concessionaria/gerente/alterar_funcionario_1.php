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
	$strlogin = trim($_POST["login"]);
	$strsenha = trim($_POST["senha"]);
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
	if(!mysqli_query($con, "UPDATE funcionario SET nome='$strnome', dt_nas='$strdt', endereco='$strende', complementoend='$strcomp', CPF='$strcpf', email = '$stremail', telefone='$strtelefone', sexo='$strsexo', login='$strlogin', senha='$strsenha' 
		WHERE FUNCIONARIO_ID='$Codigo'")){
		echo("<h3 align='center'>ERRO AO ATUALIZAR DADOS</h3>");
		header("Refresh:2; url='../professor_ini.php'");
	}
	else{
		echo("<h3 align='center'>DADOS ATUALIZADOS COM SUCESSO!</h3>");
		header("Refresh:2; url='funcionario.php'");
	}
?>
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>