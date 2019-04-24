<?php
	error_reporting(0);
	ini_set(“display_errors”, 0 );
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
	
	$Codigo=$_GET['ID'];
	if (strlen($Codigo) == 0) {
	$Codigo = $_POST['ID'];}
?>
<!DOCTYPE html>
<html>
<style type="text/css">
.form{
	border-radius:20px;
	width:500px;
	border-color:gray;
		}
<style>
<head>
	<meta charset="utf-8"/>
	<link href="../css/estilo_gerente.css" rel="stylesheet">
	<title> Criar funcionario </title>
	<script type="text/javascript">
		function myTrim(x){
				return x.replace(/^\s+|\s+$/gm,'');
		}

		function teste(){
			window.location.replace("funcionario.php")		
		}

		function alterar(){

		strnome = myTrim(document.frmdados.nome.value);
		strdt = document.frmdados.ddn.value;
		strende = myTrim(document.frmdados.endereco.value);
		strcpf = myTrim(document.frmdados.cpf.value);
		stremail = myTrim(document.frmdados.email.value);
		strtelefone = myTrim(document.frmdados.fone.value);
		strsexo = myTrim(document.frmdados.sexo.value);
		strlogin = myTrim(document.frmdados.login.value);
		strsenha = myTrim(document.frmdados.senha.value);


			if (strnome.length > 0) {
				if (strdt.length > 0) {
					if (strende.length > 0) {
						if (strcpf.length > 0) {
							if (stremail.length > 0) {
								if (strtelefone.length > 0) {
									if (strsexo.length > 0) {
										if(strlogin.length > 0){
											if(strsenha.length > 0){
												document.frmdados.action="alterar_funcionario_1.php";
												document.frmdados.submit();
											}
											else{
												alert("informe a senha");
												document.frmdados.senha.focus();
											}
										}
										else{
											alert("informe o login");
											document.frmdados.login.focus();
										}
									}
									else{
										alert("informe o sexo");
										document.frmdados.sexo.focus();
									}
								}
								else{
									alert("infome o telefone");
									document.frmdados.fone.focus();
								}
							}
							else{
								alert("informe o email");
								document.frmdados.email.focus();
							}
						}
						else{
							alert("infome o cpf");
							document.frmdados.cpf.focus();
						}
					}
					else{
						alert("informe o endereço");
						document.frmdados.endereco.focus();
					}
				}
				else{
					alert("informe a data")
				}		
			}
			else{
				alert("informe o nome");
				document.frmdados.nome.focus();
			}
		}
	</script>
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
	<h3> cadastro de funcionario </h3>
	<form name="frmdados" ID="frmdados" METHOD="POST">
	<input type="hidden" name="ID" id="ID" value="<?php print $Codigo?>">
		<table>
		<?php
			$sql = mysqli_query($con, "SELECT * FROM funcionario WHERE FUNCIONARIO_ID='$Codigo'");
			while ($row = mysqli_fetch_assoc($sql)) {
			
			echo '<tr>'; 
			echo '<td> nome: </td>'; 
			echo '<td> <input class="form" type="text" name="nome" id="nome" maxlength="100" value="' . $row['nome'] . '"> </td> '; 
			echo '</tr>' ;
			echo '<tr>';
			echo '<td> data de nascimento: </td>';
			echo '<td> <input class="form" type="date" name="ddn" id="ddn" value="' . $row['dt_nas'] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td> endereço: </td>';
			echo '<td> <input type="text" class="form" name="endereco" id="endereco" maxlength="150" value="' . $row['endereco'] . '"> </td></tr>';
			echo '<tr>';
			echo '<td> complemento de endereço: </td>';
			echo '<td> <input type="text" class="form" name="complementoend" id="complementoend" maxlength="150" value="' . $row['complementoend'] .'"> </td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td> cpf: </td>';
			echo '<td> <input type="text" class="form" name="cpf" id="cpf" maxlength="11" size="9" value="'. $row['CPF'] .'">';
			echo '</tr>';
			echo '<tr>';
			echo '<td> email: </td>';
			echo '<td> <input type="text" class="form" name="email" id="email" maxlength="100" value="' . $row['email'] .'" > </td></tr>';
			echo '<tr>';
			echo 	'<td> telefone: </td>';
			echo 	'<td> <input type="text" class="form" name="fone" id="fone" maxlength="10" value="'. $row['telefone'] .'"> </td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td> sexo: </td>';
			echo 	'<td> <input type="text" class="form" name="sexo" id="sexo" maxlength="1" size="1" value="' . $row['sexo'] . '"> </td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td> login: </td>';
			echo '<td> <input type="text" class="form" name="login" id="login" maxlength="10" size="8" value="'. $row['login'] .'"';
			echo '</tr>';
			echo '<tr>';
			echo 	'<td> senha: </td>';
			echo 	'<td> <input type="text" class="form" name="senha" id="senha" maxlength="6" size="8" value="' . $row['senha'] . '"></td>';
			echo '</tr>';

		}
		?>
		</table>
		</form>
		<input type="button" name="alterar" onclick="alterar()" value="alterar">
		<input type="button"  class="voltar" name="voltar" onclick="teste()" value="voltar">
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>
