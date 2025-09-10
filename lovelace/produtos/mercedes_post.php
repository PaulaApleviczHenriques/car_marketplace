<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT carro, valor FROM carro WHERE idcarro='mercedes'";
    $test = mysqli_query($con, $sql);

    if(mysqli_num_rows($test) > 0){
        while($mercedes = mysqli_fetch_assoc($test)){

          $carromercedes = $mercedes['carro'];
          $valormercedes = (int)$mercedes['valor'];
        }
        mysqli_query($con, "INSERT INTO carrinho (carro, valor) VALUES ('$carromercedes','$valormercedes')");
    }
?>