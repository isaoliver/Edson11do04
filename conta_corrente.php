<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Bancario em PHP</title>
</head>
<body>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") //  Se os dados forem cadastrados no formulario
    {
    echo "<h3>Controle Bancario em PHP</h3>";
    $Nome_Banco = ""; // Armazena nome do banco
    $TipoDeConta = ""; // Armazena o tipo de conta
    $Nome_Correntista = $_POST["nome"];
    echo "<strong>Nome do correntista: </strong>" .  $Nome_Correntista;
    $Banco             =  $_POST["banco"];

    //Exibindo o nome do banco completo
    if($Banco == "caixa")
       $Nome_Banco = "Caixa Economica Federal";
    else if ($Nome_Banco = "santander")
       $Nome_Banco = "Banco Santander";
    else if ($Nome_Banco = "mercantil")
       $Nome_Banco = "Banco Mercantil do Brasil";
    else if ($Banco = "brasil")
       $Nome_Banco = "Banco do Brasil";
    else if ($Banco = "bradesco")
       $Nome_Banco = "Banco Bradesco";
    else
       $Nome_Banco = "Banco não selecionou o Banco!";
    echo "<br><strong>Nome do Banco: </strong>" . $Nome_Banco; // Exibe nome complto d banco
    } 
    else
    {
        echo "Atenção, voce tem que cadastrar os dados primeiro!!!";
        echo "<p><a href='banco_cc.php'>Cadastro da Conta Corrente</a></p>";
    }

    ?>
</body>
</html>