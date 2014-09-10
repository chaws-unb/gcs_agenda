<?php 

class Agenda
{
    private $db = array();
    
    
    /* Delete contact from the agenda  */
    public function deleteContact($paramId){
        
        if(!isset($paramId)){
            unset($this->db[$paramId]);
        }else{
            $errormsg = "There is no Contact for this ID!";
        }
    }
}

?>