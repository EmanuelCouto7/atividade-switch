<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label for="Digite um numero"></label>
    <input name="valor1">
</form>
    <?php
    if($_POST)  {
        $valor1 = $_POST['valor1'];
   
 
  for($i = 1; $i <= 10; $i++){
    echo $valor1 . " x " . $i . " = " . $valor1 * $i;
    echo '<br>';
  }
  
    }
    switch($valor1){

        case 1:
            echo "Voce está na tabuada $valor1";
            for($i = 1; $i <= 10; $i++){
                echo $valor1 . " x " . $i . " = " . $valor1 * $i;
                echo '<br>';
                
            }
                break;
                default:
                echo"somente da tabuada do 1 ao 9";
                break;
        }


       
   
    
    
?>
</body>
</html>