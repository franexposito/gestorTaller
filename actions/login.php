<?php
	if (!isset($_SESSION)){
	    session_start();
	}    
	require_once("../funciones.php"); 

	if ($_POST["fUsuario"] == "pc-campos" && $_POST["fPasswd"] == "campos"){
	    $_SESSION['usuario']=$_POST["fUsuario"];
	    
	    if ($_POST["fRecordarUsuario"]=="1") {
	    	localStorage.setItem("usuario", $_POST["fUsuario"]);
	    	localStorage.setItem("passwd", md5($_POST["fPasswd"]));
	    }

	    header('Location:../listado.php');
	}
	else {
	    header('Location:../index.php');
	}
?>