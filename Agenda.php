<?php 

class Agenda
{
	/** Add contact from the agenda */

	public function addContact ($paramId, Contact $contact) {
		if (!isset($paramId) || !isset($contact)){
			this->$db[&paramId] = $contact;
		}

		else{
			echo "Error: Contact not added. Null parameters.";
		}
		
	}

}

?>