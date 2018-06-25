<html>
    <head>
        <title> registrando liga</title>
    </head>
    <body>
    <?php
        session_start();
        
        //conecting:
        $db = mysqli_connect("127.0.0.1", "root", "12345", "bd_ufsbola");
        
        if(isset($_POST['botao_reg'])){
            
            //session_start();
            $nome = mysqli_real_escape_string($db, $_POST['nomeLiga']);
            $npartici = mysqli_real_escape_string($db, $_POST['numLiga']);
            $descri = mysqli_real_escape_string($db, $_POST['descLiga']);
            $pontuacao30 = mysqli_real_escape_string($db, $_POST['pontuacao1']);
            $pontuacao20 = mysqli_real_escape_string($db, $_POST['pontuacao2']);
            $pontuacao15 = mysqli_real_escape_string($db, $_POST['pontuacao3']);
            $pontuacao5 = mysqli_real_escape_string($db, $_POST['pontuacao4']);
        
            $sql = "INSERT INTO tb_usuarios(nome_usuarios, email_usuarios, apelido_usuarios, senha_usuarios, cpf_usuarios) VALUES('$nome', '$email', '$username', '$senha1', '$cpf')";
            $_SESSION['message'] = "Cadastro de liga realizado com sucesso";
            
        }
    ?>
    
    </body>
</html>