$(document).ready(function () {
  $("#roll").click(function() {
    var min = Math.ceil(2);
    var max = Math.floor(12);
    var dado = Math.floor(Math.random() * (max - min + 1)) + min;
    $("#resultado").val(dado);
    $("input[type=hidden]").each(function(index, valor) {
      var numero;
      var dado = $('#resultado').val();
      var numero = valor.value.split('/');
      var div = '.'+numero[0]
      if(dado == numero[0]){
        $(div).css( "color", "red" );
      }else{
        $(div).css( "color", "black" );
      }
    });
  });
});
