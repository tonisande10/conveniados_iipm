$(document).ready(function () {
    $("input[name='cod_posto']").blur(function () {
        var $chefe = $("input[name='chefe']");
		     var $telefonec = $("input[name='telefonec']");
			      var $telefoned = $("input[name='telefoned']");
				       var $rg = $("input[name='rg']");
					   var $emailc= $("input[name='emailc']"); 
					   var $idchefe= $("input[name='idchefe']"); 
		var cod_posto = $(this).val();
        
        $.getJSON('proc_pesq_user3.php', {cod_posto},
            function(retorno){
				  $chefe.val(retorno.chefe);
                $telefonec.val(retorno.telefonec);
				 $telefoned.val(retorno.telefoned);
				  $rg.val(retorno.rg);
				 $emailc.val(retorno.emailc);
				  $idchefe.val(retorno.idchefe);
                
            }
        );        
    });
});