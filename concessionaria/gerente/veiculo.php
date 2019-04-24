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
	<meta charset="utf-8"/>
	<title> Veiculos </title>
	<script type="text/javascript">
		function criar(){
			window.location.replace("cadastrar_veiculo.php");
		}
		function voltar(){
			window.location.replace("gerente_ini.php")
		}
	</script>
	<link href="../css/estilo_gerente.css" rel="stylesheet">
</head>
<body>
	
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
		<?php
			$sql = mysqli_query($con, 'SELECT * FROM veiculo');
			while ($row = mysqli_fetch_assoc($sql)) {
				echo '<tr>';
				echo '<td align="center">' . "<a href=visualizar_veiculos.php?rbVeiculo=" . $row['VEICULO_ID'] . ">" . $row['modelo'] . '</td>';
				echo '<td align="center"><a href="alterar_veiculo.php?ID='. $row['VEICULO_ID'] .'"> ALTERAR</a></td>';
				echo '<td align="center"><a href="deletar_veiculo.php?ID='. $row['VEICULO_ID'] . 'style="color:black">X</a></td>';
				echo '</tr>';
			}
		?>
		<tr>
		<td><input type="button" name="criar" onclick="criar()" value="Criar"></td>
		<td><input type="button" class="voltar" name="voltar" onclick="voltar()" value="voltar"></td>
		</tr>
	</table>
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>