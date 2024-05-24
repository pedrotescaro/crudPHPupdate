<?php include 'header.php';

session_start();
$usuario = $_SESSION['usuario'];
if($usuario['perfil'] != "admin"){?>
<!-- Conteudo em html - Perfil Aluno -->
    <br>
      <div class="d-grid"> 
        <a href="listar_aluno.php" class="btn btn-primary btn-block">Listar Alunos</a><br> 
        </div>
     <!-- FIM do Conteudo em html - Perfil Aluno -->
   
    <?php
   }  
    else{ ?>
    <!-- Conteudo em html - Perfil ADMIN -->
    <h2>Painel Adminstrativo </h2>
    <hr>
    <p>Você tem a permissão de acesso: <?php echo $usuario['perfil'] ?> </p>
    <br>
      <div class="d-grid"> 
        <a href="listar_aluno.php" class="btn btn-primary btn-block">Listar Alunos</a><br> <br>
    </div>
    <div class="d-grid"> 
        <a href="form_cad_aluno.php" class="btn btn-outline-primary btn-block">Cadastre-se</a><br>
    </div>
    <br>
  
    <?php
    }
?>
    <br>
    <?php include "footer.php"; ?>