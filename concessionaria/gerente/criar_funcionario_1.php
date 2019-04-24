<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);

	$strnome = trim($_POST["nome"]);
	$strdt = trim($_POST["ddn"]);
	$strende = trim($_POST["endereco"]);
	$strcomp = trim($_POST["complementoend"]);
	$strcpf = trim($_POST["cpf"]);
	$stremail = trim($_POST["email"]);
	$strtelefone = trim($_POST["fone"]);
	$strsexo = trim($_POST["sexo"]);
	$strlogin = trim($_POST["login"]);
	$strsenha = trim($_POST["senha"]);

	if(!mysqli_query($con,"INSERT INTO funcionario(nome,dt_nas,endereco,complementoend,cpf,email,telefone,sexo,login,senha) value ('$strnome','$strdt','$strende','$strcomp','$strcpf','$stremail','$strtelefone','$strsexo','$strlogin','$strsenha')" )){
		echo("<h3 align='center'> falha ao inserir</h3>");
		header("Refresh:2; url='gerente_ini.php'");
	}
	else{
		echo("<h3 align= 'center' > inserido com sucesso! </h3>");
		header("Refresh:2; url='funcionario.php'"); 	
	}

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

<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>