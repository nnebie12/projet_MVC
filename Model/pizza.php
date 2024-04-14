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

function get_list_pizza_mysqli(){
  $con = dbconnect_mysqli();
  $sql_req = "select * from pizza;";
  $req = mysqli_query($con, $sql_req);
  $tabpizza = mysqli_fetch_all($req, MYSQLI_ASSOC);
  return $tabpizza;
}

function get_one_pizza_mysqli($id)
{
  $con = dbconnect_mysqli();
  $sql_req = "select * from pizza where NROPIZZ=$id;";
  $req = mysqli_query($con,$sql_req);
  $mapizza = mysqli_fetch_all($req, MYSQLI_ASSOC);
  return $mapizza;
}

?>
