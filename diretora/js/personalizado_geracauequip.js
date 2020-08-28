$(document).ready(function () {
    $("input[name='id_equip']").blur(function () {
        var $nome_equip = $("input[name='nome_equip']");
        var $obs_equip = $("input[name='obs_equip']");
        var $cat_equip = $("input[name='cat_equip']");
        var id_equip = $(this).val();
        
        $.getJSON('proc_pesq_equipcau.php', {id_equip},
            function(retorno){
                $nome_equip.val(retorno.nome_equip);
                $obs_equip.val(retorno.obs_equip);
                $cat_equip.val(retorno.cat_equip);
            }
        );        
    });
});