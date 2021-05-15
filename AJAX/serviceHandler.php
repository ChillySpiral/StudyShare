<?php
include("businesslogic/Logic.php");

$param = "";
$function = "";
$result = null;

/**
 * If data is sent through post, the data is saved to local variables and the check for set get data is skipped
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

//New simplelogic object created to handle function and param, which were sent to the the backend

$logic = new SimpleLogic();
$result = $logic->handleRequest($function, $param);

//If the server returns null, then the httpstatus is set to 400 = Bad Request, if not it is set to 200 = OK

if ($result == null && $result != false) {
    response("GET", 400, null);
} else {
    response("GET", 200, $result);
}

//Sends the data back to the frontend encoded in json format

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