<?php   
// Session
session_start();
require_once "php/config.php";

// Retrouve le dernier élément dans l'url et modifie l'url
function recoveryLastElemToUrl(){
    $statements = preg_split("(/)", $_SERVER["REQUEST_URI"]);
    $nbElem=sizeof(preg_split("(/)",FOLDER));
    $id = (sizeof($statements) > $nbElem) ? $statements[4] : 0;
    //$id = (sizeof($statements) > 4) ? $statements[4] : 0;
    unset($statements[4]);
    $_SERVER["REQUEST_URI"] = implode("/", $statements);
    return $id;
}

recoveryLastElemToUrl();
/* $valeur = preg_split("^{*}/[0-9]+$", $_SERVER["REQUEST_URI"]);  // en utilisant le regexp, on demande de 
             //   créer un array à chaque fois qu'on rencontre un slash */ 
//var_dump($valeur); die();

// $keywords = preg_split("\[0-9]{1,3}", "rgf3g g5erg 0");
// Recuperation du chemin ( de l'url apres le nom de domaine)
//echo $_SERVER["REQUEST_URI"];die(); // Mike/php-object-webforce3/
//if($_POST) {
// Codage des routes. Vérification des méthodes utilisées
if($_SERVER["REQUEST_METHOD"] == "POST") { // on détermine la méthode. Si la méthode est POST:
//    echo $_GET["page"]; die();
/*     if(!isset($_GET["page"])) { // Vérification que la route est bien spécifiée
        header("Location: http://localhost/alsaleh_keita/Git/php-object-webforce3/404");
    } */

    // Test l'existence de la route
//    switch($_GET["page"]) {
    switch($_SERVER["REQUEST_URI"]){
//        case "user-register":   // chargement de la Class et lancement de la méthode
        case FOLDER."user-register": // Chargement de la Class et lancement de la methode
            require "php/Controller/UsersController.php"; // charge le fichier PHP
            $test = new UsersController(); // on instancie le contrôleur
            $test -> addUser(); // on détermine la fonction
            break;
        case FOLDER."single":
            require "php/Controller/ApiController.php";
            $api = new ApiController();
            $api -> detailItem();
            break;
        default: // redirection vers la route 404
            header("Location: ".HOST.FOLDER."404");
    }
/*     if($_POST["type"] == "register") {
        require "UsersController.php"; // charge le fichier PHP
        unset($_POST["type"]);
        $test = new UsersController();
//        echo $test -> addUser();
        $redirect = $test -> addUser();
        if($redirect == -1)
            header("Location: http://localhost/alsaleh_keita/Git/php-object-webforce3/404.html");
        else 
            header("Location:http://localhost/alsaleh_keita/Git/php-object-webforce3/index.html");
    }*/
} elseif($_SERVER["REQUEST_METHOD"] == "GET")  {
/*     if(!isset($_GET["page"])) {
        header("Location: http://localhost/alsaleh_keita/Git/php-object-webforce3/404");
    } */

     // fusion des chaînes de caractères pour créer le chemin
//    echo $_SERVER["REQUEST_URI"]."<br>"; 
//    echo FOLDER."404"; die();

//    switch($_GET["page"]) {
    switch($_SERVER["REQUEST_URI"]){
//        case "user-register":
//        case "home":
        case FOLDER:
            require "php/Controller/HomeController.php";
            $home = new HomeController();
            $home -> home();
//            include("home.php");
            break;

        case FOLDER."logout":
            require "php/Controller/UsersController.php";
            $usersController = new UsersController();
            $usersController -> logClientOut();
            break;

        case FOLDER."single": 
            require "php/Controller/ShopController.php";
            $shop = new ShopController();
            $shop -> single((int)$id);
            break;

//        case "404":
        case FOLDER."404":
            require("404.php");
            break;

        default:
            header("Location: ".HOST.FOLDER."404");
    }
}

