<?php

class Personaliza extends Controlador
{
	
	function __construct()
	{

		//Invocar al metodo MostrarVista
		//$this->mostrarVista("main/index");
	}

	function mostrarVista()
	{
		$nombre = "personaliza/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de Personaliza<br>";
	}
}