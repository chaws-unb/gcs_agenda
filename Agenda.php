<?php 

class Agenda
{
    private $db = array();
        
    /**
     *	Delete contact from the agenda  
     */
    public function deleteContact($paramId)
    {        
        if(!isset($paramId))
        {
            unset($this->db[$paramId]);
        }
        else
        {
            $errormsg = "There is no Contact for this ID!";
        }
    }

    /**
     *	Search a contact
     */	
	public function search(Contact $contact)
	{
		$size = sizeof($db);
		for($i = 0; $i < $size; $i++)
		{
			$obj = $db[$i];
			if($obj->name == $contact->name || 
			   $obj->email == $contact->email ||
			   $obj->phoneContact == $contact->phoneContact)
				return $obj;
		}
	}
	
	/**
	 *	Edit a Contact
	 */
    public function edit(Contact $contact)
    {
		$obj = $db[$contact->$id];
		$obj->name = $contact->name;
		$obj->phoneContact = $contact->phoneContact;
		$obj->email = $contact->email;    
    }

	/** 
	 * Add contact from the agenda 
	 */
	public function addContact ($paramId, Contact $contact)
	{
		if(!isset($paramId) || !isset($contact))
		{
			this->$db[&paramId] = $contact;
		}
		else
		{
			echo "Error: Contact not added. Null parameters.";
		}
	}
}

?>