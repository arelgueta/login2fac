<?php
//permite acceso sólo si se ha validado token (+usr y pass)
session_start();

if (!isset($_SESSION['validado']))
{
    session_destroy();
    header('Location: index.php');
}

