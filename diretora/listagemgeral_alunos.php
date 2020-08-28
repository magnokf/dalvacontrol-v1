<?php
session_start();
include 'conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"/>
    <title>Lista Geral de Alunos</title>

</head>
<body>





<div class="container" style="margin-top: 30px">

    <div style="text-align: center;">
    <img src="imagens/menulogo.png" alt="LogoCieb" width="100"></div>
    <div style="text-align: center;"><h4 style="color: #0b0b0b">E M Dalva de Oliveira</h4><br>
        <h3><span class="label label-danger">Alunos Cadastrados</span></h3></div>

        <div class="col-md-12">
            <table id="basic" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Nome do Aluno</td>
                    <td>Responsável</td>
                    <td>Telefone (1)</td>
                    <td>Telefone (2)</td>
                    <td>E-mail</td>


                </tr>
                </thead>
                <tbody>
                <?php


                $sql = $conn->query('SELECT * FROM users');
                while($data = $sql->fetch_array()) {
                    echo '
                                    <tr>
                                        <td>'.$data['id'].'</td>
                                        <td>'.$data['pes_nome'].'</td>
                                        <td>'.$data['resp_nome'].'</td>
                                        <td>'.$data['telefone1'].'</td>
                                        <td>'.$data['telefone2'].'</td>
                                        <td>'.$data['email'].'</td>
                                    </tr>
                                ';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</body>
<script
        src="http://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
<script type="text/javascript">
    $(document).ready(function() {
        $("#basic").DataTable({

            "ordering": true,
            "searching": true,
            "paging": true,
            "columnDefs": [
                {
                    "targets": 0,
                    "searchable": false,
                    "visible": true
                }
            ],
            "order": [[2, "desc"]]
        });
    });
</script>
</html>