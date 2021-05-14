<?php
include("businesslogic/Logic.php");

$param = "";
$function = "";
$result = null;

/**
 * Wenn POST function und param gesetzt ist, werden diese in die lokalen variablen gespeichert und die Abfrage ob GET gesetzt ist übersprungen
 */
if(isset($_POST['function']) && isset($_POST['param']))
{
    $function = $_POST['function'];
    $param = $_POST['param'];
    goto skip_get;
}
isset($_GET["function"]) ? $function = $_GET["function"] : false;
isset($_GET["param"]) ? $param = $_GET["param"] : false;


skip_get:

//Neues Simplelogic object, übernimmt die funktion und die param als Paremeter um sie auszuwerten

$logic = new SimpleLogic();
$result = $logic->handleRequest($function, $param);

//Falls der Server null zurück gibt, so wird Httpstatus 400 = Bad Request zurückgegeben ansonsten 200 = OK

if ($result == null) {
    response("GET", 400, null);
} else {
    response("GET", 200, $result);
}

//Gibt den erhaltenen Datensatz als json Object zurück

function response($method, $httpStatus, $data)
{
    header('Content-Type: application/json');
    switch ($method) {
        case "GET":
            http_response_code($httpStatus);
            echo (json_encode($data));
            break;
        default:
            http_response_code(405);
            echo ("Method not supported yet!");
    }
}