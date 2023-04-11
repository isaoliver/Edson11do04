<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Controle Bancário - Conta Corrente</title>
</head>
<body>
    <form name="conta_corrente" method="post" action="conta_corrente.php">
        <table>
            <caption>Cadastro de Conta Corrente</caption>
            <tr>
                <td><label for="nome">Nome:</label></td>
                <td><input type="text" name:"nome" size="40" maxlenght="50" required
                placeholder="Informe o nome do corretista"></td>
</tr>
<tr>
                <label for="agencia">Agencia:</td>
                <td><input type="text" name="agencia" size="20" maxlength="20" required
                placeholder="Informe o número da agencia"></td>
 </tr>
 <tr>
     <td><label for="banco">Banco:</td>
     <td>
         <select name="banco">
             <option value="#"></option>
             <option value="caixa">Caixa Economica Federal</option>
             <option value="brasil">Banco do Brasil</option>
             <option value="marcentil">Banco marcentil</option>
             <option value="santander">Banco Santander</option>
             <option value="bradesco">Banco Bradesco</option>
</select>
</td>
</tr>
<tr>
    <td><label for="conta_corrente">Conta corrente:</label</td>
    <td><input type="text" name="conta_corrente" size="30" maxlength="25" 
    required placeholder="Informe o número da conta corrente"></td>
 </td>
</tr>
<tr>
    <td><label for="data_abertura">Data de abertura:</label></td>
    <input type="date" name="data_abertura" required></label>
    </tr>
<tr>
<td><label for="cpf">CPF:</label</td>
    <td><input type="text" name="cpf" required size="14" maxlength="14"></
    </td>
</td
<tr>
<td><label for="saldo_inicial">Saldo Inicial:</label</td>
    <td><input type="number" name="saldo_inicial" value="0" stop="0.01"
    min="0"></td>
    </tr>
<tr>
    <td colspan="2" align="center">
        <input type="submit" value="Cadastre" nome="cadastrar">
</td>
</tr>

</table>
 </form>
</body>
</html>