
<?php
$nro1 = 0;
$nro2 = 0;
$resultado = 0;
$calcular = 'somar';

if (isset($_GET['nro1'], $_GET['nro2'], $_GET['calcular'])) {
    $nro1 = $_GET['nro1'];
    $nro2 = $_GET['nro2'];
    $calcular = $_GET['calcular'];

    switch($calcular) {
        case 'somar':
            $resultado = $nro1 + $nro2;
            break;
        case 'subtrair':
            $resultado = $nro1 - $nro2;
            break;
        case 'multiplicar':
            $resultado = $nro1 * $nro2;
            break;
        case 'dividir':
            $resultado = $nro1 / $nro2;
            break;
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        
        <form>
            <h3>Primeiro número</h3> <br>
           <input type="number" name="nro1" required> <br> <br>
            <h3>Segundo número</h3> <br>
            <input type="number" name="nro2" required> <br>
           <select name="calcular">
               <option value="somar">Somar</option>
               <option value="subtrair">Subtrair</option>
                <option value="multiplicar">Multipllicar</option>
               <option value="dividir">Dividir</option> 
           </select>
            <br /><br />
            <input type="submit" value="Calcular" class="botao">
            <br>
            <p>O resultado é <?= $resultado ?></p>
        </form>
        
    </div>
</body>
</html>