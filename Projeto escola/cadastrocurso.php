<?php
$conectar = mysql_connect('localhost','root','');
$banco = mysql_select_db('escola');

if (isset($_POST['gravar']))
{

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $codcoord = $_POST['codcoord'];
    $sql = "insert into curso (codigo,nome,codcoord)
        values ('$codigo','$nome','$codcoord')";

    $resultado = mysql_query($sql);


    if ($resultado ==TRUE)
    {
        echo "Dados gravados com sucesso";

    }
    else
    {
        echo "Erro ao gravar dados";
    }



}

if (isset($_POST['alterar']))
{
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $codcoord = $_POST['codcoord'];

    $sql = "update curso set nome ='$nome'
            where codigo ='$codigo'";

    $resultado = mysql_query($sql);

    if ($resultado ==TRUE)
    {
        echo "Dados alterados com sucesso";

    }
    else
    {
        echo "Erro ao alterar dados";
    }

}

if (isset($_POST['excluir']))
{
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $codcoord = $_POST['codcoord'];

    $sql = "delete from curso
    where codigo='$codigo'";

    $resultado = mysql_query($sql);

    if ($resultado ==TRUE)
    {
        echo "Dados excluidos com sucesso";

    }
    else
    {
        echo "Erro ao excluir dados";
    }

}

if (isset($_POST['pesquisar']))
{
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $codcoord = $_POST['codcoord'];

    $sql = "select * from curso";

    $resultado = mysql_query($sql);

    if (mysql_num_rows($resultado) == 0)
    {
        echo "Erro ao pesquisar dados";
    }
    else
    {
        echo "<b>"."Resultado da pesquisa dos cordenadores"."</b><br>";
        while($dados = mysql_fetch_array($resultado))
        {
            echo "Codigo : ".$dados['codigo']."<br>".
                 "Nome   : ".$dados['nome']."<br>".
                 "Codcoord : ".$dados['codcoord']."<br><br>";
        }
    }

}

?>