<?php
			class PizzaController extends BaseController
								{
									private $PizzaModel;									
									public function Pizza()
																						{
																							$this->PizzaModel=new PizzaModel("modena","homepage");	//ACTIVATION DATABASE MODENA

																							ob_start();	
																						/*	echo
																									'<div id="showimage">
																									</div>																									
																									<a href="View/IMG/ex_1_2.jpg" onClick="return enlarge('View/ex_1_2.jpg',event)">																									
																									<img src="View/IMG/ex_1_2_v.jpg" border="0">																					
																									</a>';*/
																					        $tab= $this->PizzaModel->message();	
																						//	 echo	$tab["id"]."</br>";
																							 echo	$tab["TITRE"]."</br>";	
																							 echo	$tab["MESSAGE"]."</br>"; 
																							// echo	$tab["DATE"]."</br>"; 
																							
																						  /*   foreach( $this->HomeModel->message() as $key => $value)
																							   {
																								 print "$value\n";
																								   print " $key => $value\n";																							
																						    	}		*/
																							$contentView=ob_get_clean();//Opening the buffer to store all output from 

																							$this->view("pizza","","","PIZZA","$contentView ");	
																						}								
								}