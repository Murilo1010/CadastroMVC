
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../CSS/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="../Img/enlatados.png" type="image/x-icon">
	<title>Tela de Login</title>
</head>
<body>
<form action="../Controller/Navegacao.php" method="post" class="w3-container w3-card-4  w3-text-orange w3-margin w3-display-middle" style="width: 30%;">
	<input type="hidden" name="nome_form" value="frmLogin" />
    
    <h2 class="w3-center">Login</h2>
 	<div class="w3-row w3-section">
	<div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-user w3-text-orange"></i></div>
		<div class="w3-rest">
		<input class="w3-input w3-border w3-round-large" name="txtLogin" type="text" placeholder="Login CPF (ex.: 33333333333)">
		</div>
	</div>

	<div class="w3-row w3-section">
	<div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-lock w3-text-orange"></i></div>
		<div class="w3-rest">
		<input class="w3-input w3-border w3-round-large" name="txtSenha" type="password" placeholder="Senha">
		</div>
	</div>
	
	
	<div class="w3-row w3-section">
		<div class="w3-half" style="">
			<button name="btnLogin" class="w3-button w3-block w3-margin w3-blue  w3-cell w3-round-large w3-orange" style="width: 90%;">Entrar</button>
		</div>
		<div class="w3-half">
		<button name="btnPrimeiroAcesso" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large w3-orange" style="width: 90%;">Primeiro Acesso?</button>
		</div>
		<div class="w3-center" style="">
			<button name="btnADM" class=" w3-block w3-margin w3-blue w3-button  w3-cell w3-round-large w3-orange" style="width: 90%;">Login como Administrador</button>
		</div> 
	</div>

</form>


	
</body>
</html>