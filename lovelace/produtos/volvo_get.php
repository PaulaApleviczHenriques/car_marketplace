<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT * FROM carro WHERE idcarro='volvo'";
    $resultado = mysqli_query($con, $sql);

    $i = 0;

    while($registro = mysqli_fetch_assoc($resultado)){
        $volvo[$i]["idcarro"] = $registro["idcarro"];
        $volvo[$i]["carro"] = $registro["carro"];
        $volvo[$i]["valor"] = (int)$registro["valor"];
        $i++;

    }

    $respostaJSON = json_encode($volvo);
    echo $respostaJSON;

?>