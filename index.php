<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="text-align:center">Présentation de PizzaBox</h1>
<?php
//var_dump($_GET);
echo("<br>");
$mesControllers= array("pizza","client","livreur");

if(!empty($_GET['controller']) && in_array($_GET['controller'],$mesControllers) ){
	$controller=$_GET['controller'];
    echo("controller : ".$controller);
    // appel du controller
    if(!empty($_GET['item'])){
        $item=$_GET['item'];
        echo("item : ".$item);}

    require("controller/".$controller.".php");

}
else {
    echo("Saisissez dans l'url un controller parmi : pizza, clients, livreur");
}
?>
</body>
</html>