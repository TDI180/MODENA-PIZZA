<?php
                 class BoissonModel extends BaseManager
                                   {
                                    private $Message;        
                                                public function __construct($name,$table)
                                                                                                    {
                                                                                                    // $configFileUser = file_get_contents("Config/config.json");
                                                                                                    // $configUser = json_decode($configFileUser,true);		
                                                                                                    parent::__construct($name,$table);
                                                                                                    // $this->Forum_Article=parent::getALL();
                                                                                                    
                                                                                                    //parent::__construct($name,$table);
                                                                                                    //$this->Forum_Article=parent::getALL_Article_Forum($name,$table,"");
                                                                                                    }  

                                     public function message()
                                                                                                    {                                                                                                                                                     
                                                                                                      //$this->Message=parent:: getById(1);   
                                                                                                      $this->Message=parent::getById(3);    // appel de l HTML CSS ET JS ET DES IMAGES CONCERNEES DANS LA DATA-BASE
                                                                                                      //$tab=  $this->Message;
                                                                                                   // var_dump($this->Message);                                                                                             
                                                                                                    //var_dump ((array) $this->Message);
                                                                                                    // $this->Message= json_decode(json_encode($this->Message), true);       
                                                                                                  //   var_dump($this->Message);                                                                                          
                                                                                                     /*   echo $tab['TITRE'].'</br>';
                                                                                                        echo $tab['MESSAGE'].'</br>';        
                                                                                                        echo $tab['DATE'].'</br>';     
                                                                                                      foreach(  $tab  as $key => $value) {
                                                                                                                                                                                      print " $value\n"."</br>";
                                                                                                                                                                                }*/
                                                                                                        return $this->Message ;
                                                                                                    }
                                   }
?>
