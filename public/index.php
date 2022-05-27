<?php 
session_start();
require "../vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();




$rooter=new Router();
$rooter->routes("GET","/","Controller/showIndex")
       ->routes("GET","/agence-web","Controller/showIntro")
       ->routes("GET","/conception-de-sites-internets","Controller/showDevServices")
       ->routes("GET","/community-manager","Controller/showMarketServices") 
       ->routes("GET","/nous-contacter","Controller/showContact")
       ->routes("GET","/space-administration","Controller/showAdminer") 

       // post rootes
       ->routes("POST","/demande-informations","Controller/insertMessage") 
       ->routes("POST","/demande-de-devis","Controller/insertDevisData") 
       ->routes("POST","/adminer-envoie-image","Controller/uploader") 





       ;
      






$rooter->run("Digital\Controllers");
