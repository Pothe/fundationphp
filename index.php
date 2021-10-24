<?php
require("inc/functions.php");

$view_bag=[
 'title'=> "Welcome to EDU",
];

$db= new VersionControl;

$db->view('index',$view_bag);



?>