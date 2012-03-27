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
		
		$this->_view->posts 		=	$this->_post->getPosts();

		$this->_view->titulo 	=	'Portada';

		$this->_view->renderizar('index','inicio');
	}

	public function nuevo()
	{
		/*$this->_view->titulo = 'Nuevo Post';
		$this->_view->prueba = $this->getInt('guardar');
		$this->_view->renderizar('nuevo','post');*/
		if($this->getInt('guardar') == 1) {

			$this->_view->datos = $_POST;
			if(!$this->getTexto('titulo')){
				$this->_view->_error = 'Debe introducir el titulo del post';
				$this->_view->renderizar('nuevo','post');
				exit;

			}

			if(!$this->getTexto('contenido')){
				$this->_view->_error = 'Debe introducir el contenido del post';
				$this->_view->renderizar('nuevo','post');
				exit;

			}

			$this->_post->insertarPost(
				$this->getTexto('titulo'),
				$this->getTexto('contenido')

			);
			$this->redireccionar('post');
		}					
		$this->_view->renderizar('nuevo','post');

	}
}
 ?>