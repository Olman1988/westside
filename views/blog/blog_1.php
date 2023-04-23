<?php

require_once 'config/parameters.php';
require_once 'views/blog/header.php';
require_once 'views/blog/navbarSecondary.php';
require_once 'views/principal/buttons.php';

if(isset($_GET['id'])){
require_once 'views/blog/blog.php';
} else {
    require_once 'views/blog/principal.php';
   require_once 'views/principal/blog.php'; 
}
require_once 'views/blog/footer.php';

