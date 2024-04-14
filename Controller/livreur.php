<?php
include("./model/livreur.php");
if (isset($item)) {

    echo("item : ".$item);
    // appel du controller en transmettant l'item
    $monlivreur = get_one_livreur_mysqli($item);
    //var_dump($monlivreur);
    include("./view/onelivreur.php");


}
else{
    $tablolivreur = get_list_livreur_mysqli();
    //var_dump($tablolivreur);
    include("./view/livreur.php");
}
?>