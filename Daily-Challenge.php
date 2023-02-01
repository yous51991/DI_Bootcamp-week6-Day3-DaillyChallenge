<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Challenge</title>
</head>
<body>
      <?php 
           function electricity_bill($value='')
           {
           	$valeur = (int)$value;
           	switch ($valeur) {
           		case $valeur <= 50:
           			echo 'Votre facture sera de : ', (float)($valeur* 3.50) ;
           			break;
           		case $valeur < 200:
           		     $valeur1 = $valeur - 50 ;
           		     echo 'Votre facture sera de : ', (50 * 3.50) + ($valeur1 * 4.0) ;
           		     break;
           		case $valeur < 250:
           		     $valeur1 = $valeur - 50 ;
           		     $valeur2 = $valeur1 - 100 ;
           		     echo 'Votre facture sera de : ', (50 * 3.50) + ($valeur1 * 4.0) + ($valeur2 * 5.20);
                     break;
           		case $valeur >= 250:
           		     $valeur1 = $valeur - 50 ;
           		     $valeur2 = $valeur1 - 100 ;
           		     $valeur3 = $valeur2 - 200 ;
           		     echo "Votre facture sera de : ", (50 * 3.50) + ($valeur1 * 4.0) + ($valeur2 * 5.20) + ($valeur2 * 6.50);
                     break;
           	}
           }
           electricity_bill(200);
       ?>
</body>
</html>