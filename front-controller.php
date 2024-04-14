<?php
  if(isset($_GET["controller"])) {
    switch ($_GET["controller"]) {
      case 'pizza':
        require("./Controller/pizza.php");
        break;
      case 'livreur':
        require("./Controller/livreur.php");
        break;
      case 'client':
        require("./Controller/client.php");
        break;
    }
  }
?>
