<?php
include 'conexao.php';
include 'menu/menu_dalva.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<body>





<div class="container" style="margin-top: 30px">

    <div style="text-align: center;">
    <img src="imagens/escola.png" alt="LogoCieb" width="100"></div>
    <div style="text-align: center;"><h4 style="color: #0b0b0b">E.M. Dalva de Oliveira</h4><br>
        <h3><span class="label label-danger">Listagem Geral de Usuários</span></h3></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Login</td>
                    <td>Nível</td>
                    <td>e-mail</td>


                </tr>
                </thead>
                <tbody>
                <?php
                //$conn = new mysqli('localhost', 'root', 'm15c1d8m12R9', 'cadastro');

                $sql = $conn->query('SELECT * FROM tab_usuario');
                while($data = $sql->fetch_array()) {

                    echo  '
                                    <tr>
                                        
                                        <td>Dalva-'.$data['id_usuario'].'</td>
                                        <td>'.$data['usuario'].'</td>
                                        <td>'.$data['level'].'</td>
                                        <td>'.$data['email_user'].'</td>
                                        
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

<script
    src="http://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".table").DataTable({

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
</body>
</html>