<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT * FROM carro WHERE idcarro='porsche'";
    $resultado = mysqli_query($con, $sql);

    $i = 0;

    while($registro = mysqli_fetch_assoc($resultado)){
        $porsche[$i]["idcarro"] = $registro["idcarro"];
        $porsche[$i]["carro"] = $registro["carro"];
        $porsche[$i]["valor"] = (int)$registro["valor"];
        $i++;

    }

    $respostaJSON = json_encode($porsche);
    echo $respostaJSON;

?>