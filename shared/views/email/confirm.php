<?php $v->layout("_theme", ["title" => "Responsável Atualizado no DalvaControl"]); ?>

<h2>O Sr(a) <?=$resp_nome?> atualizou as informações de contato no DalvaControl.</h2><br>
<p> Responsável Sr(a) : <?=$resp_nome?> </p>
<p> Aluno(a) : <?=$pes_nome?> </p>
<p> E-mail : <?=$email?> </p>
<p> Telefone (1) : <?=$telefone1?> </p>
<p> Telefone (2) : <?=$telefone2?> </p>
<p> Criado em  : <?=date('d/m/Y H:i:s', strtotime($created_at) )?> </p>
