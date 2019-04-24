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
	<title> funcionarios </title>
	<script type="text/javascript">
		function criar(){
			window.location.replace("criar_funcionario.php");
		}
		function voltar(){
			window.location.replace("gerente_ini.php")
		}
	</script>
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
	<table>
		<?php
			$sql = mysqli_query($con, 'SELECT * FROM funcionario');
			while ($row = mysqli_fetch_assoc($sql)) {
				echo '<tr>';
				echo '<td align="center">' . "<a href=visualizar_funcionario.php?rbFuncionario=" . $row['FUNCIONARIO_ID'] . ">" . $row['nome'] . '</td>';
				echo '<td align="center"><a href="alterar_funcionario.php?ID='. $row['FUNCIONARIO_ID'] .'"> ALTERAR</a></td>';
				echo '<td align="center"><a href="./deletar_funcionario.php?ID='. $row['FUNCIONARIO_ID'] . 'style="color:black">X</a></td>';
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