<?php
	echo "Welke operatie wil je gebruiken? (+/-)\n";
	$modifier = readline();
	while(true){
		if($modifier === "+"){
			break;
		}else if($modifier === "-"){
			break;
		}else{
			echo "". $modifier ." is geen geldige operatie, probeer opnieuw!1 \n";
			$modifier = readline();
		}
	}

	echo "Je eerste getal \n";
	$getal1 = readline();
	while(is_nan($getal1)){
		echo "dat is geen geldige operatie, probeer opnieuw!2 \n";
		$getal1 = readline();
	}

	echo "Je eerste geta2 \n";
	$getal2 = readline();
	while(is_nan($getal2)){
		echo "dat is geen geldige operatie, probeer opnieuw!3 \n";
		$getal2 = readline();
	}

	if( $modifier === "+"){
		$result = $getal1 + $getal2;
	}else{
		$result = $getal1 - $getal2;
	}

	echo "Je getal is... " . $result . "!!!";
?>