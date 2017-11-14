function construirsettle(esquerda,selecionado,direita,cima =null){
    var DivEsquerda = '#'+esquerda;
    var DivSelecionado = '#'+selecionado;
    var DivDireita = '#'+direita;
    var DivCima = '#'+cima;
    var Madeira = $('#inputmadeira').val();
    var Ovelha = $('#inputovelha').val();
    var Tijolo = $('#inputtijolo').val();
    var Trigo = $('#inputtrigo').val();
    if(Madeira >= 1 && Ovelha >= 1 && Tijolo >= 1 && Trigo>= 1){
        if($(DivEsquerda).hasClass('addsettlement')||$(DivSelecionado).hasClass('addsettlement')||$(DivDireita).hasClass('addsettlement')||$(DivCima).hasClass('addsettlement')){
            alert('nao pode construir aqui');
        }else{
            $(DivSelecionado).addClass('addsettlement');
            Madeira--;
            Ovelha--;
            Tijolo--;
            Trigo--;
            $('#inputmadeira').val(Madeira);
            $('#inputovelha').val(Ovelha);
            $('#inputtijolo').val(Tijolo);
            $('#inputtrigo').val(Trigo);
        }
    }else{
        alert('Material insuficiente!');
    }
}

$(document).ready(function () {

});
