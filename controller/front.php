<?php
include_once('model/chapitreManager.php');


function contactAction()
{
	include (VIEW.'contact.php'); 
}
function homeAction()
{
	$chapitres = getChapters();
	include (VIEW.'home.php');
}
function loginAction()
{
	include (VIEW.'login.php');
}