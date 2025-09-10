<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT carro, valor FROM carro WHERE idcarro='porsche'";
    $test = mysqli_query($con, $sql);

    if(mysqli_num_rows($test) > 0){
        while($porsche = mysqli_fetch_assoc($test)){

          $carroporsche = $porsche['carro'];
          $valorporsche = (int)$porsche['valor'];
        }
        mysqli_query($con, "INSERT INTO carrinho (carro, valor) VALUES ('$carroporsche','$valorporsche')");
    }
?>