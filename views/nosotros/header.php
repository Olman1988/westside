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
    
    
 
 .section_div{
     width: 100%;
     margin:auto;
 }
 
 /*****ABOUT US****/

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
.about_us-objectives{
    margin:auto;
    padding:20px;
    margin-top:50px;
    margin-bottom:50px;
   
       color:white;
       padding:30px;
       background-image:linear-gradient(rgba(60,76,132,0.7),rgba(60,76,132,0.7)),url(../assets/sliders/5imagen1.jpg);background-repeat: no-repeat;background-size:100% 100%;background-attachment:fixed;position:relative;

}
.about_us-objectives-title{
    color:white;
      display: flex;
  align-items: center;
  justify-content: center;
  margin:auto;
  padding:30px;

 
}
.about_us-objectives-title h3{
    font-size:50px;
}
.about_us-objectives-text{
   font-family:'Poppins';
   font-size:20px;
   list-style:none
}
.about_us-objectives-text ul{
   
   list-style:none
}
.about_us-objectives-text ul i{
   
  margin-right:10px;
}
.about-two__text{
    font-family:'Poppins';
 
    
}
.txtmet{
    position:relative;
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
    height:100vh;background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(images/aboutUs/aerial-view-of-business-team.jpg);background-repeat: no-repeat;
    background-size:100% 150%;background-attachment:fixed;position:relative;
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

 