<?php
include 'conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>DalvaControl | Diretora</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!---<link rel="stylesheet" href="css/custommenu.css">-->
    <link rel="shortcut icon" href="imagens/favicon.png">
</head>
<?php

?>
<div class="container" style="margin-top: 30px">

    <div style="text-align: center;">

        <a style="text-decoration: none" href="https://www.dalvadeoliveira.com.br/"> <img src="imagens/escola.png" alt="Escola Municipal Dalva de Oliveira" width="200" title="Atualize seu contato com a Escola"></a>

    </div>
    <div style="text-align: center;">


            <div class="col-md-12">
                <p>
                <h2><span class="label label-warning"><a style="text-decoration: none" href="https://www.dalvadeoliveira.com.br/">SE O SEU NOME ESTIVER NESTA LISTA</a></span> </h2></p>
                <h2><span class="label label-warning"><a style="text-decoration: none" href="https://www.dalvadeoliveira.com.br/">CLIQUE AQUI E ATUALIZE SEU CONTATO.</a></span> </h2>

            </div>



    </div>
    <div class="row">

        <div class="col-md-12">
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>


                    <td>Turma</td>
                    <td>Nome do Aluno</td>







                </tr>
                </thead>
                <tbody>
                <?php
                //$conn = new mysqli('localhost', 'dmrgame1_dalva', 'uwz4c0wd58pdkpth5g', 'dmrgame1_dalva');
                //$conn = new mysqli('localhost', 'root', 'm15c1d8m12R9', 'dalva_db');

                $sql = $conn->query("SELECT turma_al, nome_al, telefone1 FROM alunoxturma inner join dolistcard on (alunoxturma.nome_al = dolistcard.pes) left join users on(dolistcard.pes = users.pes_nome) where telefone1 is null order by turma_al;");
                while($data = $sql->fetch_array()) {
                    echo "
                                    <tr>
                                        
                                        
                                        <td>".utf8_encode($data["turma_al"])."</td>
                                        <td>".utf8_encode(substr_replace($data["nome_al"],'****************',10))."</td>
                                       
                                        
                                        
                                        
                                        
                                    </tr>
                                ";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".table").DataTable({

            "ordering": true,
            "searching": true,
            "paging": false,
            "columnDefs": [
                {
                    "targets": 0,
                    "searchable": true,
                    "visible": true
                }
            ],
            "order": [[0, "asc"]]
        });
    });
</script>
</body>
</html>





