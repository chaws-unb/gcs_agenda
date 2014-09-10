<?php 

class Contact
{
	// construct methods gets and sets
	function_construct()
	{
		parent::Contact();
	}

	public function	__set($id)
	{
		$this->$id;
	}

	public function	__set($name)
	{
		$this->$name;
	}

	public function	__set($phoneContact)
	{
		$this->$phoneContact;
	}

	public function	__set($email)
	{
		$this->$email;
	}


		public function	get($id)
	{
		return $this->$id;
	}

	public function	get($name)
	{
		return $this->$name;
	}

	public function	get($phoneContact)
	{
		return $this->$phoneContact;
	}

	public function	get($email)
	{
		return $this->$email;
	}
}

?>