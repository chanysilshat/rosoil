<?

$currentLang = "ru";
if (isset($_REQUEST["current_lang"]) && !empty($_REQUEST["current_lang"])){
    $currentLang = $_REQUEST["current_lang"];
}
define("CURRENT_LANG", $currentLang);
