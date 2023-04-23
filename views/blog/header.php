<?php
?>

<html lang='es'>
<head>  
   
<title>Seguridad AngFer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,user scalable=no, initial-scale=1.0, maximun-scale=1.0">
  <meta name="description" content="Empresa lider en la gestión y operación de proyectos forestales, trámites legales, permisos forestales, permisos de corta de árboles">
    <meta name="description" content="Produciendo en armonía con el ambiente, le ofrecemos tranquilidad legal en sus proyectos forestales.">

  <!--JQUERY-->
  <link rel="icon" href="<?=base_url?>images/principal/logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!--BOOSTRAP-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/litera/bootstrap.min.css">
   <!--ANIMACIONES-->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 
  <!--ICONOS-->
  <script src="https://kit.fontawesome.com/b58e5dabf0.js" crossorigin="anonymous"></script>
  <!--CAROUSEL.css------------->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="" crossorigin="anonymous"></script>

	<!-- Include Unite Gallery core files -->
				<script src='<?=base_url?>unitegallery/js/unitegallery.min.js' type='text/javascript'  ></script>
				<link  href='<?=base_url?>unitegallery/css/unite-gallery.css' rel='stylesheet' type='text/css' />
				
				<!-- include Unite Gallery Theme Files -->
				
				<script src='<?=base_url?>unitegallery/themes/tiles/ug-theme-tiles.js' type='text/javascript'></script>
   <script type="text/javascript"> (function() { var css = document.createElement("link"); css.href = "https://use.fontawesome.com/releases/v5.9.0/css/all.css"; css.rel = "stylesheet"; css.type = "text/css"; document.getElementsByTagName("head")[0].appendChild(css); })(); </script>

  <!--ASSETS-->
 
 <!-- <link href="assets/css/principal_styles15.css" rel="stylesheet" type="text/css">-->
   
 <style> 
       @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;900&family=Poppins:wght@400;500;600;700&family=Mukta:wght@200;400;500;700&family=Montserrat+Alternates:wght@200&family=Ubuntu:wght@400;500;700&family=Poiret+One:wght@400;500;700&display=swap');

     /*****GENERAL****/
     
     /**.color1 { #3c4c84 };
.color2 { #a3aed5 }; gris
.color3 { #041c5c }; azul 
.color4 { #60719a };gris azulado
.color5 { #b3bbcf }; gris claro **/ 
      .box_w{
    z-index:200;
position: fixed;left: 30px;bottom: 20px;

  cursor:pointer;
}
.box_scroll{
   
    z-index:200;
position: fixed;
right: 0px;
bottom: 20px;
cursor:pointer;
  

}
.box_scroll .btn_scroll:hover, .box_w .btn_w:hover{
    opacity:0.7;
}
.box_w .btn_w a{
   text-decoration: none;
   color:white;
}
.box_w .btn_w{
    background-color:#25D366;
    border-radius: 50%;
    color:white;
    width:50px;
    margin:auto;
    height:50px;
    display:flex;
    justify-content: center;
    box-shadow: 2px 2px 8px 1px gray;
    transition:all 0.3s ease;
}

.box_scroll .btn_scroll{
    background-color: rgba(60,76,132,0.9);
    border-radius:5px;
    color:white;
    margin:auto;
    height:50px;
    width:50px;
    display:flex;
    justify-content: center;
    box-shadow: 2px 2px 8px 1px gray;
    transition:all 0.3s ease;
    
}
.box_scroll .btn_scroll i{
    font-size:35px;
    margin:auto;
}
.box_w .btn_w a {
    font-size:35px;
    margin:auto;
}
     section{
         min-height:100vh;
         height:auto;
     }
     .icon_style{
         width:33px;
         height:33px;
         background:#041c5c;
         padding:3px;
         font-size:25px;
         color:red;
         border-radius:50%;
         color:white;
     }
     .btn_general_style_princ{
         cursor:pointer;font-family:'Poiret One';
         text-align:center;padding:20px;
         color:white;
         background:#60719a;
         height:60px;
         margin-left:60px;
         width:150px;
         font-weight:900;
         font-size:18px;letter-spacing:4px;
     }
      .btn_general_style_sec{
        cursor:pointer;font-family:'Poiret One';
         text-align:center;padding:20px;
         color:whitesmoke;
      border:solid 1px whitesmoke;
         height:60px;
         margin-left:60px;
         width:170px;
         font-weight:900;
         font-size:18px;
         letter-spacing:4px;
         float:left;
     }
     
     
       
     /*NAVBAR*/
 .navbr{
    z-index:100;
    min-height:80px;
    font-family: 'Poppins', 'sans-serif';
    font-size: 14px;
    transition:all 0.3s ease;
    max-width:100%;
    min-width:100%;
 margin-right:0;
 background-color:transparent;
}
.navbar-toggler_principal{
   color:white;border: solid 1px white;
   position:absolute;
   right:10px;
   top:80px;
}

