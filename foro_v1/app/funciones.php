<?php
	function  usuarioOk(){
		$usuario=$_REQUEST['nombre'];
		$contraseña=$_REQUEST['contraseña'];
		if(strlen($usuario)>=8 && $contraseña==strrev($usuario)){
		   return true ;
		}
		else{
			return false;
		}
	}
?>