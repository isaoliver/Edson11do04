<html>
  <head>
    <title>Resultado da soma</title>
  </head>
  <body>
    <h1>Resultado da soma</h1>
    <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $soma = $num1 + $num2;
      echo "A soma de $num1 e $num2 é igual a $soma.";
    ?>
  </body>
</html>
