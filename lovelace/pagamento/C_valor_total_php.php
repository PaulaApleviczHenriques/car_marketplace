<?php
    include("C_conexao_WEB_SQL.php");

    $sql = "SELECT SUM(valor) as total FROM carrinho";
    $resultado = mysqli_query($con, $sql);

    $i = 0;

    while($registro = mysqli_fetch_assoc($resultado)){
        $dados[$i]['total'] = (int)$registro['total'];
        $i++;
    }
    $objetoJSON = json_encode($dados);
    echo $objetoJSON;
?>