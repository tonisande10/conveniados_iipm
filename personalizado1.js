$(document).ready(function () {
    
         $("input[name='nome_cidade']").blur(function () {
          var $cod_posto = $("input[name='cod_posto']");
      var pqp = $("input[name='pqp']");
      var nome_cidade = $(this).val();
      
        
        $.getJSON('proc_pesq_user2.php', {nome_cidade, pqp},
            function(retorno){
                $cod_posto.val(retorno.cod_posto);
                
            }
        );        
    });
});