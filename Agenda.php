<?php 

class Agenda
{
    private $db = array();
        
    public function deleteContact(Contact $contact)
    {
    	$paramId = $contact->getId();
        if(isset($paramId))
        {
            unset($this->db[$paramId]);
        }
        else
        {
            echo "There is no Contact for this ID!\n";
        }
    }

	public function searchContact(Contact $contact)
	{
		$size = sizeof($this->db);
		for($i = 0; $i < $size; $i++)
		{
			if(!isset($this->db[$i]))
				continue;
			$obj = $this->db[$i];
			if($obj->getId() == $contact->getId() ||
			   $obj->getName() == $contact->getName() || 
			   $obj->getEmail() == $contact->getEmail() ||
			   $obj->getPhoneContact() == $contact->getPhoneContact())
				return $obj;
		}
		return null;
	}
	
    public function editContact(Contact $contact)
    {
		$obj = $this->db[$contact->getId()];
		$obj->setName($contact->getName());
		$obj->setPhoneContact($contact->getPhoneContact());
		$obj->setEmail($contact->getEmail());    
		$this->db[$contact->getId()] = $obj;
    }

	public function addContact(Contact $contact)
	{
		if(isset($contact))
		{
			$this->db[$contact->getId()] = $contact;
		}
		else
		{
			echo "Error: Contact not added. Null parameters.\n";
		}
	}
}

?>