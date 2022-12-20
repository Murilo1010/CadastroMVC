
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../Img/enlatados.png" type="image/x-icon">
	<title>Administrador</title>
</head>
<body>
<?php
     include_once '../Model/Usuario.php';
     include_once '../Model/Administrador.php';
     include_once '../Controller/AdministradorController.php';

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
   
$adm = new AdministradorController();
$results = $adm->gerarListaID($_SESSION['IDUsuario']);
if($results != null)
while($row = $results->fetch_object()) {

$nome = $row->nome;
$cpf  = $row->cpf;

}
?>  
    <!--Incial -->
    <header class="w3-container w3-padding-32 w3-center ">
        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
   
         Curriculo     <?php echo "$nome"  //echo $u->getNome(); ?> 
        </h1>
    </header>
    <div class="w3-padding-128 w3-content w3-text-grey">
        <div class="w3-container">
            <h2 class="w3-text-white w3-panel w3-cyan w3-round-large">
                NOME: <?php echo "$nome"  //echo $u->getNome();?>  
            </h2>
            <h2 class="w3-text-white w3-panel w3-cyan w3-round-large">
            CPF: <?php  echo "$cpf"  //$u->getCPF();?>  
            </h2>
        </div>
    </div>
    <br>
    <br>
<div class="w3-padding-128 w3-content w3-text-black">
	<form action="/Controller/navegacao.php" method="post" class="w3-container  w3-text-blue w3-margin w3-center" style="width: 30%;">
		<div class="w3-row w3-section">
			<div>
				<button name="btnVoltarListaADM" class="w3-button w3-block w3-margin w3-orange w3-cell w3-round-large" style="width: 90%;">
					Voltar
				</button>
			</div>

            <div>
                <button name="btnVoltarListaADM" onClick="window.print()" class="w3-button w3-block w3-margin w3-orange w3-cell w3-round-large" style="width: 90%;">
					Imprimir
				</button>
			</div>
		</div>
	</form>
</div>

 

	
</body>
</html>