<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<p>Dado un array con números hacer un while que se ejecute hasta que encuentre un valor mayor que 60</p>
		<?php
			
			$nums = array(13,17,46,24,59,16,31,68,46,70,21,7);

			$i=0;
			while($nums[$i] <= 60){
				$i++;
			}
			echo "El primer valor mayor que 60 es: " .$nums[$i];
		?>
	</body>
</html>