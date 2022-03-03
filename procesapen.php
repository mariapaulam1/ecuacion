<html>
	<head>
	<title>Ecuación</title>
	</head>
		<body>	
		
		<?php	
	
	$L = $_POST['L']; 
	$g = $_POST['g']; 
 

	 
	$oper1 = 2*M_PI; 
	$oper2 = fdiv($L,$g); 
	$oper3 = sqrt($oper2);	 

	$result1 = $oper3; 

echo"El periodo del péndulo es igual a = $result1 s"; 

?>


		</body>
</html>

