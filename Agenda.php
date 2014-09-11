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
            echo "There is no Contact for this ID!";
        }
    }

	public function searchContact(Contact $contact)
	{
		$size = sizeof($this->db);
		for($i = 0; $i < $size; $i++)
		{
			$obj = $this->db[$i];
			if($obj->getName() == $contact->getName() || 
			   $obj->getEmail() == $contact->getEmail() ||
			   $obj->getPhoneContact() == $contact->getPhoneContact())
				return $obj;
		}
	}
	
    public function editContact(Contact $contact)
    {
		$obj = $this->db[$contact->id];
		$obj->setName($contact->name);
		$obj->setPhoneContact($contact->getPhoneContact());
		$obj->setEmail($contact->getEmail());    
		$this->db[$contact->id] = $obj;
    }

	public function addContact(Contact $contact)
	{
		if(isset($contact) && !isset($this->db[$contact->getId()]))
		{
			$this->db[$contact->getId()] = $contact;
		}
		else
		{
			echo "Error: Contact not added. Null parameters.";
		}
	}
}

?>