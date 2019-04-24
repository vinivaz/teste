<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
?>
<!DOCTYPE html>
<html>
<head>
	<link href="../css/estilo_gerente.css" rel="stylesheet">
	<title>clientes</title>
	<script type="text/javascript">
		function criar(){
			window.location.replace("criar_cliente.php");
		}
		function voltar(){
			window.location.replace("../gerente/gerente_ini.php");
		}
	</script>
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
	<table>
		<tr>
			<?php
			$sql = mysqli_query($con, 'SELECT * FROM cliente');
			while ($row = mysqli_fetch_assoc($sql)) {
				echo '<tr>';
				echo '<td align="center">' . "<a href=visualizar_cliente.php?rbFuncionario=" . $row['CLIENTE_ID'] . ">" . $row['nome'] . '</td>';
				echo '<td align="center"><a href="editarCliente.php?ID='. $row['CLIENTE_ID'] .'"> ALTERAR</a></td>';
				echo '<td align="center"><a href="deletar_Cliente.php?ID='. $row['CLIENTE_ID'] . 'style="color:black">X</a></td>';
				echo '</tr>';
			}
		?>
		</tr>
		<tr>
			<td> <input type="button" name="criar_cliente" id="criar_cliente" value="criar cliente" onclick="criar()"> </td>
			<td><input type="button" class="voltar" name="volt" onclick="voltar()" value="voltar"/></td>
		</tr>
	</table>
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>