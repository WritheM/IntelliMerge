<?php
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
else if (!isset($_SESSION['lang']) || $_SESSION['lang'] === "") {
    $_SESSION['lang'] = "en";
}

require_once (__DIR__ . "/../lang/en.php");

switch($_SESSION['lang']) {
    case "de":
        define("CHARSET","UTF-8");
        define("LANGCODE", "de");
        require_once (__DIR__ . "/../lang/de.php");
        break;
    default:
        define("CHARSET","UTF-8");
        define("LANGCODE", "en");
        require_once (__DIR__ . "/../lang/en.php");
        break;
}
header("Content-Type: text/html;charset=".CHARSET);
header("Content-Language: ".LANGCODE);