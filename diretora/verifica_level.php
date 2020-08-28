<?php


if($_SESSION['level'] < '4') {




    $_SESSION['msg'] = "<p style='color:red;'>Matricula não foi editado com sucesso, favor verificar os dados.</p>";
    header("Location: edit_matricula.php?id_matricula=$id_matricula");

}




