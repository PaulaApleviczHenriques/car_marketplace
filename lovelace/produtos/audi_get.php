<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT * FROM carro WHERE idcarro='audi'";
    $resultado = mysqli_query($con, $sql);

    $i = 0;

    while($registro = mysqli_fetch_assoc($resultado)){
        $audi[$i]["idcarro"] = $registro["idcarro"];
        $audi[$i]["carro"] = $registro["carro"];
        $audi[$i]["valor"] = (int)$registro["valor"];
        $i++;

    }

    $respostaJSON = json_encode($audi);
    echo $respostaJSON;

?>