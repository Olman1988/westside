<?php
require_once 'config/parameters.php';
require_once 'views/proyectos/header.php';
require_once 'views/proyectos/navbarSecondary.php';
require_once 'views/principal/buttons.php';
 if(isset($_GET['video'])){
    require_once 'views/proyectos/principalVideos.php';
       require_once 'views/proyectos/videos.php'; 

 } else {
if(isset($_GET['id'])){
  require_once 'views/proyectos/descripcionP.php'; 
 
}else {
 require_once 'views/proyectos/principal.php';
require_once 'views/proyectos/galeria.php';   
}
 }
require_once 'views/proyectos/footer.php';
?>
