<?php 

class Contact
{
	private $id;
	private $name;
	private $phoneContact;
	private $email;

	public function	setId($id)
	{
		$this->id = $id;
	}

	public function	setName($name)
	{
		$this->name = $name;
	}

	public function	setPhoneContact($phoneContact)
	{
		$this->phoneContact = $phoneContact;
	}

	public function	setEmail($email)
	{
		$this->email = $email;
	}

	public function	getId()
	{
		return $this->id;
	}

	public function	getName()
	{
		return $this->name;
	}

	public function	getPhoneContact()
	{
		return $this->phoneContact;
	}

	public function	getEmail()
	{
		return $this->email;
	}
}

?>