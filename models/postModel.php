<?php 
class postModel extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getPosts()
	{
		$post = $this->_db->query("select * from post");
		return $post->fetchall();
	}

	public function insertarPost($titulo, $cuerpo)
	{
		$this->_db->prepare("INSERT INTO post VALUES (null, :titulo, :cuerpo)")
		->execute(
				array(
					':titulo' => $titulo,
					':cuerpo' => $cuerpo
					)
			);
	}

	public function getPost($id)
	{
		$id = (int) $id;
		$post = $this->_db->query("select * from post where id = $id" );
		return $post->fetch();
	}

	public function editarPost($id,$titulo, $contenido)
	{
		$id = (int) $id;
		$this->_db->prepare('UPDATE post set titulo = :titulo , comentario = :comentario where id = :id')
			->execute(
				array(
					':id'	  => $id,
					':titulo' => $titulo,
					':comentario' => $contenido
					)
				);
	}
	public function eliminarPost($id)
	{
		$id = (int) $id;
		$this->_db->query("DELETE FROM post WHERE id = $id");
	}
	
}
?>