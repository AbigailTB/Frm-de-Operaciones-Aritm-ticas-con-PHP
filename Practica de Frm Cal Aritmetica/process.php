
<?php
function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function multiplicacion($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Error: División por cero";
    }
    return $a / $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operacion) {
            case 'suma':
                $resultado = suma($num1, $num2);
                break;
            case 'resta':
                $resultado = resta($num1, $num2);
                break;
            case 'multiplicacion':
                $resultado = multiplicacion($num1, $num2);
                break;
            case 'division':
                $resultado = division($num1, $num2);
                break;
            default:
                $resultado = "Operación no válida";
        }
    } else {
        $resultado = "Por favor ingrese números válidos.";
    }
} else {
    $resultado = "Método no permitido.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Operación</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Resultado</h1>
        <p><?php echo $resultado; ?></p>
        <a href="index.html">Volver</a>
    </div>
</body>
</html>
