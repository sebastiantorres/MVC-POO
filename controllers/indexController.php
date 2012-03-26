<?php 

class indexController extends Controller
{
	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
		//echo 'Hola desde el indexController...';
		$post = $this->loadModel('post');
		$this->_view->posts=  $post->getPosts();
		$this->_view->titulo = 'Portada';
		$this->_view->renderizar('index');
	}
}
?>