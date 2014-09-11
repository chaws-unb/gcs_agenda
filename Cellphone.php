<?php 

define("MAX_CONTACTS", 10);

class Cellphone
{
	private $agenda;
	private $names = array("Joaquim", "Magali", "Arnobio", "Janio", "Zuleide", "Oswaldo", "Cp.Washington");

	public function __construct()
	{
		$this->agenda = new Agenda;
	}

	public function printContacts()
	{
		for($i = 0; $i < MAX_CONTACTS; $i++)
		{
			$contact = new Contact;
			$contact->setId($i);
			$contact = $this->agenda->searchContact($contact);
			if($contact == null)
			{
				echo "Contact [$i] doesn't exist\n";
				continue;
			}
			print_r($contact);
		}
	}

	public function testAddContacts()
	{
		for($i = 0; $i < MAX_CONTACTS; $i++)
		{
			$contact = new Contact;
			$contact->setId($i);
			$contact->setName($this->names[$i % sizeof($this->names)] . " " . $i);
			$contact->setEmail($this->names[$i % sizeof($this->names)] . $i . "@email.com");
			$contact->setPhoneContact(999999999);
			$this->agenda->addContact($contact);
		}
	}

	public function testEditContacts()
	{
		for($i = 0; $i < MAX_CONTACTS; $i++)
		{
			$contact = new Contact;
			$contact->setId($i);
			$contact = $this->agenda->searchContact($contact);
			if($contact == null)
				continue;
			$contact->setName($contact->getName() . "_edited");
			$this->agenda->editContact($contact);
		}
	}

	public function testDeleteContacts()
	{
		for($i = 0; $i < MAX_CONTACTS; $i++)
		{
			$contact = new Contact;
			$contact->setId($i);
			$this->agenda->deleteContact($contact);
		}
	}
}

?>