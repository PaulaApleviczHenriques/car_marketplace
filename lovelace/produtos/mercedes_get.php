<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT * FROM carro WHERE idcarro='mercedes'";
    $resultado = mysqli_query($con, $sql);

    $i = 0;

    while($registro = mysqli_fetch_assoc($resultado)){
        $mercedes[$i]["idcarro"] = $registro["idcarro"];
        $mercedes[$i]["carro"] = $registro["carro"];
        $mercedes[$i]["valor"] = (int)$registro["valor"];
        $i++;

    }

    $respostaJSON = json_encode($mercedes);
    echo $respostaJSON;

?>