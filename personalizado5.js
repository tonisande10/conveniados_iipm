$(document).ready(function () {
    $("input[name='cod_cidade']").blur(function () {
        var $prefeito = $("input[name='prefeito']");
		     var $telprefeitoa = $("input[name='telprefeitoa']");
			 var $telprefeitob  = $("input[name='telprefeitob']");
			  var $idprefeito  = $("input[name='idprefeito']");
			 var cod_cidade = $(this).val();
        
        $.getJSON('proc_pesq_user5.php', {cod_cidade},
            function(retorno){
				  $prefeito.val(retorno.prefeito);
                $telprefeitoa.val(retorno.telprefeitoa);
				 $telprefeitob.val(retorno.telprefeitob);
				 $idprefeito.val(retorno.idprefeito);
				
                
            }
        );        
    });
});