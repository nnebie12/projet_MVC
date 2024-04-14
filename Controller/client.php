<?php
include("./model/client.php");
if (isset($item)) {

    echo("item : ".$item);
    // appel du controller en transmettant l'item
    $monclient = get_one_client_mysqli($item);
    //var_dump($monclient);
    include("./view/oneclient.php");


}
else{
    $tabloclient = get_list_client_mysqli();
    //var_dump($tabloclient);
    include("./view/client.php");
}
?>