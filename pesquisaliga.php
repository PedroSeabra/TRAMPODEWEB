<?php
        session_start();
        
        //conecting:
        $db = mysqli_connect("localhost", "root", "02091999", "bd_ufsbola");
        
        if(isset($_POST['btn_pesquisar'])){
            
            //session_start();
            $nome = mysqli_real_escape_string($db, $_POST['pesquisaLiga']);
            
            $sql = "SELECT nome_ligas FROM tb_ligas WHERE nome_ligas <= pesquisaLiga";
            //echo $sql;
            //die();
            mysqli_query($db, $sql);
            
           
        }
?>