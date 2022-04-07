<?php
    //variaveis globais
    // $nome = $_GET['nome'];
    // $sexo = $_GET['sexo'];
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $RG = $_POST["RG"];
    $CPF = $_POST["CPF"];

    echo "<p><strong> nome:".$nome."</strong></p>";
    echo "<p><strong> sexo:".$sexo."</strong></p>";
    echo "<p><strong> senha:".$_POST['senha']."</strong></p>";
    echo "<p><strong> sexo:".$_POST['nome']."</strong></p>";
    echo "<p><strong> rg:".$RG."</strong></p>";
    echo "<p><strong> rg:".$CPF."</strong></p>";

?>