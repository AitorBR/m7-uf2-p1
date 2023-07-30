<?php
use AutoTest\Presentacion;
use AutoTest\Portada;
require_once __DIR__ . '/../vendor/autoload.php';

function checkAndParse() {
    $valor = $_POST["textarea"];
    $cicleEnd = false;
    $cicleEnd = checkSyntax($valor);
    if (!$cicleEnd) {
        splitSyntax($valor);
    } else {
        include_once __DIR__ . '/../index.php';
    }
}

function checkSyntax($text)
{
    $endofline = explode("\n", $text);
    $jumpLine = false;
    foreach ($endofline as $line) {
        //global $cicleEnd;
        if (str_contains($line, "==")) {
            $subtitol = explode("==", $line);
            if (count($subtitol) > 2) {
                alert("subtitol");
                return true;
            }
            if (str_contains($subtitol[1], "=")) {
                alert("subtitol");
                return true;
            }
        } else if (str_contains($line, "=")) {
            $titol = explode("=", $line);
            if (count($titol) > 2) {
                alert("titol");
                return true;
            }
        } else if (str_contains($line, "[cover]")) {
            $subtitol = explode("[cover]", $line);
            if (count($subtitol) > 2) {
                alert("[cover]");
                return true;
            }
        } else if (str_contains($line, ">>>")) {
            $subtitol = explode(">>>", $line);
            $jumpLine = true;
            if (count($subtitol) > 2) {
                alert(">>>");
                return true;
            }
        }
    }
    if (!$jumpLine) {
        return true;
    }
}

function alert($message)
{
    echo '<script language="javascript">';
    echo 'alert("Error en el ' . $message . '")';
    echo '</script>';
}


function splitSyntax($text)
{
    $portada = [];
    $titol = "";
    $subtitol = "";
    $cover = "";
    $endofline = explode("\n", $text);
    foreach ($endofline as $line) {
        if (str_contains($line, "==")) {
            $subtitol = explode("==", $line)[1];
        } else if (str_contains($line, "=")) {
            $titol = explode("=", $line)[1];
        } else if (str_contains($line, "[cover]")) {
            $cover = explode("[cover]", $line)[1];
        } else if (str_contains($line, ">>>")) {
            $portada[] = new Portada($titol, $subtitol, $cover);
        }
    }
        $moment = $_SESSION['presentacion'];
        $moment->setData($portada);
        $_SESSION['presentacion'] = $moment;
}
