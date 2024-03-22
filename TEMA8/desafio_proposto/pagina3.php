<?php
session_start();

$nome1 = $_SESSION["nome"];
$idade1 = $_SESSION["idade"];
$peso1 = $_SESSION["peso"];
$altura1 = $_SESSION["altura"];
    
$Nome2 = $_SESSION['Nome2'];
$Idade2 = $_SESSIONT['idade2'];
$Peso2 = $_SESSION['Peso2'];
$Altura2 = $_SESSION['Altura2'];
   
$maiorAltura = ($altura1 > $Altura2) ? $nome1 : $Nome2;  
$maisVelho = ($idade1 > $Idade2) ?  $nome1 : $Nome2; 
$maiorPeso = ($peso1 > $Peso2) ? $nome1 : $Nome2; 
  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
</head>
<body>
    <h2>Comparação de Informações</h2>
    <p>Quem tem uma altura maior: <?php echo $maiorAltura; ?></p>
    <p>Quem é mais velho: <?php echo $maisVelho; ?></p>
    <p>Quem tem o peso maior: <?php echo $maiorPeso; ?></p>
</body>
</html>
