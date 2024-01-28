<?php
/*
     Aqui eu estou a incluir outro
arquivo/pag php com o nome de ligacao.php
 */
include('ligacao.php');

/*
    Aqui eu estou averificar se as nossas variaveis (Email e Senha) se são existentes.  
*/
if (isset($_POST['email']) && isset($_POST['senha']))
{
  
    /*
        Aqui eu estou averificar se eles não foram prienchidos, se não foram penchidos teremos uma mensagem a pedir para pencher os mesmos.  
    */
    if (strlen($_POST['email']) == 0 && strlen($_POST['senha']) == 0 ) 
    {
        echo "Preencha o seu Email e a sua senha para poder continuar por favor ";
    
    }else if(strlen($_POST['email']) == 0 )
    {
        echo "Preencha a sua Email para poder continuar por favor ";
    
    }else if(strlen($_POST['senha']) == 0 )
    {
        echo "Preencha a sua senha para poder continuar por favor ";
    
    }else
    {
        $email = $mysqli -> real_escape_string($_POST['email']);
        $senha = $mysqli -> real_escape_string($_POST['senha']);
        $sql_code ="SELECT * FROM dados WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli -> query($sql_code) or die("falha na execução do código SQL: ".$mysqli -> error);

        $quantidade = $sql_query -> num_rows;

        if ($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if (isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $usuario ['id'];
            $_SESSION['nome'] = $usuario ['email'];

            header("location: programa.php");
        }else{
            echo "falha ao logar o Email ou Senha está errado, por favor Incira o Email e Senha da sua conta.";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <p>
            <label for="">Email</label>
            <input type="email" name="email" id="">
        </p>
        <p>
            <label for="">Senha</label>
            <input type="password" name="senha" id="">
        </p>
        <button type="submit">Login</button>
    </form>
</body>
</html>