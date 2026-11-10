<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Lista de numeros al azar</h1>
        <?php
        $arreglo=[];

            for($i=0;$i<50;$i++){
                $arreglo[$i]=rand(0,100);
            }
            for($i=0;$i<50;$i++){
                echo $i ."- ". $arreglo[$i]."<br>";
            }
        ?>
    <br>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        rsort($arreglo);
    }
?>

<h1>Lista de numeros mas grandes</h1>
<form method="POST">
    <button type="submit">ejecutar</button>
    <br>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        for ($i = 0; $i < 3; $i++) {
            echo ($i + 1) . " puesto: " . $arreglo[$i] . "<br>";
        }
        echo "<br>"; 
    }
    ?>
</form>
</body>
</html>