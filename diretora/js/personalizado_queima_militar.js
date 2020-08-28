$(document).ready(function () {
    $("input[name='rg_1']").blur(function () {
        var $nome = $("input[name='nome_1']");
        var $obm = $("input[name='obm_1']");
        var $posto = $("input[name='posto_1']");


        var rg_1 = $(this).val();

        $.getJSON('proc_pesq_milcau.php', {rg_1},
            function(retorno){
                $nome.val(retorno.nome);
                $obm.val(retorno.obm);
                $posto.val(retorno.posto);


            }
        );
    });
});




