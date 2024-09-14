<?php
	$configFile = file_get_contents("Config/config.json");
	$config = json_decode($configFile);
	//var_dump($configFile);
	//var_dump($config);
	//echo '------'.$config->database->name.'--------';

	spl_autoload_register  (
		
														function($class) use($config)
																{
																foreach($config->autoloadFolder as $folder)
																					{
																						if ( file_exists($folder . '/' . $class . '.php') )
																									{
																										//var_dump ($class);
																										$class=str_replace(__NAMESPACE__ . '\\','',$class);
																									//	var_dump ($class);
																										$class=str_replace('\\','/',$class);
																										// var_dump ($class);		
																										require_once($folder . '/' . $class . '.php');	
																										
																										// echo 	$folder.'/'.$class.'.php'.'</br>';
																										//you can see on the screen the include folder,file.php										  
																										break;
																									}
																					}
																}                 
					                     	      );
	
	//require_once("View/Forum/Forum.php");	
	try
	{
      // var_dump($config);
	   //	$test=new zebi();
		//$test->zebikbir();*/
	
		//echo 'try---------->'.$config->basepath.'</br>';
		//require_once('Framework/httpRequest.php');
		$httpRequest = new HttpRequest();
        $router = new Router();
		$httpRequest->setRoute($router->findRoute($httpRequest,$config->basepath)); 
		// $httpRequest= "/" ou forum----- 
		//$config->basepath="PHP/Routeur-Training-dev/" chemin vers l index.php
        $httpRequest->run($config);
		//echo '//-----------------------try---Http------------------------------------//'.'</br>';
		//var_dump ( $httpRequest->run($config));
	}
	catch(Exception $e)
	{
        echo 'catch---------->'.$config->basepath.'</br>';
		echo '-----------------------//VAR-dump--->$e//-------------------------------'.'</br>';
		//var_dump ($e);
		echo $e->getMessage().'</br>';
		echo "Le code de l'exception est : " . $e->getCode().'</br>';
		echo $e->getFile().'</br>';
		//echo '//-----------------------Http------------------------------------//'.'</br>';
		$httpRequest = new HttpRequest("/Error","GET");
		//echo $httpRequest->getUrl().'</br>';
		//echo $httpRequest->getMethod().'</br>';
		//var_dump ($httpRequest);
		//echo '-------------------------router----------------------------------//'.'</br>';
        $router = new Router();
		//echo '//------------------------------http->setRoute-------------------//'.'</br>';
		$httpRequest->setRoute($router->findRoute($httpRequest,$config->basepath));
		
		//$httpRequest->setRoute($router->findRoute($httpRequest));
		
		//echo '//-------------------------------$http-->addparam----------------//'.'</br>';

		$httpRequest->addParam($e);
		//$httpRequest->getParam();
		//var_dump($httpRequest->getParam());
		//echo '//---------------------------$config ----------------------------//'.'</br>';
	
	    //var_dump($config);
      
		//echo '//--------http->RUN------//';			
		$httpRequest->run($config);
		//var_dump($httpRequest->run($config));
	}

