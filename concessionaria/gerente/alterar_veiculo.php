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
	$Codigo = $_POST['ID'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link href="../css/estilo_gerente.css" rel="stylesheet">
	<title> alterar veiculo </title>
	<script type="text/javascript">
		function myTrim(x){
				return x.replace(/^\s+|\s+$/gm,'');
		}

		function teste(){
			window.location.replace("veiculo.php")		
		}

		function alterar(){

		strmodelo = myTrim(document.frmdados.modelo.value);
		strfabricante = document.frmdados.fabricante.value;
		strcor = myTrim(document.frmdados.cor.value);
		strano = myTrim(document.frmdados.ano.value);
		strchassi = myTrim(document.frmdados.chassi.value)
		strplaca = myTrim(document.frmdados.placa.value);


			if (strmodelo.length > 0) {
				if(strfabricante.length > 0){
					if (strcor.length > 0) {
						if (strano.length > 0) {
							if(strchassi.length > 0){
								if (strplaca.length > 0) {
									document.frmdados.action="alterar_veiculo_1.php";
									document.frmdados.submit();
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
	<h3> alteração de veiculo </h3>
	<form name="frmdados" ID="frmdados" METHOD="POST">
	<input type="hidden" name="ID" id="ID" value="<?php print $Codigo?>">
		<table>
		<?php
			$sql = mysqli_query($con, "SELECT * FROM veiculo WHERE VEICULO_ID='$Codigo'");
			while ($row = mysqli_fetch_assoc($sql)) {
			
			echo '<tr>'; 
			echo '<td> Modelo: </td>'; 
			echo '<td> <input class="form" type="text" name="modelo" id="modelo" maxlength="100" value="' . $row['modelo'] . '"> </td> '; 
			echo '</tr>' ;
			echo '<tr>';
			echo '<td> fabricante: </td>';
			echo '<td> <input class="form" type="text" name="fabricante" id="fabricante" value="' . $row['fabricante'] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td> cor: </td>';
			echo '<td> <input class="form" type="text" name="cor" id="cor" maxlength="150" value="' . $row['cor'] . '"> </td></tr>';
			echo '<tr>';
			echo '<td> ano: </td>';
			echo '<td> <input class="form" type="text" name="ano" id="ano" maxlength="150" value="' . $row['ano'] .'"> </td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td> chassi: </td>';
			echo '<td> <input class="form" type="text" name="chassi" id="chassi" maxlength="11" size="9" value="'. $row['chassi'] .'">';
			echo '</tr>';
			echo '<tr>';
			echo '<td> placa: </td>';
			echo '<td> <input class="form" type="text" name="placa" id="placa" maxlength="100" value="' . $row['placa'] .'" > </td></tr>';
			echo '<tr>';
			echo 	'<td> descricao: </td>';
			echo 	'<td> <textarea id="descricao" name="descricao">'.$row['descricao'].'</textarea> </td>';
		}
		?>
		</table>
		</form>
		<input type="button" name="alterar" onclick="alterar()" value="alterar">
		<input type="button" class="volar" name="voltar" onclick="teste()" value="voltar">
<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>
