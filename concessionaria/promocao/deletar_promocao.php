<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
	$Codigo=$_GET["ID"];
?>
<head>
	<meta charset="utf-8"/>
	 <link rel="stylesheet" type="text/css" href="../css/estilo_gerente.css">
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
	if(!mysqli_query($con, "UPDATE veiculo SET preco_promo = '0', promocao = '0', obs_promo = 'nada' WHERE VEICULO_ID='$Codigo'")){
		echo("<h3 align='center'>ERRO AO ATUALIZAR DADOS</h3>");
	}else{
		echo("<h3 align='center'>DADOS ATUALIZADOS COM SUCESSO!</h3>");
		header("Refresh:2; url='promocao_veiculos.php'");
	}
?>
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>