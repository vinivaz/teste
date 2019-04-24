<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<style>
		table#daki{
			margin-top:100px;
		}
	</style>
	<title> gerente </title>
	<script type="text/javascript">
		function func(){
			window.location.replace("funcionario.php");
		}
		function veic(){
			window.location.replace("veiculo.php");
		}
		function clientes(){
			window.location.replace("../cliente/cliente_ini.php");
		}
		function relatorio(){
			alert(" em desenvolvimento ")
		}
		function promocao(){
			window.location.replace("../promocao/promocao_veiculos.php");
		}
		function comicao(){
			alert(" em desenvolvimento ")
		}
		function voltar(){
			window.location.replace("../index.php");
		}
	</script>
	<link rel="stylesheet" type="text/css" href="../css/estilo_gerente.css">
</head>

<body bgcolor="#585858">
	
	<header id="cabecalho">
		<input  id="search" type="text" placeholder="pesquisar..." /> <input id="enter" type="button" value="enter"/>
		<p>Roads</p>
		<nav id="menu">
			<ul>
				<li id="mar" class="menu">Promoçoes</li>
				<li class="menu">Carros</li>
				<li class="menu">Marcas</li>
			</ul>
		</nav>
	</header>
	<table id="daki">
		<tr>
			<td><center><input type="button" class="nor" name="func" onclick="func()" value="funcionarios"></center>  </td>
		</tr>
		<tr>
			<td><center> <input type="button" class="nor" name="veic" onclick="veic()" value="veiculos"> </center> </td>
		</tr>
		<tr>
			<td> <center><input type="button" class="nor" name="veic" onclick="clientes()" value="clientes"></center>  </td>
		</tr>
		<tr>
			<td><center> <input type="button" class="nor" name="veic" onclick="relatorio()" value="relatiorios"></center>  </td>
		</tr>
		<tr>
			<td><center> <input type="button" class="nor" name="veic" onclick="promocao()" value="promoções"> </center> </td>
		</tr>
		<tr>
			<td> <center><input type="button" class="nor" name="veic" onclick="comicao()" value="comição"></center>  </td>
		</tr>
		<tr>
			<td><center> <input type="button"  name="voltar" onclick="voltar()" class="voltar" value="voltar"> </center> </td>
		</tr>
	</table>
	<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>