<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label for="Digite seu jogador favorito">Qual seu jogador favorito?</label>
    <input name="jogador">
</form>
    <?php
    if(isset($_POST['jogador']))    {
        $jogador = $_POST["jogador"];
   
 
    switch($jogador){
        case "$jogador":
        echo "Seu jogador favorito é o $jogador" ;
        break;
    }
     }

?>
</body>
</html>