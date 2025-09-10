function salvarcartao() {
    alert("Compra efetuada com sucesso!")

    var form = document.getElementById("cartao")
    var dados = new FormData(form);

    fetch("C_cartao_php.php",{
        method:"POST",
        body: dados

    });
}