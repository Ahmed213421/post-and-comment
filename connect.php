<?php
class Model 
{	
	private $server = "localhost";
		private $username = "root";
		private $password;
		private $db = "post";
		private $conn;

		public function __construct(){
			try {
				
				$this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			} catch (Exception $e) {
				echo "connection failed" . $e->getMessage();
			}
		}

	public function insert(){
		if(isset($_GET['sub'])){
			
					$name = $_GET['name'];
					$title = $_GET['title'];
					$query = "INSERT INTO posts (name,title) VALUES ('$name','$title')";
					
					if ($sql = $this->conn->query($query)) {
						echo "<script>alert('records added successfully');</script>";
						echo "<script>window.location.href = 'indexx.php';</script>";
					}else{
						echo "<script>alert('failed');</script>";
						echo "<script>window.location.href = 'indexx.php';</script>";
					}
				}
				
			
		
	}

	public function fetch(){
		$data = null;
		$query = "SELECT * FROM posts";
		if($sql = $this->conn->query($query)){
			while($row = mysqli_fetch_assoc($sql)){
				$data[] = $row;
			}
		}
		return $data;
	}

	public function fetch_single($id){

		$data = null;

		$query = "SELECT * FROM posts WHERE id = '$id'";
		if ($sql = $this->conn->query($query)) {
			while ($row = mysqli_fetch_assoc($sql)) {
				$data = $row;
			}
		}
		return $data;
	}

	public function addcomment(){
		if(isset($_GET['sub'])){
			
					$name = $_GET['name'];
					$description = $_GET['description'];
					$post_id = $_GET['id'];
					$query = "INSERT INTO comments (name,description,post_id) VALUES ('$name','$description','$post_id')";
					
					if ($sql = $this->conn->query($query)) {
						echo "<script>alert('comment added successfully');</script>";
						echo "<script>window.location.href = 'post.php?id=$post_id'</script>";
					}else{
						echo "<script>alert('failed');</script>";
						echo "<script>window.location.href = 'post.php?id=$post_id'</script>";
					}
				}
			
		
	
	}

	public function fetch_comment($id){

		$data = null;

		$query = "SELECT * FROM comments WHERE post_id = '$id'";
		if ($sql = $this->conn->query($query)) {
			while ($row = mysqli_fetch_assoc($sql)) {
				$data[] = $row;
			}
		}
		return $data;
	}

	

}
?>