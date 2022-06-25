<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="funeraria_ousadia";

    $conectar = mysqli_connect($servidor, $usuario, $senha, $banco);
	if (!$conectar) {
		echo "Não conectou com o Banco de Dados";
	}else{
		//echo "Conectado!!";
	}

    

?>