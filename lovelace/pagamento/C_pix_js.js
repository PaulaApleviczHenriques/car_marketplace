function salvarpix() {
    alert("Compra efetuada com sucesso!")

    var form = document.getElementById("pix")
    var dados = new FormData(form);

    fetch("C_pix_php.php",{
        method:"POST",
        body: dados

    });
}