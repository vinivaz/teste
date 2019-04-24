<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
	$Codigo=$_GET["rbVeiculo"];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/estilo_gerente.css">
	<title>Criando promoção</title>
	<script type="text/javascript">
		function criar(){
		strvalor = document.frmdados.valorpromo.value;
			if (strvalor.length > 0) {
				document.frmdados.action = "criar_promocao_1.php";
				document.frmdados.submit();
			}
			else{
				alert("informe o valor promocional");
				document.frmdados.valorpromo.focus();
			}
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
		<h3>Criar promoção</h3>
		<form name="frmdados" ID="frmdados" METHOD="POST">
		<input type="hidden" name="VEICULO_ID" id="VEICULO_ID" value="<?php print $Codigo?>">
		<?php
		$sql = mysqli_query($con, "SELECT * FROM veiculo WHERE VEICULO_ID='$Codigo'");
		while ($row = mysqli_fetch_assoc($sql)) {
			echo "<tr>";
			echo "<td>" . "veiculo:" . $row["modelo"] . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>" . "Preço:" . $row["preco"] . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>" . "Valor Promocional:   " . "<input type='text' name='valorpromo' id='valorpromo'>" . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>" . "<textarea name='observacoes' id='observacoes'> Observações </textarea>" . "</td>";
			echo "</tr>";
		}
		?>
		</form>
		<tr>
		<td><input type="button" name="criarpromo" id="criarpromo" value="Criar promoção" onclick="criar()"></td>
		</tr>
	</table>
	<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>