function inicio() {
    alert('Clique na logo!')
}

function BoaNoite() {
    const name = prompt("Qual o seu nome?")
    const nameC = prompt("Confirme seu nome.")
    if(name == nameC) {
        alert(`Boa noite ${name}`)   
    }
    if(name != nameC || name === '' && nameC === '') {
        alert('Nome invalido\nBoa noite Fulano de tal')
    }
}

function alteraImagem(){
    var imagem = document.getElementById("imagem");
    if(imagem.src.match("background.jpg"))
        imagem.src = "img/BackgroundS/background03.jpg";
    else
        imagem.src = "minion.jpg";
}