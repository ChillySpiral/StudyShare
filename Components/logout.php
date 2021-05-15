<?php
    /**
     * The Session which manages the User Logged-In status is destroyed, effectivly loggin the user out
     */
    session_start();
    session_unset();
    session_destroy();
    header("location: ../index.php"); //After the "logout" the user is redirected to the front page (index)