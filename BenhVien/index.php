<?php
include_once "Patient.php";

$patient1 = new Patient("Smith",5);
$patient2 = new Patient("Jones",4);
$patient3 = new Patient("Fehrenbach",6);
$patient4 = new Patient("Brown",1);
$patient5 = new Patient("Ingram",2);

$patient = new Patient("name","STT");

$patient->enqueue($patient1);
$patient->enqueue($patient2);
$patient->enqueue($patient3);
$patient->enqueue($patient4);
$patient->enqueue($patient5);

print_r($patient->dequeue());


echo "<pre>";
print_r($patient);