$(document).ready(function () {
    $("input[name='rg_S']").blur(function () {
        var $nome_S = $("input[name='nome_S']");
        var $obm_S = $("input[name='obm_S']");
        var $posto_S = $("input[name='posto_S']");


        var rg_S = $(this).val();

        $.getJSON('proc_pesq_milcau_s.php', {rg_S},
            function(retornoS){
                $nome_S.val(retornoS.nome_S);
                $obm_S.val(retornoS.obm_S);
                $posto_S.val(retornoS.posto_S);


            }
        );
    });
});








