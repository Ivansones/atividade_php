<?php
$conectar = mysql_connect('localhost','root','');
$banco = mysql_select_db('escola');

if (isset($_POST['gravar']))
{

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $codcurso = $_POST['codcurso'];

    $sql = "insert into aluno (codigo,nome,telefone,codcurso)
            values ('$codigo','$nome','$telefone','$codcurso')";

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
    $telefone = $_POST['telefone'];
    $codcurso = $_POST['codcurso'];

    $sql = "update aluno set nome ='$nome', telefone = '$telefone' 
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
    $telefone = $_POST['telefone'];
    $codcurso = $_POST['codcurso'];

    $sql = "delete from aluno
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
    $telefone = $_POST['telefone'];
    $codcurso = $_POST['codcurso'];

    $sql = "select * from aluno";

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
                 "Telefone   : ".$dados['telefone']."<br>".
                 "Codcurso   : ".$dados['codcurso']."<br><br>";
        }
    }

}
?>