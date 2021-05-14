<?php
require "./Utility/users.class.php";
require "./Utility/files.class.php";

class SimpleLogic
{
    private $file_con;
    private $user_con;
    function __construct()
    {
        $this->user_con = new user();
        $this->file_con = new user();
    }

    //Handles Request and Param
    function handleRequest($method, $param)
    {
        switch ($method) {
            case 'login':
                //todo
                parse_str($param, $paramArray);
                $email = array_pop($paramArray);
                $password = array_pop($paramArray);

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
                break;
            default:
                $res = null;
                break;
        }
        return $res;
    }
}
?>