.navbr .navbar-brand{
    margin-left:15px;
    font-size: 15px;
    font-weight: bold;
    
}


.navbr #logo{
    
    
    max-height: 200px;   
    
    }
    #logo2{
    
    
    max-height: 200px;   
    
    }
    .navbr ul{
        margin:auto;
        
    }    
    .navbr ul li{
        padding: 10px 27px;
        transition: all 0.3s ease;
        margin:auto;
        margin-left: 0px;  
        font-size:12px;
        color:WHITE;
letter-spacing: 2px;     
font-weight:500;
text-align:center;
-moz-transform: skew(-17deg, 0deg);
-webkit-transform: skew(-17deg, 0deg);
-o-transform: skew(-17deg, 0deg);
-ms-transform: skew(-17deg, 0deg);
transform: skew(-17deg, 0deg);

    } 
    .navbr ul li a{
      
-moz-transform: skew(17deg, 0deg);
-webkit-transform: skew(17deg, 0deg);
-o-transform: skew(17deg, 0deg);
-ms-transform: skew(17deg, 0deg);
transform: skew(17deg, 0deg);

    } 
    .dropdown-item{
        color:black;
    }
    .dropdown-item:hover{
        background-color: #041c5c;
      
        color:white;   
    }
   .navbr ul li:hover{
         background-color: #041c5c;
        transform:scale(1.2) skew(-17deg, 0deg);
        -moz-transform:scale(1.2) skew(-17deg, 0deg);
-webkit-transform: scale(1.2) skew(-17deg, 0deg);
-o-transform:scale(1.2) skew(-17deg, 0deg);
-ms-transform: scale(1.2) skew(-17deg, 0deg);
transform: scale(1.2) skew(-17deg, 0deg);
        color:white;
    }
    .navbr ul li a:hover {
       
        color:white !important;
    }
  
    
  .navbrSecondary{
    z-index:100;
    min-height:80px;
    font-family: 'Poppins', 'sans-serif';
    font-size: 14px;
    transition:all 0.3s ease;
    max-width:100%;
 margin-right:0;

 background-color:rgba(60,76,132,0.9);
}
.navbar-toggler{
   
}

.navbrSecondary .navbar-brand{
    margin-left:15px;
    font-size: 15px;
    font-weight: bold;
    
}


