<?php 

class Contact
{
	// construct methods gets and sets
	function_construct()
	{
		parent::Contact();
	}

	public function	__set($idContact)
	{
		$this->$idContact;
	}

	public function	__set($nameContact)
	{
		$this->$nameContact;
	}

	public function	__set($phoneContact)
	{
		$this->$phoneContact;
	}

	public function	__set($emailContact)
	{
		$this->$emailContact;
	}


		public function	get($idContact)
	{
		return $this->$idContact;
	}

	public function	get($nameContact)
	{
		return $this->$nameContact;
	}

	public function	get($phoneContact)
	{
		return $this->$phoneContact;
	}

	public function	get($emailContact)
	{
		return $this->$emailContact;
	}
}

?>