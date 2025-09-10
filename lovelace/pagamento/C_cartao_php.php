<?php
    date_default_timezone_set("America/Sao_Paulo");

    include "C_conexao_WEB_SQL.php";
    
    $pix = implode(["Cartão de Crédito"]);
    $nome = $_POST["nome"];
    $valor = "SELECT sum(valor) AS total FROM carrinho";
    $exec = mysqli_query($con, $valor);
    if(mysqli_num_rows($exec) > 0){
        while($re = mysqli_fetch_assoc($exec)){
          $valor = (int)$re['total'];
    $data_c = date("Y/m/d H:i:s");


    mysqli_query($con, "INSERT INTO pagamento (tipopag, nome, valor, data_c) VALUES ('$pix', '$nome', '$valor', '$data_c')");

}}
?>
