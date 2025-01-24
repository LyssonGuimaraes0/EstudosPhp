<?php 

$reais = @$_REQUEST['reais'];

$dolar = $reais / 6;

$dolar = number_format($dolar,2,',','');

header("location: page4.php?mensagem=Resultado da conversão é U$ $dolar dolares");

exit();

class cabecalho{



    
}
?>