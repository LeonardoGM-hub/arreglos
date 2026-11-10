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

            for($i=1;$i<51;$i++){
                $arreglo[$i]=rand(0,100);
            }
            for($i=1;$i<51;$i++){
                echo $i ."- ". $arreglo[$i]."<br>";
            }
        ?>
    <br>
</body>
</html>