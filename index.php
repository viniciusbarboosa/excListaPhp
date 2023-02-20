<?php
    if(isset($_POST['addLista'])  && $_POST['addLista']!=''){
       $conteudo = $_POST["addLista"];

       if(file_exists("lista.txt")){
        $arquivo = file_get_contents("lista.txt");
        $conteudoMandar = $arquivo."\n".$conteudo;
        file_put_contents('lista.txt',$conteudoMandar);
       }else{
        $conteudoMandar = $conteudo;
        file_put_contents('lista.txt',$conteudo);
       }

    }

?>
<form action="index.php" method="POST">
<label>Novo Nome:</label><br>
<input type="text" name="addLista"> <button type="submit">Adicionar</button>
</form>
<?php 
if(file_exists("lista.txt")){
    $texto = file_get_contents("lista.txt");
    $textoAtualizado = explode("\n",$texto);
    foreach ($textoAtualizado as $key) {
        ?>
                <li><?php echo $key?></li>
<?php

    }
}
?>