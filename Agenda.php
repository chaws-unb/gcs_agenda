<?php 

class Agenda
{
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
	
    public function edit(Contact $contact)
    {
      $obj = $db[$contact->$id];
      $obj->name = $contact->name;
      $obj->phoneContact = $contact->phoneContact;
      $obj->email = $contact->email;    
    }
}

?>