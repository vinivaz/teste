<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'concessionaria';
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
?>
<html>
<head>
	<meta charset="utf-8"/>
	 <link rel="stylesheet" type="text/css" href="css/estilo_index.css">
	<script type="text/javascript">
		function trim(x){return x.replace(/^\s+|\s+$/gm,'');}

		function login(){

			strpw = trim(document.frmdados.senha.value);
			strfg = document.frmdados.fg.value;
			struser = trim(document.frmdados.usuario.value);
			if (struser.length > 0) {
				if (strpw.length > 0) {
					switch(strfg){
						case"F":
						document.frmdados.action="funcionario/funcionario_ini.php";
						document.frmdados.submit();
						break;
						case"G":
						document.frmdados.action="gerente/gerente_ini.php";
						document.frmdados.submit();
						break;
					default:
						alert("informa o login");
					}
				}
				else {
					alert("informe a senha");
					document.frmdados.senha.focus();
				}
			}
			else {
				alert("informe o usuario");
				document.frmdados.usuario.focus();
			}
		}

		function popup(){
			var ativo = true;
			document.getElementById('field').style.display = 'block';
		}	
			
		function promo(){
			window.location.replace("promocao/promocao_veiculos.php");
		}
	</script>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.grid-container {
	position:relative;
	top:-250px;
	left:220px;
  display: grid;
  grid-gap: 1px;
  grid-template-columns: auto auto auto;
  background-color:rgba(0,0,0,0.8);
  padding: 20px;
  width:800px;
  border-radius:4px;
  height:600px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 0px;
  margin:10px;
  font-size: 30px;
  text-align: center;
  width:200px;
  height:100px;
}
</style>
</head>
<body bgcolor="#585858">
	
	<header id="cabecalho">
		<input  id="search" type="text" placeholder="pesquisar..." /> <input id="enter" type="button" value="enter"/>
		<p>Roads</p>
		<nav id="menu">
			<ul>
				<li onclick="promo()" id="mar" class="menu">Promoçoes</li>
				<li class="menu">Carros</li>
				<li class="menu">Marcas</li>
			</ul>
		</nav>
	</header>
	<form name="frmdados" id="frmdados" method="post">
		<div  onclick="popup()" class="popup"><h1>Login</h1></div>
		<fieldset id="field">
			<legend>
			<h1>Login</h1>
			</legend>
					
			<div class="cores">
				<ul>
					<li id="1"><div  class="azul"></div></li>
					<li id="1"><div class="verde"></div></li>
					<li id="1"><div class="amarelo"></div></li>
					<li id="1"><div class="vermelho"></div></li>
				</ul>	
		
		</div>
					

				<input class="usu" id="usuario" type="text" placeholder="User" name="Usuário" id="usuario"><br>
				<input class="sen" id="senha" type="password" placeholder="Password" name="senha" id="senha" maxlength="20"><br>
					<center><input type="radio" name="fg" id="fg" value="F" ><span>Funcionario
					<input type="radio" name="fg" id="fg" value="G">Gerente</span></center><br/>
					<input type="button" name="button_logar" class="button" id="logar_button" value="Sign in" onclick="login()">
	</fieldset>
	</form>
	
		<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="carro2.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="carro3.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="carro1.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
   
  </div>
</div>
	<a href="gerente/veiculo.php"><iframe src="bootstrap/carousel.html"></iframe></a>
	<center>
	<div class="grid-container">
		<div class="grid-item"><a href="gerente/visualizar_veiculos.php?rbVeiculo=4"><img width="200" height="100" src="gerente/camaro.jpg"/></a></div>
		<div class="grid-item"><a href="gerente/visualizar_veiculos.php?rbVeiculo="><img width="200" height="100" src="gerente/SW4.jpg"/></a></div>
		<div class="grid-item"><a href="gerente/visualizar_veiculos.php?rbVeiculo=2"><img  width="200" height="100" src="gerente/onix.jpg"/></a></div>
		<div class="grid-item"><a href="gerente/visualizar_veiculos.php?rbVeiculo=1"><img  width="200" height="100" src="gerente/ecosport.jpg"/></a></div>
		<div class="grid-item"><a href="gerente/visualizar_veiculos.php?rbVeiculo=4"><img  width="200" height="100" src="gerente/cololla.jfif"/></a></div>
		<div class="grid-item"><a href="gerente/visualizar_veiculos.php?rbVeiculo=4"><img  width="200" height="100" src="gerente/uno.jpg"/></a></div>
		<div class="grid-item"><a href="gerente/visualizar_veiculos.php?rbVeiculo=4"><img  width="200" height="100" src="gerente/crossfox.jpg"/></a></div>
		<div class="grid-item"><a href="gerente/visualizar_veiculos.php?rbVeiculo=3"><img  width="200" height="100" src="gerente/new beetle.jpg"/></a></div>
		<div class="grid-item"><a href="gerente/visualizar_veiculos.php?rbVeiculo=4"><img  width="200" height="100" src="gerente/golrallye.jpg"/></a></div>  
	</div>
	<div class="text">
		
		A concessionária Roads, na cidade de Fortaleza, do estado de Ceará, oferece a linha completa para você comprar seu carro zero km e uma ampla gama de serviços de manutenção e reparo de veículos, tudo com peças genuínas GM e acessórios automotivos originais da marca.

Além disso, você pode conferir o estoque de veículos seminovos com taxas de financiamento que cabem no seu bolso. Aproveite para cotar os preços de seguro e consórcio de carros com as melhores soluções para compra do seu carro novo.


	</div></center>
	
	<footer id="fim">
	<p>Copyright © 2018 - by Eu<br/>Facebook | Twitter</p>
	</footer>
</body>
</html>