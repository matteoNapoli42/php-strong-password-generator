<?php
$passLength = intval($_GET["passLength"]);
$alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$numbers = "0123456789";
$symbols = "!@#$%^&*()-_+=[]{};:,.<>?";
$allowedChar = $alphabet . $numbers . $symbols;

function randomPassGenerator($passLength, $allowedChar)
{
    $password = "";
    for ($i = 0; $i < $passLength; $i++) {
        $randomChar = $allowedChar[rand(0, strlen($allowedChar) - 1)];
        $password .= $randomChar;
    }

    return $password;
}

$password = randomPassGenerator($passLength, $allowedChar);
