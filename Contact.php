<?php 

class Contact
{

	//Attributes
	private $id;
	private $name;
	private $phoneContact;
	private $email;

	// construct methods gets and sets
	function __construct()
	{
		self::Contact();
	}

	public function	setId($id)
	{
		$this->$id;
	}

	public function	setName($name)
	{
		$this->$name;
	}

	public function	setPhoneContact($phoneContact)
	{
		$this->$phoneContact;
	}

	public function	setEmail($email)
	{
		$this->$email;
	}

	public function	getId($id)
	{
		return $this->$id;
	}

	public function	getName($name)
	{
		return $this->$name;
	}

	public function	getPhoneContact($phoneContact)
	{
		return $this->$phoneContact;
	}

	public function	getEmail($email)
	{
		return $this->$email;
	}
}

?>