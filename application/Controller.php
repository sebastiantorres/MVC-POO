<?php 
abstract class Controller
{
	protected $_view;

	public function __construct() {
		$this->_view = new View(new Request);
	
	}
	abstract public function index();

	protected function loadModel($modelo)
	{
		$modelo = $modelo . 'Model';
		$rutaModelo = ROOT . 'models' . DS . $modelo . '.php';
		
		if(is_readable($rutaModelo)){
			require_once $rutaModelo;
			$modelo = new $modelo;
			return $modelo;
		}
		else {
			throw new Exception('Error de Modelo')	;
		}
	}

	protected function getLibreary($libreria)
	{
		$rutaLibreria = ROOT . 'libs' . DS . $libreria . '.php';

		if(is_readable($rutaLibreria)){
			require_once $rutaLibreria;
		}
		else{
			throw new Exception('Error de libreria');
		}
	}
}

?>