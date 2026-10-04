<?php  
	$matkul = [
		"PTI",
		"ALPRO",
		"DPW",
		"STRUKDAT",
		"JARKOM",
		"PAW",
		"PSBF",
		"RPL"
	];
	foreach ($matkul as $i => $value) {
		switch ($matkul[$i]){
			case 'PTI':
				echo "Saya suka ".$matkul[$i]."<br>";
				break;
			case 'ALPRO':
				echo "Saya suka ".$matkul[$i]."<br>";
				break;
			case 'DPW':
				echo "Saya suka ".$matkul[$i]."<br>";
				break;
			case 'STUKDAT':
				echo "Saya suka ".$matkul[$i]."<br>";
				break;
			case 'JARKOM':
				echo "Saya suka ".$matkul[$i]."<br>";
				break;
			case 'PAW':
				echo "Saya suka ".$matkul[$i]."<br>";
				break;
			case 'PSBF':
				echo "Saya tidak mengambil matkul ".$matkul[$i]."<br>";
				break;
			case 'RPL':
				echo "Saya tidak mengambil matkul  ".$matkul[$i]."<br>";
				break;
		}
	}
?>