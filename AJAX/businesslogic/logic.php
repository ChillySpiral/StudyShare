<?php
require "../Utility/users.class.php";
require "../Utility/files.class.php";
session_start();
class SimpleLogic
{
    private $file_con;
    private $user_con;
    function __construct()
    {
        $this->user_con = new user();
        $this->file_con = new files();
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
                    if(password_verify($password, $user_data['password'])) //Checks if hashed password matches
                    {
                        $_SESSION['user'] = $user_data['id'];
                        if($user_data['is_admin'] == 1)
                        {
                            $_SESSION['mod'] = 1;
                        }
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
            case 'signup':
                /**
                 * Parses Form string and puts the elements in single variables
                 * Checks if all fields have been filled out
                 * Validates Email
                 * And checks for matching passwords
                 * Hashes Password and inserts it into the database
                 */
                parse_str($param, $paramArray);
                $password2 = array_pop($paramArray);
                $password = array_pop($paramArray);
                $email = array_pop($paramArray);
                $username = array_pop($paramArray);
                $nachname = array_pop($paramArray);
                $vorname = array_pop($paramArray);

                if($password2 != "" && $password != "" && $email != "" && $username != "" && $nachname != "" && $vorname != "")
                {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        if($password == $password2)
                        {
                            $password_hashed = password_hash($password, PASSWORD_DEFAULT);
                            $res = $this->user_con->createUser($username, $email, $vorname, $nachname, $password_hashed);
                        }
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
            case 'moderator':
                    $res = $this->file_con->modGetFiles();
                break;
                default:
                $res = null;
                break;
            case 'mod_approve':
                 $res = $this->file_con->modApprove($param);
                break;
            case 'mod_delete':
                //Finds the filename, deletes it from the database and deletes the file from the server
                $filename = $this->file_con->getFileNameByFileID($param);
                $res = $this->file_con->modDelete($param);
                unlink("../AJAX/uploads/".$filename['filename']."");
                break;
            case 'addSubscription': //NOT WORKING
                echo  $param; //debugging
                $date = date_create();

                if($param == "option1"){
                    if(date_create($this->user_con->getSubscriptionDate) < $date){
                        //subscription expired, add 1 month to current timestamp
                    }else{
                        //user has active subscription, add 1 month to existing timestamp from DB 
                    }
                }
                else if($param == "option2"){
                    //same as above, just add 3 months
                }
                else if($param == "option3"){
                    //same here, just add 12 months / 1 year
                }
                else{
                    //error?
                }
                $res = null;
                break;
        }
        return $res;
    }
}
?>