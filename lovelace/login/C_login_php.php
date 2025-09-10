<?php

include("C_conexao_WEB_SQL.php");

if(isset($_POST["email"]) || isset($_POST["senha"] )) {

    if(strlen($_POST["email"]) == 0) {
        echo '<script language="javascript">alert("Preencha seu email");</script>';
    } else if (strlen($_POST["senha"]) == 0){
        echo '<script language="javascript">alert("Preencha sua senha");</script>';
    } else {

        $email = $con->real_escape_string($_POST["email"]);
        $senha = $con->real_escape_string($_POST["senha"]);

        $senhacript = md5($senha);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senhacript' ";
        $sql_query = $con->query($sql_code);
        
        $quantidade = $sql_query->num_rows;
        
        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc(); 

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION["id"] = $usuario["idusuarios"];
            $_SESSION["nome"] = $usuario["nome"];

            header("Location: ../principal/C_principal_html.html");

        } else{
            echo '<script language="javascript">alert("Falha ao logar! E-mail ou senha incorretos ou inexistentes!");</script>';
        }
    }
}
?>