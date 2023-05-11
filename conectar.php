<?php
function conectar($sql){
    $id = "";
    $senha = "";

    $hostweb = true;
    if($hostweb){
        $id = "id20602874_";
        $senha = "Xnqi\jZ*(8Tb^48=";

    }

    $servidor = "localhost";
    $usuario = $id."root";
    $banco = $id."mydb";

    $con = new mysqli($servidor,$usuario,$banco);

    if($con->connect_error){
        die("Erro :".$con->connect_error);
    }

if(str_contains($sql,"insert")){
    $con->query($sql);
    return $con->insert_id;

}
return $con->query($sql);

}

?>