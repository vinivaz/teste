<!DOCTYPE html>
<html>
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

		function criar(){

		strmodelo = myTrim(document.frmdados.modelo.value);
		strfabricante = document.frmdados.fabricante.value;
		strcor = myTrim(document.frmdados.cor.value);
		strano = myTrim(document.frmdados.ano.value);
		strchassi = myTrim(document.frmdados.chassi.value)
		strplaca = myTrim(document.frmdados.placa.value);
		strpreco = myTrim(document.frmdados.preco.value);


			if (strmodelo.length > 0) {
				if(strfabricante.length > 0){
						if (strcor.length > 0) {
							if (strano.length > 0) {
								if(strchassi.length > 0){
									if (strplaca.length > 0) {
										if (strpreco.length > 0) {
											document.frmdados.action="cadastrar_veiculo_1.php";
											document.frmdados.submit();
										}
										else{
											alert("informe o preço")
											document.frmdados.preco.focus();
										}
									}
									else{
										alert("informe a placa");
										document.frmdados.placa.focus();
									}
								}
								else{
									alert("informe o chassi")
									document.frmdados.chassi.focus();
								}
							}
							else{
								alert("informe o ano")
								document.frmdados.ano.focus();
							}
						}
						else{
							alert("informe a cor")
							document.frmdados.cor.focus();
						}
					}
				else{
					alert("informe o fabricante")
					document.frmdados.fabricante.focus();
				}
			}		
			else{
				alert("informe o modelo")
				document.frmdados.modelo.focus();
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
	<h3> cadastro de veiculo </h3>
	<form name="frmdados" id="frmdados" method="post">
		<table>
		<tr> 
			<td> modelo: </td> 
			<td> <input class="form" type="text" name="modelo" id="modelo" maxlength="100"> </td> 
		</tr> 
		<tr>
			<td> fabricante: </td>
			<td> <input class="form" type="text" name="fabricante" id="fabricante"></td>
		</tr>
		<tr>
			<td> cor: </td>
			<td> <input class="form" type="text" name="cor" id="cor" maxlength="150"> </td>
		</tr>
		<tr>
			<td> ano: </td>
			<td> <input class="form" type="text" name="ano" id="ano" maxlength="150"> </td>
		</tr>
		<tr>
			<td> chassi: </td>
			<td> <input class="form" type="text" name="chassi" id="chassi" maxlength="150"> </td>
		</tr>
		<tr>
			<td> placa: </td>
			<td> <input class="form" type="text" name="placa" id="placa" maxlength="11" size="6"> </td>
		</tr>
		<tr>
			<td> preço: </td>
			<td> <input class="form" type="text" name="preco" id="preco" maxlength="100" size="10"></td>
		</tr>
		<tr>
			<td>descrição</td>
			<td><textarea id="descricao" name="descricao"></textarea></td>
		</tr>
		</table>
	</form>
	<input type="button" name="criar" onclick="criar()" value="criar">
	<input type="button" class="voltar" name="voltar" onclick="teste()" value="voltar">
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>