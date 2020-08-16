$(document).ready(function () {
    $("input[name='nome_cidade']").blur(function () {
        var $cod_cidade = $("input[name='cod_cidade']");
        var $pop = $("input[name='pop']");
        var nome_cidade = $(this).val();
        
		
		
        $.getJSON('proc_pesq_user.php', {nome_cidade},
            function(retorno){
                $cod_cidade.val(retorno.cod_cidade);
                $pop.val(retorno.pop);
            }
        );        
    });
});