<?php
 
    //incluir o arquivo conexão com o banco de dados
    include 'database.php';
 
    //iniciar uma sessão no php
    session_start();
 
    //Recuperar as informações enviadas do formulário
    $login_sge = $_POST['login_sge'];
    $password_sge = $_POST['password_sge'];
 
    //Criar uma validação para verificar se os campos do formulario foram preenchidos
    if(empty($login_sge)){
        $_SESSION['mensagem'] = "Preencha o campo Login";
        header("Location: form_login_sge.php");
    }
    elseif(empty($password_sge)){
        $_SESSION['mensagem'] = "Preencha o campo Password";
        header("Location: form_login_sge.php");
    }
    else{
        //Criar um SQL para validar os dados
        $sql_login = "SELECT * FROM sge_login_alunos WHERE login_sge = '$login_sge'
        AND password_sge = '$password_sge'";
 
        //Acessar e executar os valores no banco de dados
        $consulta_login = mysqli_query($conexao, $sql_login);
 
        //Converter os resultados obtidos e um array associativo
        $dados_login = mysqli_fetch_array($consulta_login);
 
        //Validar o login e senha com o retorno dos dados
        if($dados_login['login_sge'] == $login_sge and $dados_login['password_sge'] == $password_sge)
        {
            //Criar um array com os dados do usuário
            $usuario = array("login" => $dados_login['login_sge'],
            "senha" => $dados_login['password_sge'],
            "perfil" => $dados_login['profile_sge']);
            //Colocar o array do usuário na sessão
            $_SESSION['usuario'] = $usuario;
           
            //Redirecionar para a pagina do painel (verificar o perfil)
            header("Location: painel_sge.php");
        }
        else{
            //Criar na sessão uma mensagem de aviso com erro
            $_SESSION['mensagem'] = 'Login ou senha inválidos';
            header("Location: form_login_sge.php");
        }
 
    }