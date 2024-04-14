<?php

/************** Connection MYSQLI **************/
function dbconnect_mysqli(){
    global $_username, $_host, $_dbname, $_password;
    require_once('config.php');
    $connect=mysqli_connect($_host,$_username,$_password,$_dbname)
    or die("connect Error" .mysqli_error($connect));
    //echo("C'est good mysqli");
    $connect->set_charset("utf8");
    return $connect;
}
function get_list_client_mysqli(){
    $con = dbconnect_mysqli();
    $sql_req = "select * from client;";
    $req = mysqli_query($con, $sql_req);
    $tablclient = mysqli_fetch_all($req, MYSQLI_ASSOC);
    return $tablclient;
}
function get_one_client_mysqli($id)
{
    $con = dbconnect_mysqli();
    $sql_req = "select * from client where NROCLIE=$id;";
    $req = mysqli_query($con,$sql_req);
    $monclient = mysqli_fetch_all($req, MYSQLI_ASSOC);
    return $monclient;
}
?>
