<?php
$conectar = mysql_connect('localhost','root','');
$banco = mysql_select_db('escola');

if (isset($_POST['conectar']))
{
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "select login,senha from usuario
            where login = '$login' and senha = '$senha'";

    $resultado = mysql_query($sql);

    if(mysql_num_rows($resultado) <=0){
        echo "<script language ='javascript' type='text/javascript'>
        alert ('login e/ou senha incorretos');
        window.location.href ='cadastrousuario.html';
        </script>";
    }
    else 
    {
        setcookie('login',$login);
        header('location:cadastrocurso.html');
    }
}
?>