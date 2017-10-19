$(document).ready(function () {
  $("#roll").click(function() {
    jQuery.ajax({
      type: "POST",
      url: "Welcome/dice?ajax=true",
      cache: false,
      beforeSend: function () {
        $("#resultado").html("Carregando...");
      },
      success: function (retorno) {
         $("#resultado").val(retorno);
      }
    });
  });
});
