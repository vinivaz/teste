<!DOCTYPE html>
<html>
<head>
	<title> Criar funcionario </title>
	<script type="text/javascript">
		function myTrim(x){
				return x.replace(/^\s+|\s+$/gm,'');
		}
function back(){
			window.location.replace("cliente_ini.php");
		}

		function criar(){

		strnome = myTrim(document.frmdados.nome.value);
		strende = myTrim(document.frmdados.endereco.value);
		strcpf = myTrim(document.frmdados.cpf.value);
		strddn = document.frmdados.ddn.value;
		stremail = myTrim(document.frmdados.email.value);
		strtelefone = myTrim(document.frmdados.fone.value);
		strsexo = myTrim(document.frmdados.sexo.value);


			if (strnome.length > 0) {
				if (strende.length > 0) {
					if (strcpf.length > 0) {
							if (stremail.length > 0) {
								if (strtelefone.length > 0) {
									if (strsexo.length > 0) {
										document.frmdados.action="criar_cliente_1.php";
										document.frmdados.submit();
									}
									else{
										alert("informe o sexo");
										document.frmdados.sexo.focus();
									}
								}
								else{
									alert("informe o telefone");
									document.frmdados.fone.focus();
								}
							}
							else{
								alert("informe seu email")
								document.frmdados.email.focus();
							}
					}
					else{
						alert("informe o cpf");
						document.frmdados.cpf.focus();
					}
				}
				else{
					alert("informe o endereço");
					document.frmdados.endereco.focus();
				}
			}
			else{
				alert("informe o nome");
				document.frmdados.nome.focus();
			}
		}
	</script>
	<link href="../css/estilo_gerente.css" rel="stylesheet">
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
	<h3> cadastro de funcionario </h3>
	
		<table>
		<form name="frmdados" id="frmdados" method="post">
		<tr> 
			<td> nome: </td> 
			<td> <input type="text" class="form" name="nome" id="nome" maxlength="100"> </td> 
		</tr> 
		<tr>
			<td> data de nascimento: </td>
			<td> <input type="date" class="form" name="ddn" id="ddn"></td>
		</tr>
		<tr>
			<td> endereço: </td>
			<td> <input type="text" class="form" name="endereco" id="endereco" maxlength="150"> </td>
		</tr>
		<tr>
			<td> complemento de endereço: </td>
			<td> <input type="text" class="form" name="complementoend" id="complementoend" maxlength="150"> </td>
		</tr>
		<tr>
			<td> cpf: </td>
			<td> <input type="text" class="form" name="cpf" id="cpf" maxlength="11" size="6">
		</tr>
		<tr>
			<td> email: </td>
			<td> <input type="text" class="form" name="email" id="email" maxlength="100" > </td>
		</tr>
		<tr>
			<td> telefone: </td>
			<td> <input type="text" class="form" name="fone" id="fone" maxlength="10"> </td>
		</tr>
		<tr>
			<td> sexo: </td>
			<td> <input type="text" class="form" name="sexo" id="sexo" maxlength="1" size="1"> </td>
		</tr></form>
		<td><input type="button" name="criar" onclick="criar()" value="criar"></td>
		<td><input type="button" class="voltar" name="voltar" onclick="back()" value="voltar"></td>
		</table>
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>