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
	
}
?>