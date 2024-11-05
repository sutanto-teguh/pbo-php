<?php  
function myFunction() {
  echo "Hallo...tulisan ini dari function";
}

$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);

$myArr[3]();
?>  