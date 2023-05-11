<?php 
$path = "arquivos/";
$diretorio = dir($path);

echo "Lista de Arquivos do diretorio '<strong>".$path."</strong>':<br />";
while ($arquivo = $diretorio -> read()){
    if($arquivo != "." && $arquivo != ".."){
        echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";

    }

}
$diretorio -> close();
?>

