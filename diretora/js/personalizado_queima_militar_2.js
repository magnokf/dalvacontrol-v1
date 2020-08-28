$(document).ready(function () {
    $("input[name='rg_2']").blur(function () {
        var $nome_2 = $("input[name='nome_2']");
        var $obm_2 = $("input[name='obm_2']");
        var $posto_2 = $("input[name='posto_2']");


        var rg_2 = $(this).val();

        $.getJSON('proc_pesq_milcau_2.php', {rg_2},
            function(retorno2){
                $nome_2.val(retorno2.nome_2);
                $obm_2.val(retorno2.obm_2);
                $posto_2.val(retorno2.posto_2);


            }
        );
    });
});




