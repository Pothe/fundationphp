<?php
require("inc/functions.php");

$view_bag=[
 'title'=> "Contact us",
];

$db= new VersionControl;

$db->view('contact');




?>