.navbrSecondary #logo2{
    
    
    max-height: 100px;   
    
    }
   
   .navbrSecondary ul li{
        padding: 10px 27px;
        transition: all 0.3s ease;
        margin:auto;
        margin-left: 0px;  
        font-size:12px;
        color:WHITE;
letter-spacing: 2px;     
font-weight:500;
text-align:center;
-moz-transform: skew(-17deg, 0deg);
-webkit-transform: skew(-17deg, 0deg);
-o-transform: skew(-17deg, 0deg);
-ms-transform: skew(-17deg, 0deg);
transform: skew(-17deg, 0deg);
margin:auto;
    } 
     .navbrSecondary ul{
max-width:100%;
display:flex;
justify-content: space-around;
border-left:solid 2px gray;
border-right:solid 2px gray;

    } 
    .navbrSecondary ul li a{
      
-moz-transform: skew(17deg, 0deg);
-webkit-transform: skew(17deg, 0deg);
-o-transform: skew(17deg, 0deg);
-ms-transform: skew(17deg, 0deg);
transform: skew(17deg, 0deg);

    } 
   .navbrSecondary ul li:hover{
         background-color: #041c5c;
        transform:scale(1.2) skew(-17deg, 0deg);
        -moz-transform:scale(1.2) skew(-17deg, 0deg);
-webkit-transform: scale(1.2) skew(-17deg, 0deg);
-o-transform:scale(1.2) skew(-17deg, 0deg);
-ms-transform: scale(1.2) skew(-17deg, 0deg);
transform: scale(1.2) skew(-17deg, 0deg);
        color:white;
    }
    .navbrSecondary ul li a:hover {
       
        color:white !important;
    }
    .span{
         background-color: rgba(97,126,81,0.7);
        border-radius: 50px;
    }
 
    
       .dropdown-item{
        color:black;
    padding-left:40px;
        margin-left:-10px;
    }

    .dropdown-item:hover{
        background-color: #041c5c;
      width:130%;
        color:white;   
    }
        .navbar-expand-lg .navbar-nav .dropdown-menu {
  
    overflow: hidden;
}
    
    
     .slider{
     position:relative;
     background:gray;
     height:auto;
     
 }
 
 .myslider{
     position:relative;
     height:100vh;
     background-color: white;
     display:none;
     overflow: hidden;
 }   
 
 .slider .p_n .prev, .slider .p_n .next{
     position:absolute;
     top:50%;
     transform: translate(0, -50%);
     font-size:35px;
     padding:15px;
     color:white;
     transition:0.1s;
     user-select:none;
     cursor:pointer;
     transition: all 0.3s ease;
     z-index:200;
 }
 .slider .p_n .prev:hover,.slider .p_n .next:hover{
     color:#60719a;
     text-decoration:none;
 }
 .next{
     right:0;
 }
 .dotsbox{
     position:absolute;
     left:50%;
     transform:translate(-50%);
     bottom:20px;
     cursor:pointer;
 }
 .dot{
     display:inline-block;
     width:15px;
     height:15px;
     background:rgba(250,250,250,0.6);
     border-radius:50%;
     cursor:pointer;
     margin: 0 10px;
 }
 .actives, .dotsbox .dot:hover{
     background:#60719a;
 }
 .myslider .txt_slider{
     position:absolute;
     top:50%;
     bottom:0;
     right:0; 
     left:0;
     margin:auto;
    transform: translateY(-50%);
     line-height: 20px;
     color:white;
     animation-name:poss;
     animation-duration: 3s;
     z-index:10;
     width:100%;
    
 }
 .txt_slider h1{
     
     font-family:'Mukta';
     padding: 10px 10px;
     width:80%;
     border-radius: 30px;
     margin-left:60px;
     font-size:18px;
     letter-spacing: 2px;
 color:#60719a;
     font-weight:900;
 }
  .txt_slider h1 strong{
   
     font-weight:900;
 }
 
 .myslider .txt_slider img{
     width:800px;
     position:absolute;
     right:-70px;
     top:-170px;
      
      border-radius: 10px;
      transform: skewY(10deg);  
}
.slider_container-buttons{
    max-width:400px;display:flex;justify-content:space-around;
}
.btn_contact{
    font-size:25px;
    border-radius: 40px;
 margin:auto;
 margin-bottom: 10px;
}
.btn_contact a{
    text-decoration:none;
    color:white;
}
 
 .info_text{
    margin-left:60px;
   padding-top:10px;
     width:30%;
     font-size:25px;
     line-height:2.2rem;
     font-weight:900; 
     font-family: 'Montserrat Alternates';
     
 }
 .slider_title-line{
     margin-left:80px;background:#60719a;width:60px;height:4px;
 }

 .fdd{
     -webkit-animation-name:fdd;
     -webkit-animation-duration:1.5s;
     animation-name:fdd;
     animation-duration:1.5s;
 }
 @-webkit-keyframes fdd{
     from{opacity:0.6}
     to{opacity:1}
 }
 @keyframes fdd{
     from{opacity:0.6}
     to{opacity:1}
 }
 .home{
    background-attachment:fixed; 
    background-position: center;
width:100%; height: 100%;
background-size: 130% 140%;
animation: movimiento 15s infinite linear alternate;


}
@keyframes movimiento{
/*from{transform:scale(1)}
     to{transform:scale(1.3)}*/
from{
background-position:left;
}to{
background-position:right;
}
}

 
 .section_div{
     width: 100%;
     margin:auto;
 }
 
 /*****ABOUT US****/
 
 .aboutUs_services{
     width:100%;
  margin-top:-120px;
      
 }
 .aboutUs_services-service{
     border-radius:15px;
     height:200px;
    max-width:250px;
 box-shadow: 1px 1px 5px gray;
     background:white;
     margin:auto;
     margin-bottom:10px;
      text-align: center;
      color:#60719a;
 }
 .aboutUs_services-service i {
    margin:auto; 
   width:100%;
   margin-top:20px;
 font-size:100px;

 padding:10px;

 }
 .aboutUs_image_container{
    width:400px;
     height:600px;
     
     position:relative;top:20px;left:20px;
 }
 .aboutUs_image_container .aboutUs_image_container-img-first{
    width:400px;
     height:500px;
     object-fit: cover;
     width:100%;
     
 }
 .aboutUs_image_container .aboutUs_image_container-img-sec{
     width:400px;
     height:500px;
          object-fit: cover;
               width:100%;
  transform:translate(50%,-50%);
    box-shadow: -20px -20px 0px white;
 }
 .aboutUs_title{
   
   position:relative;
   width:400px;
   float:right;
   margin-top:100px;color:#495057;font-family:'Montserrat Alternates';
   text-align: right;
 }
 .aboutUs_title::after{
   content:'';
   position:absolute;
   width:80px;
   background:#60719a;
   height:3px;
   top:50%;
   
 }
  .aboutUs_title::before{
   content:'';
   position:absolute;
   width:80px;
   background:#60719a;
   height:3px;
   top:50%;
   left:-45px;
   
 }
 .aboutUs_title-info{
     
 }
 .aboutUs_text{
         float:right;
   width:350px;
     font-size:20px;
     line-height:2.2rem;
     font-weight:900; 
     font-family: 'Montserrat Alternates';
     
}
/*******SERVICE*******/
#service{
  padding-bottom:50px;  
}
.service_container-info{
    width:50%;
    max-width:550px;
    font-family: 'Montserrat Alternates';
}
.service_items{
    width:90%;
    position:relative;
}
.service_container_items{
    position:relative;
    height:300px;
    background:red;
    padding:0px !important;
    border-radius:5px;
  max-width:420px;
  margin:auto;
  margin-top:50px;
  overflow: hidden;
  box-shadow: 2px 2px 5px gray;
}

