<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT carro, valor FROM carro WHERE idcarro='mini'";
    $test = mysqli_query($con, $sql);

    if(mysqli_num_rows($test) > 0){
        while($mini = mysqli_fetch_assoc($test)){

          $carromini = $mini['carro'];
          $valormini = (int)$mini['valor'];
        }
        mysqli_query($con, "INSERT INTO carrinho (carro, valor) VALUES ('$carromini','$valormini')");
    }
?>