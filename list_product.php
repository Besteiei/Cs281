<?php

  include "class/Conn.php";
  include "class/Product.php";

  $id = "";
  $name = "";
  $price = "";
  $info = "";
  $img = "";
  $pro = new Product($id,$name,$price,$info,$img);
  $arrProd = $pro->getListProd($conn);

  for($i = 0; $i<count($arrProd);$i++){


      echo $arrProd[$i]->_pid . " ";
      echo $arrProd[$i]->_pname . " ";
      echo $arrProd[$i]->_info . " ";
      echo $arrProd[$i]->_price . " ";
      echo "<br>";
  }

?>