.service_item-image{
    width:100%;
    object-fit: cover;
    height:300px;
}
.service_item-over{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:300px;
    background:rgba(0,0,0,0.3);
    cursor:pointer;
    transition: all 0.3s ease;
}
.service_item-over h3{
  color:white;
  width:60%;
  margin-left:25px;
  margin-top:25px;
  font-size:30px;
}
.service_item-over button{
  color:white !important;
  margin-left:25px;
  margin-top:25px;
  border:none;
  background:#3c4c84 !important;
  font-size:15px;
}
.service_item2-over{
    position:absolute;
    top:0;
    right:-100%;
    width:100%;
    height:300px;
    background:rgba(0,0,0,0.3);
    cursor:pointer;
    transition: all 0.3s ease;
}
.service_item2-over h3{
  color:white;
  width:80%;
  margin:auto;
  margin-top:15px;
  font-size:20px;
}
.service_item2-over div {
  color:white !important;
 font-family:'Ubuntu';
  font-size:17px;
  padding:15px;
  padding-top:20px;
  width:90%;
  font-weight: 400;
}
.service_container_items:hover .service_item-over{
    left:-100%;
}
.service_container_items:hover .service_item2-over{
    right:0%;
}
.service_container_items-footer{
    width:80%;height:10px;background:#3c4c84;
}

/***PORJECTS***/

