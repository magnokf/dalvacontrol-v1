$(document).ready(function () {
    $("input[name='rg_3']").blur(function () {
        var $nome_3 = $("input[name='nome_3']");
        var $obm_3 = $("input[name='obm_3']");
        var $posto_3 = $("input[name='posto_3']");


        var rg_3 = $(this).val();

        $.getJSON('proc_pesq_milcau_3.php', {rg_3},
            function(retorno3){
                $nome_3.val(retorno3.nome_3);
                $obm_3.val(retorno3.obm_3);
                $posto_3.val(retorno3.posto_3);


            }
        );
    });
});








