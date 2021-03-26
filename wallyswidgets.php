<!DOCTYPE html>
<html>
 <head>
  <title>WALLY'S WIDGET COMPANY</title>
 </head>
 <body>
    <h2>Wally's Widgets<br></h2>
 <?php 
     
    $ordertotal=12501;			//BOSS VARIABLE
    
    $packs = array(250, 500, 1000, 2000, 5000);
    $pointer = count($packs)-1;
    $orderitems = array();
    $remainder=$ordertotal;
    
    echo $packs[$pointer] . " widgets is the biggest pack we sell. <br><br>";
    
    echo "The order total was " . $ordertotal . " and the components of the order are: <br>";

    //no extras for smaller quantities
    if (($remainder <= $packs[1]) AND ($remainder > 0 )){ 
      if ($remainder <= $packs[0]){
	$orderitems[] = $packs[0];
      }
      else{
	$orderitems[] = $packs[1];
      }    
    }
    
    //calculates how many packs to ship and adds them to an array
    else {
      while (($remainder > 0) AND ($pointer > 0)){
	  while ($remainder < $packs[$pointer]){
	    $pointer--;
	  }	  
	  if ($pointer < 0){
	    $pointer=0;
	  }
	  $orderitems[] = $packs[$pointer];
	  $remainder = $remainder - $packs[$pointer];
      } 
    }
    
    
    if ($ordertotal <= 0) {
	echo "You haven't ordered anything!<br>";
    }
	
	
    //spit out all the packs and quantities in the array to be shipped to the customer
    foreach($orderitems as $item) {
	echo "<li>$item widgets.</li>";
    }  
      
 ?> 
 <h6></h6>
 </body>
</html>
