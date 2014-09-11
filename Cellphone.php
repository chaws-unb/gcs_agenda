<?php 

function __autoload($class_name) {
    include $class_name . '.php';
}

class Cellphone
{
	private Agenda $agenda;
	private $names = array("Joaquim", "Magali", "Arnobio", "Janio", "Zuleide", "Oswaldo", "Cp.Washington");

	public function __construct()
	{
		$this->agenda = new Agenda;
	}

	public function testAddContacts()
	{
		for($i = 0; $i < 100; $i++)
		{
			$contact = new Contact;
			$contact->setId($i);
			$contact->setName($this->names[$i % sizeof($this->name)] . " " . $i);
			$contact->setEmail($this->names[$i % sizeof($this->name)] . $i . "@email.com");
			$contact->setPhoneContact(999999999);
			$this->agenda->addContact($contact);
		}
	}
}

?>