<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
	$Codigo=$_GET['rbFuncionario'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link href="../css/estilo_gerente.css" rel="stylesheet">
	<title> visualizar </title>
	<script type="text/javascript">
		function back(){
			window.location.replace("funcionario.php")
		}
		function alterar(){
			document.frmDados.action = "alterar_funcionario.php"
			document.frmDados.submit();
		}
	</script>
</head>
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
	<table>
		<form name="frmDados" id="frmDados" method="POST">
			<input type="hidden" name="ID" id="ID" value="<?php print $Codigo?>">
			<?php
			$sql = mysqli_query($con, "SELECT * FROM funcionario WHERE FUNCIONARIO_ID='$Codigo'");
			while ($row = mysqli_fetch_assoc($sql)) {
				echo '<tr>';
				echo '<td>' . '<h2><b> Nome: </b></h2>' . $row['nome'] .'</td>';
				echo '</tr>';
				echo '<tr>';
				echo '<td>'. '<h2><b> Data de nascimento: </b></h2>' . $row['dt_nas'] . '</td>'; 
				echo '</tr>';
				echo '<tr>';
				echo '<td>'. '<h2><b> Endereço: </b></h2>' . $row['endereco'] . '</td>'; 
				echo '</tr>';
				echo '<tr>';
				echo '<td>'. '<h3><b> Complemento de Endereço: </b></h3>' . $row['complementoend'] . '</td>'; 
				echo '</tr>';
				echo '<tr>';
				echo '<td>'. '<h3><b> Cpf: </b></h3>' . $row['CPF'] . '</td>'; 
				echo '</tr>';
				echo '<tr>';
				echo '<td>'. '<h3><b> email: </b></h3>' . $row['email'] . '</td>'; 
				echo '</tr>';
				echo '<tr>';
				echo '<td>'. '<h3><b> Telefone: </b></h3>' . $row['telefone'] . '</td>'; 
				echo '</tr>';
				echo '<tr>';
				echo '<td>'. '<h3><b> sexo: </b></h3>' . $row['sexo'] . '</td>'; 
				echo '</tr>';
				echo '<tr>';
				echo '<td>'. '<h3><b> login: </b></h3>' . $row['login'] . '</td>'; 
				echo '</tr>';
				echo '<tr>';
				echo '<td>'. '<h3><b> senha: </b></h3>' . $row['senha'] . '</td>'; 
				echo '</tr>';
			}
			?>
		</form>
	<tr><td> <input type="button" class="voltar" name="back" onclick="back()" value="voltar"> </td></tr>
	<tr><td> <input type="button" name="alterar" onclick="alterar()" value="alterar"></td></tr>

	</table>
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>