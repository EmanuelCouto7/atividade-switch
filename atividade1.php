<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label for="Digite seu nome"></label>
    <input name="nome">
</form>
    <?php
    if(isset($_POST['nome']))    {
        $nome = $_POST["nome"];
   
 
    switch($nome){
        case $nome:
        echo "Seu nome é $nome";
        break;
    }
     }

?>
</body>
</html>