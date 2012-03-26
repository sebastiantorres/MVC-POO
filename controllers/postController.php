<?php 
class postController extends Controller
{
	private $_post;
	public function __construct() {
		parent::__construct();
		$this->_post = $this->loadModel('post');
	}

	public function index()
	{
		
		$this->_view->post 		=	$this->_post->getPosts();

		$this->_view->titulo 	=	'Portada';

		$this->_view->renderizar('index','inicio');
	}

	public function nuevo()
	{
		$this->_view->titulo = 'Nuevo Post';
		$this->_view->prueba = $this->getTexto('titulo');
		$this->_view->renderizar('nuevo','post');
	}
}
 ?>