<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
	$Codigo=$_GET['rbVeiculo'];
?>

<!DOCTYPE html>
<html>
<head>
	<title> visualizar </title>
	<script type="text/javascript">
		function back(){
			window.location.replace("veiculo.php");
		}
		function alterar(){
			document.frmDados.action = "alterar_veiculo.php"
			document.frmDados.submit();
		}
	</script>
	<style>
.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }
.item6 { grid-area: aside;}


.grid-container {
  display: grid;
  grid-template-areas:
     'menu header header header header header'
    'menu footer footer footer footer footer'
    'menu right right right right right'
    'menu main main main main main';
	'menu aside aside aside aside aside';
  grid-gap: 10px;
  background-color: white;
  padding: 10px;
  
 
  
  position:relative;
 
}
.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 5px 0;
  font-size: 20px;
  font-family: arial, san-serif;
}
.bt{margin-left:350px;

	position:relative;
	width:50%;
	position:relative;
	left:-1%;
	background-color:white;
	border-radius:5px;
	padding:5px 0;
	
	
	}
		
</style>
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
	<div class="bt">
		<form name="frmDados" id="frmDados" method="POST">
			<input type="hidden" name="ID" id="ID" value="<?php print $Codigo?>">
			<?php
			$sql = mysqli_query($con, "SELECT * FROM veiculo WHERE VEICULO_ID='$Codigo'");
			while ($row = mysqli_fetch_assoc($sql)) {
				echo '<div class="grid-container">';
				echo '<div class="item1">'. $row['modelo'] .'</div>';
				echo '<div class="item2"><img src="'. $row['modelo'] .'.jpg" width="420" height="256" ></div>';
				echo '<div class="item3">Ano: '. $row['ano'] .'</div>'; 
				echo '<div class="item4">chass: '. $row['chassi'] .'</div>';
				echo '<div class="item5">placa: '. $row['placa'] .'</div>';
				echo '</div>';
			}
			?>
		</form>
 <center><input type="button" id="norm" class="voltar" name="back" onclick="back()" value="voltar"> 
 <input type="button" id="norm2" name="alterar" onclick="alterar()" value="alterar"></center></div>

	

<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>