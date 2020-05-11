<?php
/**
 * To add to a newly Supported languages, first you will need to define your two letter ISO-639-1 language code,
 * then the language name in the native tongue. Additionally the language file containing all localisations will need to
 * be named to match the two letter language code. example: en.php, de.php. template.php outlines all language variables.
 * To add to an existing supported language, open the two letter language local file and add/change any of the array
 * elements with the translated text. html is supported. If an array element is not defined, the front-end will
 * default back to the english one.
 **/
const SUPPORTED_LANGUAGES = [
    'en'=>'English',
    'de'=>'Deutsch',
// Reserved for future development.
//    'cb'=>'Wookie',
//    'rr'=>'Pirate',
];

// prepare the session for the user's language of choice. Allows for setting the session via a ?lang=en url. These
// will be updated first from the users' profile before this file is included.
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
else if (!isset($_SESSION['lang']) || $_SESSION['lang'] === "") {
    $_SESSION['lang'] = "en";
}

// default to english, then overload with the selected language
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

// set some technical specs for the browser to support the local selected.
header("Content-Type: text/html;charset=".CHARSET);
header("Content-Language: ".LANGCODE);