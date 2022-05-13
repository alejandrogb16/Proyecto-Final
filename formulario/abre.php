<?php

$conexion = new mysqli("localhost", "id18340808_alejandrogb", "c2c<]YfPOx~#}pJR", "id18340808_practicasagb");
if($conexion){
    echo "sus datos se han enviado correctamente !!";
    /*header("Location: index.php");*/
}else{
    echo "Fallo la gestion";
}
?>