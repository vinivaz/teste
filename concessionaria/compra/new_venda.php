<?php
	error_reporting(0);
	ini_set(“display_errors”, 0 );
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);

	$Codigo = $_GET['rbVeiculo'];
	$func_id = $_GET['func_id'];
	$valor = $_GET['valor'];

	echo $Codigo;
	echo $func_id;
	echo $valor;
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>venda</title>
	<script type="text/javascript">
		function cancelar(){
			window.location.replace("../gerente/gerente_ini.php");
		}
	</script>
</head>
<body>
	<table border="1%">
		<tr>
			<td>Nome:</td>
			<td>E-mail:</td>
			<td>Sexo:</td>
		</tr>
			<?php
			$sql = mysqli_query($con, 'SELECT * FROM cliente');
			while ($row = mysqli_fetch_assoc($sql)) {
				echo '<tr>';
				echo '<td align="center">' . "<a href=new_venda_2.php?cliente=" . $row['CLIENTE_ID'] . "&modelo=" . $Codigo . "&func_id=" . $func_id . '&valor='. $valor . ">" . $row['nome'] .'</td>';
				echo '<td>'.$row['email'].'</td>';
				echo '<td>'.$row['sexo'].'</td>';
			}
			?>
	</table>
	<table>
		<tr>
			<td><input type="button" name="cancelar" id="cancelar" value="cancelar" onclick="cancelar()"></td>
		</tr>
	</table>
</body>
</html>