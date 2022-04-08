 <?php
 
 class Template{
     //Path to Template
     protected $template;
     //variable passed in
     protected $vars = array();


     //constructor 
     public function __construct($template)
     {
         $this->template = $template;
     }
//called automatically magic methods
     public function __get($key){
         return $this->vars[$key];
     }
     
     public function __set($key, $value){

        $this -> vars[$key] = $value;

     }



//Runs automitcally when obj is created 
     public function __toString()
     {
         extract($this->vars);
         chdir(dirname($this->template)); //Change dir to template
         ob_start();

         include basename($this->template);

         return ob_get_clean();
     }


 }
 
 
 ?>