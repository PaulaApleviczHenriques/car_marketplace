<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT * FROM carro WHERE idcarro='bmw'";
    $resultado = mysqli_query($con, $sql);

    $i = 0;

    while($registro = mysqli_fetch_assoc($resultado)){
        $bmw[$i]["idcarro"] = $registro["idcarro"];
        $bmw[$i]["carro"] = $registro["carro"];
        $bmw[$i]["valor"] = (int)$registro["valor"];
        $i++;

    }

    $respostaJSON = json_encode($bmw);
    echo $respostaJSON;

?>