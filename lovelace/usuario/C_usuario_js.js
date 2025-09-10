function gravar() {

    if (document.getElementById("nome").value != "" &&
        document.getElementById("email").value != "" &&
        document.getElementById("cpf").value != "" &&
        document.getElementById("senha").value != "" &&
        document.getElementById("csenha").value != "") {
        if (document.getElementById("senha").value ==
            document.getElementById("csenha").value) {

            alert("Usuário cadastrado! Faça seu login")
            window.location.href = '../login/C_login_html.html'

            var form = document.getElementById("cadastro")
            var dados = new FormData(form);

            fetch("C_usuario_php.php", {
                method: "POST",

                body: dados
            });
        }
        else {
            alert("Senhas diferentes");
        }
    }
    else {
        alert("Campos obrigatórios");
    }
}