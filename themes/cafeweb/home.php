<?php $v->layout("_theme"); ?>

<!--FEATURED-->
<article class="home_featured">
    <div class="home_featured_content container content">
        <header class="home_featured_header">
            <h1>Sr. Responsável!</h1>
            <p>Atualize seus dados de contato com a sua Escola </p>
            <p><span data-go=".home_optin"
                     class="home_featured_btn gradient gradient-green gradient-hover radius transition icon-check-square-o">Atualize aqui!</span></p>
            <p class="features"> Escola Municipal Dalva de Oliveira</p>
        </header>
    </div>


</article>

<!--FEATURES-->


<!--OPTIN-->
<article class="home_optin">
    <div class="home_optin_content container content">
        <header class="home_optin_content_flex">
            <h2>Atualize suas informações com a sua Escola</h2>
            <p>Estamos atualizando nosso cadastro, para melhor atender o responsável do aluno da nossa escola.</p>
            <p>Somente solicitamos aos responsáveis de alunos matriculados atualmente. </p>
            <p>Obrigado por colaborar com nosso trabalho.</p>
            <p>A Direção.</p>
        </header>

        <div class="home_optin_content_flex">
            <span class="icon icon-check-square-o icon-notext"></span>
            <h4>Atualize seu cadastro aqui:</h4>
            <form action="<?= url("/cadastrar"); ?>" method="post" enctype="multipart/form-data">
                <div class="ajax_response"><?= flash(); ?></div>
                <?= csrf_input(); ?>
                <input type="text" name="pes_nome" placeholder="Nome Completo do Aluno:" required/>
                <input type="text" name="resp_nome" placeholder="Nome Completo do Responsável" required/>

                <input type="email" name="email" placeholder="Melhor e-mail:"/>
                <input type="tel" name="telefone1" placeholder="Melhor telefone" required/>
                <input type="tel" name="telefone2" placeholder="Segundo Melhor telefone"/>

                <button class="radius transition gradient gradient-green gradient-hover">Atualizar minhas informações</button>
            </form>

        </div>
    </div>

</article>

<!--VIDEO-->


<!--BLOG-->
