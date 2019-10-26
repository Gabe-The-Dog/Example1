<?php
session_start();
if (!isset($_SESSION['counter'])) $_SESSION['counter'] = 0;
echo "Вы обновили эту страницу " . ($_SESSION['counter']++) . " раз. ";
echo "<br><a href=" . $_SERVER['PHP_SELF'] . ">обновить";

if (!isset($_SESSION['hasName'])) {
    if (isset($_GET["name"])) {
        $_SESSION['name'] = $_GET["name"];
        $_SESSION['hasName'] = true;
        echo "Я запомнил " . $_SESSION['name'];
    } else {
        echo "Пиши имя";
    }
} else {
    echo "Ты " . $_SESSION['name'];
}
