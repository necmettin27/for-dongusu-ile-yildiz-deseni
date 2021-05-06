<?php
	$number = 5;
	$count = $number - 1;
	 for ($k = 1; $k <= $number; $k++) {
        for ($i = 1; $i <= $count; $i++){
            echo '&nbsp;&nbsp;';
        }
        $count--;
        for($i = 1; $i <= 2 * $k - 1; $i++){
            echo '*';
        }
        echo '<br/>';
    }
    $count = 1;
 	for ($k = 1; $k <= $number - 1; $k++) {
        for ($i = 1; $i <= $count; $i++){
            echo '&nbsp;&nbsp;';
        }
        $count++;
        for ($i = 1; $i <= 2 * ($number - $k) - 1; $i++){
            echo '*';
        }
        echo '<br/>';
    }	 
?>