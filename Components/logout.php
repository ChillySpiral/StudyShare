<?php
    session_unset();
    session_destroy();
    header("location: ../index.php"); //wenn ausgeloggt wieder auf die Startseite
?>