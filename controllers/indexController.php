<?php 

class indexController extends Controller
{
	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
		//echo 'Hola desde el indexController...';
		$this->_view->titulo = 'Portada';
		$this->_view->renderizar('index');
	}
}
?>