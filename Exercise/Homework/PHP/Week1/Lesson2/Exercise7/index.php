<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset ="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercise 7</title>
	<link rel="stylesheet" href="./exercse7.css"/>
</head>
<body>
	<table width="270px" cellspacing="1px" cellpadding="1px" border="1px">
		<tbody>
            <?php  
            for($i=1; $i <= 8; $i++)  
            {  
                echo "<tr>"; 
                for($j = 1; $j <= 8; $j++)  
                {  
                  $total = $i + $j;  
                  if($total % 2 == 0)  
                  {  
                    echo "<td height = 30px width = 30px bgcolor=#FFFFFF></td>";  
                  }  
                  else  
                  {  
                    echo "<td height = 30px width = 30px bgcolor=#000000></td>";  
                  }  
                }  
                echo "</tr>";  
            }  
            ?>  
     </tbody>
	</table>
</body>
</html>