<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/estilo_gerente.css">
<head>
	<title>Promoção</title>
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
	<h1>Promoção</h1>
	<table>
			<td>Veiculos em promoção</td>
		<tr>
			<td>Modelo:</td>
			<td>Ano:</td>
			<td>Preço:</td>
			<td>Preço Promocional:</td>
		</tr>
		<?php
			$sql = mysqli_query($con, 'SELECT * FROM veiculo');
			while ($row = mysqli_fetch_assoc($sql)) {
				if ($row['promocao'] > 0) {
					echo '<tr>';
					echo '<td align="center">' . "<a href=criar_promocao.php?rbVeiculo=" . $row['VEICULO_ID'] . ">" . $row['modelo'] . '</td>';
					echo '<td align="center">' . $row['ano'] . '</td>';
					echo '<td align="center">' . $row['preco'] . '</td>';
					echo '<td align="center">' . $row['preco_promo'] . '</td>';
					echo '<td align="center"><a href="alterar_promocao.php?ID='. $row['VEICULO_ID'] .'">ALTERAR</a></td>';
					echo '<td align="center"><a href="deletar_promocao.php?ID='. $row['VEICULO_ID'] .'" style="color:black">X</a></td>';
					echo '</tr>';
				}
			}
		?>
		<td> veiculos sem promoção </td>
		<tr>
			<td>Modelo:</td>
			<td>Ano:</td>
			<td>Preço:</td>
			<td>Preço Promocional:</td>
		</tr>
		<?php
			$sql = mysqli_query($con, 'SELECT * FROM veiculo');
			while ($row = mysqli_fetch_assoc($sql)) {
				if ($row['promocao'] == 0) {
					echo '<tr>';
					echo '<td align="center">' . "<a href=criar_promocao.php?rbVeiculo=" . $row['VEICULO_ID'] . ">" . $row['modelo'] . '</td>';
					echo '<td align="center">' . $row['ano'] . '</td>';
					echo '<td align="center">' . $row['preco'] . '</td>';
					echo '<td align="center">' . $row['preco_promo'] . '</td>';
					echo '</tr>';
				}
			}
		?>
	</table>
	<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>