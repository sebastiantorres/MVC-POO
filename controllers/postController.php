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
		$this->_view->titulo = 'Nuevo Post';
		$this->_view->setJs(array('nuevo'));
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
				$this->getPostParam('titulo'),
				$this->getPostParam('contenido')

			);
			$this->redireccionar('post');
		}					
		$this->_view->renderizar('nuevo','post');

	}

	public function editar($id)
	{
		if(!$this->filtrarInt($id)){
			$this->redireccionar('post');
		}

		if(!$this->_post->getPost($this->filtrarInt($id))){
			$this->redireccionar('post');
		}

		$this->_view->titulo = "Editar Post";
		$this->_view->setJs(array('nuevo'));

		if($this->getInt('guardar') == 1) {

			$this->_view->datos = $_POST;
			if(!$this->getTexto('titulo')){
				$this->_view->_error = 'Debe introducir el titulo del post';
				$this->_view->renderizar('editar','post');
				exit;

			}

			if(!$this->getTexto('contenido')){
				$this->_view->_error = 'Debe introducir el contenido del post';
				$this->_view->renderizar('editar','post');
				exit;

			}

			$this->_post->editarPost(
				$this->filtrarInt($id),
				$this->getTexto('titulo'),
				$this->getTexto('contenido')

			);
			$this->redireccionar('post');
		}		

			$this->_view->datos = $this->_post->getPost($this->filtrarInt($id));
			$this->_view->renderizar('editar','post');
	}

	public function eliminar($id)
	{
		if(!$this->filtrarInt($id)){
			$this->redireccionar('post');
		}

		if(!$this->_post->getPost($this->filtrarInt($id))){
			$this->redireccionar('post');
		}
		$this->_post->eliminarPost($this->filtrarInt($id))	;
		$this->redireccionar('post');

	}
}
 ?>