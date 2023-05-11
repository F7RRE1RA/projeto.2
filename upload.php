<?php 

$pasta ="cursophp/"
$arquivo = $pasta.basename($_FILES["FileToUpload"]["name"]);

$upload0k = 1;
$tipoArquivo = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));
$msgUpload = "";

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["FileToUpload"]["tmp_name"]);
    if(check !== false){

    }else{
        $msgUpload .= "Não é uma imagem!<br>";
        $upload0k = 0;
    }

    if(file_exists($arquivo)){
        $msgUpload .= "Arquivo ja existente tente renomear ou enviar outro arquivo!<br>";
        $upload0k = 0;

    }

    if($_FILES["fileToUpload"]["size"] >= 500000){
        $msgUpload .= "Arquivo muito grande supera o tamanho de 500KB!<br>";
        $upload0k = 0;

    }
if($tipoArquivo != "jpg" && $tipoArquivo != "jpeg " && $tipoArquivo != "png" && $tipoArquivo != "gif"){
    $msgUpload .= "tipo de arquivo não permitido!<br>";
    $upload0k = 0; 
}
    

if($upload0k == 0){
    $msgUpload .= "Desculpe, não sera possivel fazer o upload.<br>";
}else{
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$arquivo)){
    }else{

    }
}
$msg = $msgUpload;
}
?>