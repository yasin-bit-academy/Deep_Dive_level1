<?php
	while(true){
		$number = readline("Please enter a number \n");

		if($number == ""){
			echo $number . " is geen geldige cijfer \n";
		}

		if($number === "exit"){
			echo "Don't GO!!!";
			exit;
		}

		if($number % 2 == 0 && !is_nan($number)){
			echo "The number " . $number . " is even \n";
		}else if($number % 2 == 1 && !is_nan($number)){
			echo "The number " . $number . " is uneven \n";
		}

	}


?>