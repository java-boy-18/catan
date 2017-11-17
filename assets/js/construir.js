
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
function construirroad(esquerda,selecionado,direita,cima =null, baixo=null){
    var DivEsquerda = '#'+esquerda;
    var DivSelecionado = '#'+selecionado;
    var DivDireita = '#'+direita;
    var DivCima = '#'+cima;
    var DivBaixo = '#'+baixo;
    var Madeira = $('#inputmadeira').val();
    var Tijolo = $('#inputtijolo').val();
    var TemClass = 0;
    $("div[id^='r']").each(function(index, valor) {
        var Div = '#'+valor.id;
        if($(Div).hasClass('addroad')){
            TemClass ++;
        }
    });
    if(TemClass >= 2){
        if(Madeira >= 1 && Tijolo >= 1){
            if($(DivEsquerda).hasClass('addroad')||$(DivDireita).hasClass('addroad')||$(DivCima).hasClass('addroad')||$(DivBaixo).hasClass('addroad')){
                if($(DivSelecionado).hasClass('addroad')){
                    alert('nao pode fazer estrada aqui!!!\nja existe uma estrada')
                }else{
                    Madeira--;
                    Tijolo--;
                    $('#inputmadeira').val(Madeira)
                    $('#inputtijolo').val(Tijolo);
                    $(DivSelecionado).addClass('addroad');
                }
            }else{
                alert('nao pode fazer estrada aqui!!!\nVoce deve continuar uma da estradas estrada ja construidas')
            }
        }else{
            alert('Material insuficiente!');
        }
    }else{
        $(DivSelecionado).addClass('addroad');
    }
}

$(document).ready(function () {

});