.projects_title{
  
   position:relative;
   width:400px;
   padding-left:33px;
   margin-top:100px;
   margin-left:45px;
   color:#495057;
   font-family:'Montserrat Alternates';
   
 }
 .projects_title::after{
   content:'';
   position:absolute;
   width:80px;
   background:#60719a;
   height:3px;
   top:50%;
   
 }
  .projects_title::before{
   content:'';
   position:absolute;
   width:80px;
   background:#60719a;
   height:3px;
   top:50%;
   left:-45px;
   
 }
 .projects_text{
        
   width:350px;
     font-size:20px;
     line-height:2.2rem;
     font-weight:900; 
     font-family: 'Montserrat Alternates';
     
}
.btn_project-contact{
    margin-top:30px;
      cursor:pointer;font-family:'Poiret One';
         text-align:center;padding:20px;
         color:white;
         background:#60719a;
         height:60px;
       margin-left:0px;
         width:220px;
         padding:10px;
         font-weight:900;
         font-size:18px;letter-spacing:4px;
}
  .grid-item {
  display: flex;
  align-items: center;
  justify-content: center;
position:relative;
  background-color: #03afff;
  border-radius: 4px;
  transition: transform 0.3s ease-in-out;
cursor:pointer;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.grid-item:hover {
  filter: opacity(0.9);
  transform: scale(1.04);
}
.grid-item:hover .galery-text{
  
   visibility: visible;
}

.grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  grid-auto-rows: minmax(200px, auto);
  gap: 20px;
  padding: 20px;
  grid-auto-flow: dense;
}
.galery-text{
    position:absolute;bottom:0px;left:0px;width:100%;height:100%;
transition: all 1s ease;
color:white;
padding:20px;
font-family: "Poppins";
}
.galery-text h3{
  width:50%;
  
}
.galery-text p{
  width:70%;
  
}
.btn-project{
    position:absolute;
padding:10px;
cursor:pointer;font-family:'Poiret One';
         text-align:center;padding:10px;
         color:white;
         background:transparent;
         height:50px;
        border:solid 2px white;
         width:120px;
         font-weight:900;
         font-size:18px;letter-spacing:4px;
         position:absolute;
         right:20px;
         bottom:20px;
}
.btn-project a{
 text-decoration: none;
 color:white;
}
.grid_fake{
    
}
.content-img{
    background-size: 500px 100%;
    background-position: center;
    height:500px;
    width:90%;
        max-width:500px;
    
}

/******TESTIMONIALS*****/
.testimonials{
    height:100vh;background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)),url(images/aboutUs/imagen1.jpg);background-attachment:fixed;
background-size:100% 100%;
background-repeat:no-repeat;
color:white;
}
.testimonials_text-principal{
    font-size:240px;max-height:200px;
}
.testimonials_text{
    color:white;width:80%;
}
.testimonials_text-second{font-size:30px;font-family: 'Poppins'}

/****BLOG*****/
#blog{
  padding-bottom:50px;  
}
.blog_container-info{
    width:50%;
    max-width:550px;
    font-family: 'Montserrat Alternates';
}
.blog_items{
    width:90%;
    position:relative;
}
.blog_container_items{
    position:relative;
    height:300px;
    background:red;
    padding:0px !important;
    border-radius:5px;
  max-width:420px;
  margin:auto;
  margin-top:50px;
  overflow: hidden;
  box-shadow: 2px 2px 5px gray;
}

.blog_item-image{
    width:100%;
    object-fit: cover;
    height:300px;
}
.blog_item-over{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:300px;
    background:rgba(0,0,0,0.3);
    cursor:pointer;
    transition: all 0.3s ease;
}
.blog_item-over h3{
  color:white;
  width:60%;
  margin-left:25px;
  margin-top:25px;
  font-size:30px;
}
.blog_item-over button{
  color:white !important;
  margin-left:25px;
  margin-top:25px;
  border:none;
  background:#3c4c84 !important;
  font-size:15px;
}

.blog_container_items-footer{
    width:80%;height:10px;background:#3c4c84;
}
.blog_datos{
    display:flex;justify-content:space-around;color:white;background:#60719a;border-radius:20px;width:90%;padding:3px;
font-size:15px;
}
/**CAROUSEL**/
.owl-dots {
    display: flex;
    justify-content: center;
    margin-top:50px;
    color:red;
 
}
.owl-nav span {
    font-size:50px;
    
    position:absolute;
    top:50%;
}
.owl-nav button{
    position:absolute;
    bottom:70%;
}
.owl-nav .owl-next{
    position:absolute;
    right:33px;
}
.owl-nav span {
    font-size:100px;
  color:#60719a;
    
}

.owl-dots span {
    margin:auto;
    background:#869791;
    border-radius: 20px;
    display: block;
    height: 12px;
    margin: 5px 7px;
    opacity: 0.5;
    width: 12px;
}
.owl-dot span{
   background:white; 
}
.dotsbox{
    width:250px;
}


