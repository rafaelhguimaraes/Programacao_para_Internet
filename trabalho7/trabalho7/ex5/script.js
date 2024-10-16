const modalButton = document.getElementById("openModal");

const modal = document.getElementById("modal");

const closeButton = document.getElementsByClassName("close")[0];

// Quando o botão for clicado, a modal será exibida
modalButton.onclick = function() {
    modal.style.display = "block"; // Altera o estilo para mostrar a modal
}

// Quando o botão de fechar for clicado, a modal será ocultada
closeButton.onclick = function() {
    modal.style.display = "none"; // Altera o estilo para ocultar a modal
}

// Quando o usuário clicar fora da modal, ela será fechada
window.onclick = function(event) {
    if (event.target == modal) { // Verifica se o clique foi fora da modal
        modal.style.display = "none"; // Oculta a modal
    }
}
