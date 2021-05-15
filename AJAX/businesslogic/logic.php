<?php
require "./Utility/users.class.php";
require "./Utility/files.class.php";
session_start();
class SimpleLogic
{
    private $file_con;
    private $user_con;
    function __construct()
    {
        $this->user_con = new user();
        $this->file_con = new user();
    }
    private $res = null;
    //Handles Request(which function is to be used), param(data that is sent from the frontend to the backend)
    function handleRequest($method, $param)
    {
        switch ($method) {
            case 'login':
                /*
                 * The param variable, holds the form data in serialized form, we parse the string and put it in one array
                 * Then the elements are removed from the array (email and password)
                 * A request is sent to the database for the password connected to the email
                 * If the password from the database matches the one provided by the user, the Session variable is set and the user is logged in
                 * The function returns true as a response, which is then sent to the frontend
                 * If the passwords do not match, null is returned
                */
                parse_str($param, $paramArray);
                $password = array_pop($paramArray);
                $email = array_pop($paramArray);

                $user_data = $this->user_con->loginUser($email, $password);
                if($user_data)
                {
                    if($password == $user_data['password'])
                    {
                        $_SESSION['user'] = $user_data['id'];
                        $res = true;
                    }
                    else
                    {
                        $res = false;
                    }
                }
                else
                {
                    $res = false;
                }
                break;
            default:
                $res = null;
                break;
        }
        return $res;
    }
}
?>