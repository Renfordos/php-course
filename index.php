<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
</head>
<body>
<?php
$name = "PHP store";
$credit = 150;
$recomend = "Please save your money for the future";
echo "<h1>Welcome to ".$name."!</h1>";
echo "<h2>You have $".$credit." in your wallet.</h2>";
echo "<h3>".$recomend."!</h3>";

$products['CPU']=200;
$products['RAM']=70;
$products['Motherboard']=100;

 foreach($products as $key => $value){
    echo "<p>The ".$key." costs ".$value."</p>";
  }
  echo "<h2>Items you can afford</h2>";
   foreach($products as $key => $value){
    if($value <= $credit ){
    	echo "<p>".$key."</p>"; 
		    }
	    }
    ?>
  </body>
</html>