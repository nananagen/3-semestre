<form action="" method="post">
    <input type="number" name="buscar" id="buscar">
    <input type="submit" value="Buscar">
</form>

<?php

if (isset($_POST["buscar"])):
    $id = $_POST["buscar"];
    $sql = "SELECT id, nome, email, cidade, texto FROM tads.recados WHER id=?;";
    
    $stmt = $con->prepare($sql);
    $stmt -> bind_param('i', $id);
    //parametro 1 acumula o tipo das variáveis que entrarão
    $stmt -> execute();

    echo $sql;
    
    if($result = $stmt->get_result()):
        if($result->num_rows > 0):
            while ($recado = $result->fecth_objet('RecadoDAO')):
                var_dump($recado);
            endwhile;
        endif;
    endif;
endif;