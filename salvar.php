<?php
    include_once("conexao.php");

    $nome_user = $_POST['nome_usuario'];
    $endereco_user = $_POST['endereco_usuario'];
    $cidade_user = $_POST['cidade_usuario'];
    $telefone_user = $_POST['fone_usuario'];
    $email_user = $_POST['email_usuario'];


    $result_usuario = "INSERT INTO clientes(nome, endereco, cidade, telefone, email ) VALUES ('$nome_user','$endereco_user','$cidade_user', '$telefone_user', '$email_user')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if($resultado_usuario){
        header("Location: contato.php");
    }

?>