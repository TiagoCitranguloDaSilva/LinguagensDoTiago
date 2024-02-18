
var telaEscolha = document.getElementById("telaEscolha")
var telaTexto = document.getElementById("textoLinguagemContainer")

function selected(elemento){
    console.log(window.location.href + "?lang=" + elemento.id)
    window.location.replace(window.location.href + "?lang=" + elemento.id)
}

function showLanguageContent(texto, nomeLinguagem){
    telaEscolha.style.display = 'none';
    telaTexto.style.display = 'block';
    document.getElementById('content').innerHTML = texto
    document.getElementById("linguagemTitulo").children[0].innerHTML = nomeLinguagem.toUpperCase()

}