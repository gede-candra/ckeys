<?php

class App 
{
   protected $controler = "ErrorPage",
               $method  = "index",
               $params  = [];
      
   /**
    * __construct
    *
    * @return void
    */
   public function __construct() 
   {
      $url = $this->parseURL();
      var_dump($url);
   }
   
   /**
    * parseURL
    *
    * @return void
    */
   public function parseURL()
   {
      if (isset($_GET['url'])) {
         $url = rtrim($_GET['url'], '/');
         $url = filter_var($url, FILTER_SANITIZE_URL);
         $url = explode('/', $url);
         return $url;
      }
   }
}