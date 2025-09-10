<?php

    include "C_conexao_WEB_SQL.php";

    $sql = "SELECT carro, valor FROM carrinho";
    $resultado = mysqli_query($con, $sql);

    $i = 0; 

    while($registro = mysqli_fetch_assoc($resultado)){
        $dados[$i]["carro"] = $registro["carro"];
        $dados[$i]["valor"] = (int)$registro["valor"];
        $i++;
}  
    $objetoJSON = json_encode($dados);
    echo $objetoJSON
?>
