<?php 

class Agenda
{
    public function edit(Contact $contact)
    {
      $obj = $db[$contact->$id];
      $obj->name = $contact->name;
      $obj->cellPhone = $contact->cellPhone;
      $obj->email = $contact->email;    
    }
}

?>