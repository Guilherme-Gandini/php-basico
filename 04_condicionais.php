<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $senha = $_POST['senha'];
        if ($senha == '123') {
            header("location: 4b_bem_vndo.php");
            exit();
        } else {
            $erro = "Senha incorreta. Tente novamente";
        }
    }
        
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>