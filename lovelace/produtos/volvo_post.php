<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT carro, valor FROM carro WHERE idcarro='volvo'";
    $test = mysqli_query($con, $sql);

    if(mysqli_num_rows($test) > 0){
        while($volvo = mysqli_fetch_assoc($test)){

          $carrovolvo = $volvo['carro'];
          $valorvolvo = (int)$volvo['valor'];
        }
        mysqli_query($con, "INSERT INTO carrinho (carro, valor) VALUES ('$carrovolvo','$valorvolvo')");
    }
?>