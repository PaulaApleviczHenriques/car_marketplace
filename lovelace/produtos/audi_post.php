<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT carro, valor FROM carro WHERE idcarro='audi'";
    $test = mysqli_query($con, $sql);

    if(mysqli_num_rows($test) > 0){
        while($audi = mysqli_fetch_assoc($test)){

          $carroaudi = $audi['carro'];
          $valoraudi = (int)$audi['valor'];
        }
        mysqli_query($con, "INSERT INTO carrinho (carro, valor) VALUES ('$carroaudi','$valoraudi')");
    }
?>