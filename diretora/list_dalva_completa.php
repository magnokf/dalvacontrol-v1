<?php
include 'menu/menu_dalva.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>DalvaControl | Diretora</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/custommenu.css">
    <link rel="shortcut icon" href="imagens/favicon.png">
</head>
<?php

?>
<div class="container" style="margin-top: 30px">

    <div style="text-align: center;">
        <img src="imagens/escola.png" alt="Escola Municipal Dalva de Oliveira" width="200"></div>
    <div style="text-align: center;"><h4 style="color: #0b0b0b">E M Dalva de Oliveira</h4><br>
        <h3><span class="label label-danger">Lista Geral Matricula Alunos 2020 </span></h3>
        <h3><span class="label label-primary">Lista CRE - ESCOLA 3.0 </span></h3></div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>

                    <td>Matricula</td>
                    <td>Nome do Aluno</td>
                    <td>Responsável</td>






                </tr>
                </thead>
                <tbody>
                <?php
                //$conn = new mysqli('localhost', 'dmrgame1_dalva', 'uwz4c0wd58pdkpth5g', 'dmrgame1_dalva');
                //$conn = new mysqli('localhost', 'root', 'm15c1d8m12R9', 'dalva_db');

                $sql = $conn->query('SELECT * FROM docescrelacaoresponsavelalunoturma ');
                while($data = $sql->fetch_array()) {
                    echo '
                                    <tr>
                                        
                                        <td>'.utf8_encode($data['numMatricula']).'</td>
                                        <td>'.utf8_encode($data['pes_nome']).'</td>
                                        <td>'.utf8_encode($data['nomeResponsavel']).'</td>
                                        
                                        
                                       
                                        
                                    </tr>
                                ';
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
            "order": [[0, "desc"]]
        });
    });
</script>
</body>
</html>



