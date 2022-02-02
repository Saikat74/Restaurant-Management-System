<?php
    SESSION_START();
    session_unset($_SESSION["user"]);
    session_destroy();
    header("Location: index.php");
?>