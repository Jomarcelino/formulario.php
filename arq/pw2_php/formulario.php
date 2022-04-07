<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario.php</title>
</head>
<body>
    <form action="proc.php" method="post" enctype="multpart/form-data">
    <div>
        <label>nome: </label>
        <input type="text" id="nome" name="nome">
    </div>

    <div>
        <label>sexo: </label>
        <input type="radio" id="sexo" name="sexo" value="f">feminino
        <input type="radio" id="sexo" name="sexo" value="m">masculino
    </div>

    <div>
        <label for="x">senha: </label>
        <input type="password" id="x" name="senha">
    </div>

    <div>
        <label>RG: </label>
        <input type="text" id="RG" name="RG"/>
    </div>

    <div>
        <label>CPF: </label>
        <input type="text" id="CPF" name="CPF"/>
    </div>

    <input type="submit" value="cadastro"/>

<?php
    if(isset($_GET['erro']) && $_GET ['ERRO'] == "senha"){
        
    }

?>
</body>
</html>