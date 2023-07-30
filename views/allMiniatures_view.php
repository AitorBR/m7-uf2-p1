<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    $presentacion = $_SESSION['presentacion'];
    $portada = $presentacion->getData();
    foreach ($portada as $actualData) {
        echo "<div class='wrapper' style='text-align:{$presentacion->getPosition()}'>";
        if ($actualData->getTitol() != "") {
            echo "<h1 style='color:{$presentacion->getColorTitle()};font-family:{$presentacion->getFont()}'>{$actualData->getTitol()}</h1>";
        }
        if ($actualData->getSubtitol() != "") {
            echo "<h2 style='color:{$presentacion->getColorSubtitle()};font-family:{$presentacion->getFont()}'>{$actualData->getSubtitol()}</h2>";
        }
        if ($actualData->getCover() != "") {
            echo "<p style='font-family:{$presentacion->getFont()}'>{$actualData->getCover()}</p>";
        }
        echo '</div>';
    }
    echo "<form action=\"../index.php\" method=\"post\">
            <input type=\"submit\" value=\"Inicio\">
            </form>";
    ?>
    <form action="/../controllers/controllerPrincipal.php" method="post">
        <br><input type="submit" value="Generar la presentación" name="window">
    </form>

</body>

</html>