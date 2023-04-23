<?php

require_once 'config/parameters.php';
require_once 'views/principal/header.php';
require_once 'views/principal/navbar.php';
require_once 'views/principal/loader.php';

if(isset($_GET['pag'])){
    switch ($_GET['pag']) {
        case "aboutUS":
       
        require_once 'views/nosotros/principal.php';

        require_once 'views/nosotros/equipo.php';
        require_once 'views/principal/buttons.php';

       

            break;
        case "gallery":
            
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
          
            
            break;
         case "services":
               
                if(isset($_GET['id'])){
                  require_once 'views/services/servicedetails.php';  
                } else {
                        require_once 'views/services/principal.php';
                 require_once 'views/services/services.php';
                }
            
              
            break;
        case "blog":
            
            require_once 'views/principal/buttons.php';

            if(isset($_GET['id'])){
            require_once 'views/blog/blog.php';
            } else {
                require_once 'views/blog/principal.php';
               require_once 'views/blog/allblogs.php'; 
            }
         
            break;
        case "FAQ":
           
            require_once 'views/faq/principal.php';
             require_once 'views/faq/faq.php';
           
            break;
        case "downloadable":
           
            require_once 'views/descargables/principal.php';
            require_once 'views/descargables/descargables.php';
           
            break;
        
            case "search":
           
            require_once 'views/principal/search.php';
           
            break;
        case "contact":
          
            require_once 'views/principal/contact.php';
           
            break;
        case "pricing":
           
            require_once 'views/pricing/principal.php';
            require_once 'views/pricing/pricing.php';
          
            break;
        case "knowUs":
        
            require_once 'views/nosotros/principalKnowus.php';
           require_once 'views/nosotros/knowus.php';
           
            break;
        default:
            break;
    }
    
} else {
    
require_once 'views/principal/buttons.php';
require_once 'views/principal/slider.php';
require_once 'views/principal/aboutUs.php';
require_once 'views/principal/services.php';
//require_once 'views/principal/projects.php';
require_once 'views/principal/ourCostumers.php';
require_once 'views/principal/testimonials.php';
require_once 'views/principal/blog.php';
}

require_once 'views/principal/footer.php';
