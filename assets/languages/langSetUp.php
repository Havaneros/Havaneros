<?php
//////////////////////////////langs
session_start();
function setLang1(){
   

   if(isset($_GET['Lan'])){
         if($_GET['Lan']=='es'){
            $_SESSION['lang']='es';
         }
         else{
            $_SESSION['lang']='en';
         }
   }
   else {
      if(isset($_SESSION['lang'])){
         callLang($_SESSION['lang']);
         return;
      }
      else{
         $_SESSION['lang']='en';
      }
   } 

   callLang($_SESSION['lang']);
   return;
}
setLang1();


function callLang($lang){
   include(ROOT.'/assets/languages/'.$lang.'.php');
}

function setLang() {
  $path = explode('/',$_SERVER['REQUEST_URI']);
  $expire=time()+60*60*24*30;
  $lang = 'en';
  if(count($path)>0 && $path[1]=='es') $lang = 'es';
  setcookie("lang", $lang, $expire, '/');
}
setLang();




?>