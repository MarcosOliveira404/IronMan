<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armadura - 01</title>
    <!-- @marcosrikelmede -->
</head>
<body>
    <pre>
        <?php
            require_once 'sistema.php';
            $mach = new sistema();
            echo " <h1>Mark - 01</h1>";
            $mach->ligar();
            $mach->abrirMenu();
            echo "<br>";
            $mach->ativarReator();
            $mach->detonar();
        ?>
    </pre>
</body>
</html>