const form = document.querySelector("#formCadastro");
const usuario = document.querySelector("#usuario");
const senha = document.querySelector("#senha");
const email = document.querySelector("#email");

const erroUsuario = document.querySelector("#erroUsuario");
const erroSenha = document.querySelector("#erroSenha");
const erroEmail = document.querySelector("#erroEmail");

// Adiciona um evento de submit ao formulário
form.addEventListener("submit", function (e) {
    // Var p rastrear se tem erros
    let temErro = false;

    // Validação do campo usuario
    if (usuario.value.trim() === "") {
        erroUsuario.textContent = "Campo Usuário obrigatório";
        erroUsuario.style.display = "block"; // Mostra a mensagem de erro
        temErro = true; // Sinaliza que há um erro
    } else {
        erroUsuario.style.display = "none"; // Esconde a mensagem de erro
    }

    // Validação do campo "Senha"
    if (senha.value.trim() === "") {
        erroSenha.textContent = "Campo Senha obrigatório";
        erroSenha.style.display = "block";
        temErro = true;
    } else {
        erroSenha.style.display = "none";
    }

    // Validação do campo "Email"
    if (email.value.trim() === "") {
        erroEmail.textContent = "Campo Email obrigatório";
        erroEmail.style.display = "block";
        temErro = true;
    } else {
        erroEmail.style.display = "none";
    }

    // Se houver algum erro, previne o envio do formulário
    if (temErro) {
        e.preventDefault(); // Impede o envio
    } else {
        alert('Cadastro realizado com sucesso!');
        form.reset(); // Limpa os campos após o cadastro
    }
});
