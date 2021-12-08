<?php 
class User {
	protected $id;
	protected $name;
	protected $password;
	protected $age;
	protected $creation_date;
	protected $number_of_book;
	protected $favorite_genre;

	function __construct($id, $name, $password, $age, $creation_date, $number_of_book, $favorite_genre){
		$this->id = $id;
		$this->name = $name;
		$this->password = $password;
		$this->age = $age;
		$this->creation_date = $creation_date;
		$this->number_of_book = $number_of_book;
		$this->favorite_genre = $favorite_genre;
	}

	function getId(){
		return $this->id;
	}

	function getName(){
		return $this->name;
	}

	function getPassword(){
		return $this->password;
	}

	function getAge(){
		return $this->age;
	}

	function getCreationDate(){
		return $this->creation_date;
	}

	function getNumberOfBook(){
		return $this->number_of_book;
	}

	function getFavoriteGenre(){
		return $this->favorite_genre;
	}

	function setName($name){
		$this->name = $name;
		return $this;
	}

	function setPassword($password){
		$this->password = $password;
		return $this;
	}

	function setAge($age){
		$this->age = $age;
		return $this;
	}

	function setCreationDate($creation_date){
		$this->creation_date = $creation_date;
		return $this;
	}

	function setNumberOfBook($number_of_book){
		$this->number_of_book = $number_of_book;
		return $this;
	}

	function setFavoriteGenre($favorite_genre){
		$this->favorite_genre = $favorite_genre;
		return $this;
	}

}
?>