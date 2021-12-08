<?php 
class UserRepository extends BaseRepository{
	protected function fetchAll($condition = null)
	{
		global $conn;
		$users = array();
		$sql = "SELECT * FROM user";
		if ($condition) 
		{
			$sql .= " WHERE $condition";
		}

		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
			while ($row = $result->fetch_assoc()) 
			{
				$user = new User($row["id"], $row["name"], $row["password"], $row["age"], $row["creation_date"], $row["number_of_book"], $row["favorite_genre"]);
				$users[] = $user;
			}
		}

		return $users;
	}

	function getAll() {
		return $this->fetchAll();
	}

	function find($id){
		global $conn;
		$condition = "id = '$id'";
		$users = $this->fetchAll($condition);
		$user = current($users);
		return $user;
	}

	function findName($name){
		global $conn;
		$condition = "name = '$name'";
		$users = $this->fetchAll($condition);
		$user = current($users);
		return $user;
	}

	function findNameAndPassword($name, $password) {
		global $conn; 
		$condition = "name='$name' AND password='$password'";
		$users = $this->fetchAll($condition);
		$user = current($users);
		return $user;
	}
}
?>