/*************CONTACT************/

.contact{
    height:100vh;background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)),url(images/aboutUs/imagen1.jpg);background-attachment:fixed;
background-size:100% 100%;
background-repeat:no-repeat;
color:white;
}
.contact_title{
  
   position:relative;
   width:400px;
   padding-left:33px;
   margin-top:100px;
   margin-left:45px;
   color:white;
   font-family:'Montserrat Alternates';
   
 }
 .contact_title::after{
   content:'';
   position:absolute;
   width:80px;
   background:#60719a;
   height:3px;
   top:50%;
   
 }
  .contact_title::before{
   content:'';
   position:absolute;
   width:80px;
   background:#60719a;
   height:3px;
   top:50%;
   left:-45px;
   
 }
 /****************NOSOTROS*****************/
 .about-one {
  padding: 120px 0;
  position: relative;
  border-bottom: 2px solid #f1f1f1;
}
.about-one__circle {
  position: absolute;
  right: 10%;
  bottom: -3%;
}
.about-one__img {
  position: relative;
  margin-bottom: 45px;
}
.about-one__img:before {
  content: '';
  width: 197px;
  height: 268px;
  position: absolute;
  top: -40%;
  left: -10%;
  background-image: url(../images/dot-pattern-1-2.png);
  background-position: 0 0;
  z-index: 10;
}
.about-one__text {
  margin: 0;
  font-size: 18px;
  line-height: 36px;
  color: #81868a;
  margin-bottom: 60px;
}
.about-one__btn {
  padding: 21.5px 68px;
  font-size: 16px;
}
.about-one__btn:hover {
  background-color: #012237;
  color: #fff;
}
.about-one__review {
  background-color: #fff;
  max-width: 300px;
  width: 100%;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  padding: 33.5px 0;
}
.about-one__review-count {
  margin: 0;
  font-weight: 400;
  font-size: 30px;
  color: #012237;
  line-height: 1em;
}
.about-one__review-stars {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  line-height: 1em;
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-one__review-stars i {
  color: #4a6de1;
  font-size: 20px;
}
.about-one__review-stars i + i {
  margin-left: 10px;
}
.about-one__review-text {
  margin: 0;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .2em;
}
.about-one__about-page {
  border-bottom: 1px solid #f1f1f1;
}
.about-one__about-page .about-one__img:before {
  top: auto;
  bottom: -40%;
}

.about-two {
  padding: 120px 0;
}
.about-two .block-title {
  margin-bottom: 50px;
}
.about-two__text {
  margin: 0;
  font-size: 18px;
  line-height: 36px;
  color: #81868a;
}
.about-two .thm-btn {
  padding: 21.5px 68px;
}
.about-two .thm-btn:hover {
  background-color: #012237;
  color: #fff;
}
.about-two__single {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 50%;
          flex: 1 1 50%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding-left: 20px;
  padding-right: 20px;
}
.about-two__single-wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-left: -20px;
  margin-right: -20px;
  margin-top: 45px;
  margin-bottom: 50px;
}
.about-two__single-text {
  color: #012237;
  font-size: 20px;
  font-weight: 500;
  margin: 0;
}
.about-two__single i {
  color: #32afc0;
  font-size: 64px;
  margin-right: 14px;
}
.about-two__image {
  display: inline-block;
  border-radius: 50%;
  position: relative;
}
.about-two__image:before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 330px;
  height: 330px;
  border-radius: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  border: 20px solid #fff;
  z-index: 11;
}
.about-two__image:after {
  content: '';
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: -20px;
  border: 3px solid #4a6de1;
  border-radius: 50%;
}
.about-two__image > img {
  border-radius: 50%;
  position: relative;
  z-index: 10;
}
.about-two__image-dots {
  width: 197px;
  height: 268px;
  position: absolute;
  top: 0%;
  left: calc(100% - 60px);
  background-image: url(../images/dot-pattern-1-2.png);
  background-position: 0 0;
  z-index: 10;
}
.about-two__count {
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: 12;
  -webkit-transform: translateX(-20%);
          transform: translateX(-20%);
  border-radius: 50%;
  width: 175px;
  height: 175px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  text-align: center;
  background-color: #fff;
  -webkit-box-shadow: 0px 0px 50px 0px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 50px 0px rgba(0, 0, 0, 0.1);
}
.about-two__count:before {
  content: '';
  position: absolute;
  top: 15px;
  left: 15px;
  right: 15px;
  bottom: 15px;
  border: 1px dashed rgba(1, 34, 55, 0.15);
  border-radius: 50%;
}
.about-two__count-text {
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: .2em;
  font-weight: 600;
  color: #81868a;
}
.about-two__count span {
  display: block;
  color: #4a6de1;
  letter-spacing: 0em;
  font-weight: 400;
  font-size: 30px;
}
 /*************SOCIAL MEDIA***********/
