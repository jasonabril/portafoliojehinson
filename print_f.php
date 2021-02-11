<?php
$aNotas = array(8, 5, 7, 9, 10);
$msg = "Error al enviar el correo electronico";

function print_f($variable){
    if (is_array($variable)){
        foreach ($variable as $item) {
            $archivo = fopen("datos.txt", "a+");
            fwrite($archivo , $item . "\n");

        }
    }else{
    file_put_contents("datos.txt", $variable);
    echo "Es correcto"
    }
}
fclose($archivo);

?>