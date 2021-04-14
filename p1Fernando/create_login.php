<?php
//sessão
session_start();
//Conexão
require 'database.php';

if(isset($_POST['btn-criar-usuario'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['password']);
    $avatar = mysqli_escape_string($connect, $_FILES['avatar']['name']);
    $extensao = strtolower(pathinfo($avatar, PATHINFO_EXTENSION));
    $photo = md5(time()).".".$extensao;
    $diretorio = "img/";

    move_uploaded_file($_FILES['avatar']['tmp_name'], $diretorio . $photo);
        
    
        $sql = "insert into usuarios (name, password, username, imagem) values ('$nome', '$senha', '$usuario', '$photo')";

        if(mysqli_query($connect, $sql)):
        header('Location: index.php');
        else:
        header('Location: novo_usuario.php');
        endif;

        endif;

    
