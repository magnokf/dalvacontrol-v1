$(document).ready(function () {
    $("input[name='rg']").blur(function () {
        var $nome = $("input[name='nome']");
        var $obm = $("input[name='obm']");
        var $posto = $("input[name='posto']");
        var rg = $(this).val();
        
        $.getJSON('proc_pesq_milcau.php', {rg},
            function(retorno){
                $nome.val(retorno.nome);
                $obm.val(retorno.obm);
                $posto.val(retorno.posto);
            }
        );        
    });
});