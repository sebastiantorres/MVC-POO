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
	
}
?>