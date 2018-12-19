<?php
/* create routes and find controller */
include ('controller/front.php');

class Routeur
{

	private $request;

	/*On crée un tableau routes*/

	private $routes = ["home.html" => "home", "contact.html" => "contact" ,"login.html" => "login"]; 

	public function __construct($request)
	{
		$this->request = $request;
	}

	public function renderController()
	{
		$request = $this->request;
		
	if(key_exists($request, $this->routes))  /*On cherche si la demande existe dans notre tableau routes*/
		{
			$controller= $this->routes[$request];
			call_user_func($controller."Action");
			
		}
		else
		{
			echo'404 ';
		}
	}

}
