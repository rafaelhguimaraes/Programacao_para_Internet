const campoInteresse = document.querySelector("#campoInteresse");

campoInteresse.addEventListener("keyup", (e) => {
    if (e.key === "Enter" && campoInteresse.value.trim() !== "") {
        const novoLi = document.createElement("li"); 
        const novoSpan = document.createElement("span");  
        const novoBotao = document.createElement("button");  

        novoSpan.textContent = campoInteresse.value;
        novoBotao.textContent = 'X';

        novoLi.appendChild(novoSpan);
        novoLi.appendChild(novoBotao);

        const listaInteresses = document.querySelector("#listaInteresses");
        listaInteresses.appendChild(novoLi);

        novoBotao.onclick = function () {
            listaInteresses.removeChild(novoLi);
        };

        campoInteresse.value = '';
    }
});
