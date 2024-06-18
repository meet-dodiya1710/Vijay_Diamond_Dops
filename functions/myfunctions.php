<?php

include (__DIR__ . '/../php/config.php');

function getAll($table)
{
    global $con;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query);
}

function getById($table, $id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE pro_id='$id'";
    return $query_run = mysqli_query($con, $query);
}

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: ' . $url);
    exit();
}
?>