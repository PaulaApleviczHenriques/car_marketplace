<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT carro, valor FROM carro WHERE idcarro='jaguar'";
    $test = mysqli_query($con, $sql);

    if(mysqli_num_rows($test) > 0){
        while($jaguar = mysqli_fetch_assoc($test)){

          $carrojaguar = $jaguar['carro'];
          $valorjaguar = (int)$jaguar['valor'];
        }
        mysqli_query($con, "INSERT INTO carrinho (carro, valor) VALUES ('$carrojaguar','$valorjaguar')");
    }
?>