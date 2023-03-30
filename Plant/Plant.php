<?php 

class Plant {
   public $name;
   public $latinName;
   public $perennial;
   public $height;
   public $continents;
   public $year;

   function __construct($name=null,$latinName=null,$perennial=true,$height=0,$continents=[],$year=0)
   {
       $this->name = $name;
       $this->latinName = $latinName;
       $this->perennial = $perennial;
       $this->height = $height;
       $this->continents = $continents;
       $this->year = $year;
       
   }

}
   
?>