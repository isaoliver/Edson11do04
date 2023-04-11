<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Gastos</title>

    <style type="text/css">
 h2 {
 color:#993399 ;
 border-bottom:1px solid #993399 ;
 width: 160px;
 }
 label, input {
color:#993399 ;
 }

 input {

 margin-left:5px;
}

</style>

</head>

<body>

 <?php

 echo "<h2>Controle de Gastos:</h2>";
 echo "<h3> Receita: </h3>";
 echo "<hr size='4' color='#993399' width='62%' align='left'>";

 $receita1 = 1000;
 $receita2 = 350 ;

 $Total= $receita1 + $receita2;




 echo "<strong> Serviço de Professor Substituto: $receita1 </strong>";
 echo "<br>";
 echo "<strong> Apliquei uma prova: $receita2 </strong>";
 echo "<br>";
 echo "<strong> Total das receitas: $Total </strong>";
 echo "<h3> Despesas: </h3>";
 echo "<hr size='4' color='#993399' width='62%' align='left'>";

 $despesas1 = 50;
 $despesas2 = 70;
 $despesas3 = 80;
 $despesas4 = 800; 
 $Totald= $despesas1 + $despesas2 + $despesas3 + $despesas4;

echo "<strong> Ifood: $despesas1 </strong>";
echo "<br>";
echo "<strong> Luz: $despesas2 </strong>";
echo "<br>";
echo "<strong> Água: $despesas3 </strong>";
echo "<br>";
echo "<strong> Mercado: $despesas4 </strong>";
echo "<br>";
echo "<strong> Total das despesas: $Totald </strong>";
echo "<br>";
echo "<strong> Resultado: </strong>";

if ($Total > $Totald) {
 echo "Crédito";
 } elseif ($despesas > $receita) {
echo "Débito";
}


?>

</body>
</html>







