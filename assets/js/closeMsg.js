function closeMsg () {
    // Muda a aparência da mensagem para fazer efeito de "fade out"
    divElement = document.getElementById("container-enviado-msg")
    divElement.style.color = "transparent"
    divElement.style.backgroundColor = "transparent"
    divElement.style.transition = "300ms"

    // Espera  300ms para executar a função anônima
    setTimeout(function () {
        divElement.style.display = "none"
    }, 300);
    
}

