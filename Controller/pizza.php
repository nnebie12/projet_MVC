<?php
include("./model/pizza.php");
if (isset($item)) {

  echo("item : ".$item);
  // appel du controller en transmettant l'item
  $mapizza = get_one_pizza_mysqli($item);
  //var_dump($mapizza);
  include("./view/onepizza.php");


}
else{
  $tablopizza = get_list_pizza_mysqli();
  //var_dump($tablopizza);
  include("./view/pizza.php");
}
?>