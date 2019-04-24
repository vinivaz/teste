<?php
	error_reporting(0);
	ini_set(“display_errors”, 0 );
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);

	$func_id = $_GET['ID'];
	

?>
<!DOCTYPE html>
<html>
<head>
	<title> venda </title>
	<script type="text/javascript">
		function voltar(){
			window.location.replace("../gerente/gerente_ini.php")
		}
		function teste(){
			document.frmdados.action="new_venda.php";
			document.frmdados.submit();
		}
	</script>
</head>
<body>
	<form id="frmdados" name="frmdados" METHOD="GET">
	<input type="hidden" name="func_id" id="func_id" value="<?php print $func_id?>">
	<table>
		<tr>
			<td>modelo:</td>
			<td>preço:</td>
			<td>ano:</td>
		</tr>
		<?php
			$sql = mysqli_query($con, 'SELECT * FROM veiculo');
			while ($row = mysqli_fetch_assoc($sql)) {
				echo '<tr>';
				echo '<td align="center"><a href="New_venda.php?rbVeiculo=' . $row['VEICULO_ID'] . '&valor=' . $row['preco'] .'&func_id='. $func_id .' ">'. $row['modelo'] .'</a></td>';
				echo '<td align="center">'. $row['preco'];
				echo '<td align="center">'. $row['ano'];
				echo '</tr>';
			}
		?>
	</form>
		<tr>
		<td><input type="button" name="voltar" onclick="voltar()" value="voltar"></td>
		<td><input type="button" name="comprar" id="comprar" onclick="teste()"></td>
		</tr>
	</table>
</body>
</html>