.content_icon_contact-icon i{
    font-size:30px; background:#041c5c;color:white;padding:10px 12px;border-radius:50%;
            transition: all ease 0.3s;
            cursor:pointer;
            width:50px;
            height:48px;

}
.content_icon_contact-icon i:hover{
    border:solid 1px #041c5c;
   background:white;color:#041c5c;
   transform:scale(1.1);
}
/*************PROYECTS_***************/
.text_projects-principal{
    text-shadow: 5px 10px #60719a;font-size:100px;font-weight:700;font-family:'Montserrat Alternates';color:white;position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);
}
.principal_projects{
    height:100vh;background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(assets/sliders/5imagen1.jpg);background-repeat: no-repeat;background-size:100% 100%;background-attachment:fixed;position:relative;
}

@media (min-width: 700px) {
 
}
@media(min-width:1001px){
    .wide {
    grid-column: span 2;
    
  }

  .tall {
    grid-row: span 2;
  }  
}
@media (max-width: 1000px) {
  .wide {
    grid-column: span 2;
    grid-row: span 1;
  }

  .tall {
    grid-column: span 2;
    grid-row: span 1;
  }
  
} 
@media (max-width:1290px){
    .grid_fake{
        display:none;
    }
}
@media (max-width: 1125px) {
 .aboutUs_title{
   float:none;
   position:relative;
   width:270px;
   font-size:25px;
   
 }
 .aboutUs_title::after{
   
   width:60px;
   
   
 }
  .aboutUs_title::before{

   width:60px;
 
   left:-5px;
   
 }
 .aboutUs_text{
        
   width:300px;
     font-size:18px;
   
     
}
 .aboutUs_title-info{
     margin-top:100px;
 }
 .projects_title{
 float:none;
   position:relative;
   width:270px;
   font-size:25px;

   margin:auto;
      margin-top:100px;
 }
 .projects_title::after{
   width:60px;
   
 }
  .projects_title::before{
  width:60px;
 
   left:-25px;
   
 }
 .projects_text{
        
   width:300px;
     font-size:18px;
     
}
.contact_title{
  
 float:none;
   position:relative;
   width:246px;
   font-size:25px;
text-align:center;
   margin:auto;
      margin-top:100px;
   padding-left:5px;
 }
 .contact_title::after{
 width:60px;
   
 }
  .contact_title::before{
   width:60px;
 
   left:-10px;
   
 }

} 
@media (max-width: 1000px) {

   .myslider .txt_slider{
 
    
 }
 .txt_slider h1{
     
  text-align: center;
  margin:auto;
 }
  .info_text{
   text-align: center;
     width:80%;
 font-size:19px;
     margin:auto;
 }
  .slider_title-line{
     margin:auto;
 }
 .slider_container-buttons{
    max-width:300px;
    margin:auto;
}
 .aboutUs_title{
 margin-top:100px;
   text-align:center;
   margin:auto;
 }
 .aboutUs_title-info{
     margin-top:200px;
 }
 .aboutUs_title::after{
   
   width:30px;
   
   
 }
  .aboutUs_title::before{

   width:30px;

   
 }
 /********TESTIMONIALS**********/
 .testimonials_text-principal{
    font-size:150px;
    display:none;
    
}
.testimonials_text{
    margin-top:50px;
    padding-bottom:50px;
    display:none;
}
.testimonials_text-second{
    font-size:20px;
    display:none;
}
.galery-text h3{
  width:100%;
  display:none;
}
.galery-text p{
  width:100%;
  display:none;
}
 
} 
@media (max-width:800px){
      .btn_general_style_princ{
        
         margin:auto;
         width:120px;
         font-weight:900;
         font-size:15px;letter-spacing:3px;
     }
      .btn_general_style_sec{
        margin:auto;
         min-width:110px;
         margin-left:10px;
         font-size:15px;letter-spacing:3px;
     }
      .aboutUs_image_container{
    width:450px;
     height:500px;
     top:0px;
     left:0px;
   
 }
 .aboutUs_image_container .aboutUs_image_container-img-first{
    width:350px;
     height:450px;
    
     
 }
 .aboutUs_image_container .aboutUs_image_container-img-sec{
    width:350px;
     height:450px;
        transform:translate(0%,-50%);
    box-shadow: -15px -15px 0px white;   
 }
 .btn-project{
    position:absolute;
padding:5px;
cursor:pointer;font-family:'Poiret One';
            padding:5px;
         
         height:40px;
        
         width:100px;
         
         font-size:15px;
         right:10px;
         bottom:10px;
}

   .grid-container {
   
    grid-auto-rows: minmax(300px, auto);
   
}
.text_projects-principal{
    font-size:60px;
}
.principal_projects{
  background-size:800px 100%;
}
}
@media (max-width:500px){
    .blog_datos{
font-size:13px;
}
    .aboutUs_image{
        padding-right: 0px;
    padding-left: 0px;
    }
          .aboutUs_image_container{
    width:350px;
     height:400px;
     top:0px;
     left:0px;
   
 }
 .aboutUs_image_container .aboutUs_image_container-img-first{
   width:350px;
     height:400px;
    
     
 }
 .aboutUs_image_container .aboutUs_image_container-img-sec{
   width:350px;
     height:400px;
        transform:translate(10%,-50%);
    box-shadow: -15px -15px 0px white;   
 }
 .galery-text h3{
font-size:20px;
  
}
.galery-text p{
  font-size:17px
  
}
.service_container_items{
 
    height:400px;
    
}

.service_item-image{

    height:400px;
}
.service_item-over{
   
    height:400px;
   
}
.service_item2-over{
  
    height:400px;
   
}
.principal_projects{
  background-size:700px 100%;
}
}
 
 /*TYPES SERVICES*/
 .sliderP{
     width:100%;
     overflow:hidden;
     margin:0 auto;
      background:white;
 }

 .box{
	min-width:300px;
        margin:20px;width:100%;
        border:solid 5px white;
	
box-shadow:  5px 5px 10px #95a2b5;
        height:400px;      
	border-radius: 10px;
	overflow: hidden;
	margin: 30px auto;
        padding-bottom:20px;
        
       
}


 .box .slide-img{
	position:relative;
        height:500px;
         background:white;
}
.box .slide-img img{
	
	height: 500px;
	object-fit: cover;
       
	transition: all ease 0.5s;
}
.detail-box{
	width: 100%;
display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 10px 20px;
	box-sizing: border-box;
	font-family: calibri;
       
}
.owl-stage{
    min-width: 100%;
}
.type{
	display: flex;
	flex-direction: column;
}
.type a{
	color:#38b6ff;
	margin: 5px 0px;
	font-weight: 700;
	letter-spacing: 0.5px;
	padding-right: 8px;
}
.type p{
	color:rgba(26,26,26,0.5);
}
.price{
	color: #333333;
	font-weight: 600;
	font-size: 1.1rem;
	font-family: poppins;
	letter-spacing: 0.5px;
}
.overlay{
	position:absolute;
        top:50%;
        left:50%;
	transform: translate(-50%,-50%);
	width:150%;
	height: 500px;
	background-color: rgba(0,0,0,0.4);
	display: flex;
	justify-content: center;
	align-items: center;
}
.room-btn{
	width:160px;
	height: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	border:solid 2px white;
	color:white;
	font-weight: 700;
	letter-spacing: 1px;
	font-family: calibri;
	transition: all ease 0.3s;
	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
        font-size:20px;
        margin:auto;
}
.room-btn:hover{
	color:#FFFFFF;
	background-color:#60719a;
	
       text-decoration: none;
       transform:scale(1.1);
}
.overlay{
	visibility: hidden;
}
.slide-img:hover .overlay{
	visibility: visible;
	animation:fade 0.5s;
}
 .slide-img:hover img{
	transform: scale(1.4);
}
 </style>
</head>
<body>

 