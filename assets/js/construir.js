function construir(esquerda,selecionado,direita,cima =null){
    var DivEsquerda = '#'+esquerda;
    var DivSelecionado = '#'+selecionado;
    var DivDireita = '#'+direita;
    var DivCima = '#'+cima;
    if($(DivEsquerda).hasClass('addsettlement')||$(DivSelecionado).hasClass('addsettlement')||$(DivDireita).hasClass('addsettlement')||$(DivCima).hasClass('addsettlement')){
        alert('nao pode construir aqui');
    }else{
        $(DivSelecionado).addClass('addsettlement');
    }
}
$(document).ready(function () {
});
