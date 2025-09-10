<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT carro, valor FROM carro WHERE idcarro='bmw'";
    $test = mysqli_query($con, $sql);

    if(mysqli_num_rows($test) > 0){
        while($bmw = mysqli_fetch_assoc($test)){

          $carrobmw = $bmw['carro'];
          $valorbmw = (int)$bmw['valor'];
        }
        mysqli_query($con, "INSERT INTO carrinho (carro, valor) VALUES ('$carrobmw','$valorbmw')");
    }
?>