
fetch("C_carrinho_php.php", {
    method: "GET"
}).then(async function (reposta) {
    dados = await reposta.json();
    listarCarrinho(dados);
})

function listarCarrinho(dados) {

    for (var i = 0; i < dados.length; i++) {
        document.getElementById("produtos").innerHTML += dados[i].carro
        document.getElementById("produtos").innerHTML += " - R$" + dados[i].valor + "<br>"
    }
}