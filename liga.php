<?php
    session_start();
        
    //conecting:
    $db = mysqli_connect("localhost", "root", "02091999", "bd_ufsbola");
        
    if(isset($_POST['btn_criar'])){
            
        //session_start();
        $nome = mysqli_real_escape_string($db, $_POST['nomeLiga']);
        $npartici = mysqli_real_escape_string($db, $_POST['numLiga']);
        $descri = mysqli_real_escape_string($db, $_POST['descLiga']);
        $pontuacao30 = mysqli_real_escape_string($db, $_POST['pontuacao1']);
        $pontuacao20 = mysqli_real_escape_string($db, $_POST['pontuacao2']);
        $pontuacao15 = mysqli_real_escape_string($db, $_POST['pontuacao3']);
        $pontuacao5 = mysqli_real_escape_string($db, $_POST['pontuacao4']);
        
        $sql = "INSERT INTO tb_ligas(nome_ligas, maxparticipantes_ligas, descricao_ligas, pontosplacarexato_ligas, pontosvencedor_ligas, pontosplacarnaoexato_ligas, pontosgol_ligas) VALUES('$nome', '$npartici', '$descri', '$pontuacao30', '$pontuacao20', '$pontuacao15', '$pontuacao5')";
        $_SESSION['message'] = "Cadastro de liga realizado com sucesso";
        
    }
?>