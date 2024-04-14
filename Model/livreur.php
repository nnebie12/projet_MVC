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
function get_list_livreur_mysqli(){
    $con = dbconnect_mysqli();
    $sql_req = "select * from livreur;";
    $req = mysqli_query($con, $sql_req);
    $tablivreur = mysqli_fetch_all($req, MYSQLI_ASSOC);
    return $tablivreur;
}
function get_one_livreur_mysqli($id)
{
    $con = dbconnect_mysqli();
    $sql_req = "select * from livreur where NROLIVR=$id;";
    $req = mysqli_query($con,$sql_req);
    $monlivreur = mysqli_fetch_all($req, MYSQLI_ASSOC);
    return $monlivreur;
}
?>
