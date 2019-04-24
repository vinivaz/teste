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
?>
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
	if(!mysqli_query($con,"INSERT INTO cliente(nome,dt_nas,endereco,complementoend,cpf,email,telefone,sexo) value ('$strnome','$strdt','$strende','$strcomp','$strcpf','$stremail','$strtelefone','$strsexo')" )){
		echo("<h3 align='center'> falha ao inserir</h3>");
		header("Refresh:2; url='gerente_ini.php'");
	}
	else{
		echo("<h3 align= 'center' > inserido com sucesso! </h3>");
		header("Refresh:2; url='cliente_ini.php'"); 	
	}

?>
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>