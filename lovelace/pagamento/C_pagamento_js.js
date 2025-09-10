fetch("C_valor_total_php.php", {
    method: "GET"
}).then(async function (reposta) {
    var dados = await reposta.json()
    listarProdutos(dados)
})

function listarProdutos(dados) {
    for (var i = 0; i < dados.length; i++) {
        document.getElementById("total").innerHTML += "Valor total: R$" + dados[i].total;
    }
}