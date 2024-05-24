<?php include 'header.php';?>
    <br>
    <div class="container mt-3">
        <form action="valida_login_aluno.php" method="post">
        <h2>Login</h2>
            <div class="mb-3 mt-3">
                <label for="login_sge">Nome de usuário: </label>
                <input type="text" name="login_sge" id="login_sge" class="form-control" placeholder="Informe seu nome de login">
            </div>
            <div class="mb-3">
                <label for="password_sge">Senha: </label>
                <input type="text" name="password_sge" id="password_sge" class="form-control" placeholder="Informe seu senha">
            </div>
            <input type="submit" value="Login" class="btn btn-primary">
        </form>
        <br>
        <p><a href="#">Esqueceu sua senha?</a></p>
        <p><a href="form_cadastro_login.php">Cadastre-se!</a></p>
      <?php
            session_start();
            if(isset($_SESSION['mensagem'])){
                $mensagem = $_SESSION['mensagem'];
                echo "<h3>" .$mensagem. "</h3>";
                unset($_SESSION['mensagem']);
            }
        ?>
         <br>
        <div class="d-grid"> 
            <a href="index.php" class="btn btn-secondary btn-block">Voltar</a><br>
        </div>
    </div>
   
 
    <?php include "footer.php"; ?>

