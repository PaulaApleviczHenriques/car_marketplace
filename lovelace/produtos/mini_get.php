<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT * FROM carro WHERE idcarro='mini'";
    $resultado = mysqli_query($con, $sql);

    $i = 0;

    while($registro = mysqli_fetch_assoc($resultado)){
        $mini[$i]["idcarro"] = $registro["idcarro"];
        $mini[$i]["carro"] = $registro["carro"];
        $mini[$i]["valor"] = (int)$registro["valor"];
        $i++;

    }

    $respostaJSON = json_encode($mini);
    echo $respostaJSON;

?>