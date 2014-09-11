<?php 

function __autoload($class_name){
	include $class_name . '.php';
}

$cellphone = new Cellphone;
echo "Adding contacts...\n";
$cellphone->testAddContacts();
$cellphone->printContacts();
echo "Editing contacts...\n";
$cellphone->testEditContacts();
$cellphone->printContacts();
echo "Deleting contacts...\n";
$cellphone->testDeleteContacts();
$cellphone->printContacts();

?>