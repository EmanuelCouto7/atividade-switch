<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label for="Qual mes nós estamos?">Qual mes nós estamos?</label>
    <input name="mes">
</form>
    <?php
    if(isset($_POST['mes']))    {
        $mes = $_POST["mes"];
   
 
    switch($mes){
            case 1:
                echo"Estamos em janeiro";
                break;
            case 2:
                echo"Estamos em fevereiro";
                break;
            case 3:
                echo"Estamos em março";
                break;
            case 4:
                echo"Estamos em abril";
                break;
            case 5:
                echo"Estamos em maio";
                break;
            case 6:
                echo"Estamos em junho";
                break;
            case 7:
                echo"Estamos em julho";
                break;
            case 8:
                echo"Estamos em agosto";
                break;
            case 9:
                echo"Estamos em setembro";
                break;
            case 10:
                echo"Estamos em outubro";
                break
            case 11:
                echo"Estamos em novembro";
                break;
            case 12:
                echo"Estamos em dezembro";
                break;

        }
        
     }

?>
</body>
</html>