<?php

session_start();

if (!isset($_SESSION['validado']))
{
    session_destroy();
    header('Location: index.php');
}

