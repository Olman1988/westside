<?php
?>
<?php
?>
<html lang='es'>
<head>  
   
<title>Westside Home Inspections</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,user scalable=no, initial-scale=1.0, maximun-scale=1.0">
  <meta name="description" content="WestSide Home Inspection">
<meta name="keywords" content="Home,Inspection,Home Inspection">
<link rel="icon" href="<?=base_url?>assets/images/general/icono.png">

  <!--JQUERY-->

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
					<!-- Include Unite Gallery core files -->
		<script src='<?=base_url?>unitegallery/js/unitegallery.min.js' type='text/javascript'  ></script>
				<link  href='<?=base_url?>unitegallery/css/unite-gallery.css' rel='stylesheet' type='text/css' />
				
				<!-- include Unite Gallery Theme Files -->
				
				<script src='<?=base_url?>unitegallery/themes/tiles/ug-theme-tiles.js' type='text/javascript'></script>
<!--LOADER-->
      <script>    
    
    $(window).on("load",function(){
$("#preloader").fadeOut("slow");
$("#cont").removeAttr('style');
$("#navbr").fadeIn("slow");
$("#navbr").addClass("fixed-top");

}); 
</script>

<!--CARGA ICONOS-->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;900&family=Poppins:wght@400;500;600;700&family=Mukta:wght@200;400;500;700&family=Montserrat+Alternates:wght@200&family=Ubuntu:wght@400;500;700&family=Poiret+One:wght@400;500;700&display=swap');

  /**LOADER**/
  
  #preloader{
position:fixed;
top:0;
left:0;
right:0;
bottom:0;
background:white;
z-index:100;
}
#loader{
width:300px;
height:300px;
position:absolute;
top:50%;
left:50%;
margin-left:-150px;
margin-top:-100px;
}
#loader img{
width:100%;
}
    /*NAVBAR*/
 .navbr{
   
    min-height:80px;
    font-family: 'Poppins', 'sans-serif';
    font-size: 14px;
    transition:all 0.3s ease;
    max-width:100%;
 margin-right:0;
 max-height:120px;
 background-color:rgba(255,255,255,0.9);

}
.navbar-toggler{
   
}

.navbr .navbar-brand{
    margin-left:15px;
    font-size: 15px;
    font-weight: bold;
    
}


.navbr #logo{
    
    
    max-height: 120px;   
    
    }
   
   .navbr ul li{
        padding: 10px 27px;
        transition: all 0.3s ease;
        margin:auto;
        margin-left: 0px;  
        
        color:rgba(220,128,47,1);
letter-spacing: 2px;     
font-weight:500;
text-align:center;
font-size:14px;
margin:auto;
    } 
     .navbr ul{
max-width:100%;
display:flex;
justify-content: space-around;
border-left:solid 2px #dc802f;
border-right:solid 2px #dc802f;

    } 
    .navbr ul li a{
   color:#dc802f !important;
 transition:all 0.3s ease;
    } 
   .navbr ul li:hover{
        
       
      
    }
    .navbr ul li a:hover {
        transform:scale(1.2);
       border-bottom: solid 2px #8e3a20;
        
    }
    
   
    .sticky{
        
     background-color:rgba(97,126,81,0.7);
    }
    .sticky ul li a{
        
     color:white !important;
    }
    .sticky ul li:hover{
        
       background:white;

    }
    
    .sticky ul li a:hover{
        
     color:#617e51 !important;
    }
    
    
    
      /*SLIDER*/
 .slider{
     position:relative;
     background:gray;
     height:auto;
   
 }
 
 .myslider{
     position:relative;
     height:80vh;
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
     text-decoration:none;
 }
 
 
 
 .slider .p_n .prev:hover,.slider .p_n .next:hover{
     color:#dc802f;
    
 }
 .next{
     right:0;
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
        height:400px;
         background:white;
}
.box .slide-img img{
	
	height: 400px;
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


 .slide-img:hover img{
	transform: scale(1.4);
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
     background:#dc802f;
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
     
     width:80%;
     
     margin-left:60px;
     font-size:40px;
     letter-spacing: 2px;
     line-height: 40px;
 color:white;
     font-weight:900;
     overflow:hidden;
     
     
 }

.txt_slider h1:hover {
  background-position-y: 100%;
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
     font-size:23px;
     line-height:2.2rem;
 
     font-family:'Poppins';
     
 }
 .slider_title-line{
     margin-left:80px;
     background:#8e3a20;
     width:60px;height:4px;
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
background-size: 1950px 850px;
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
 
 /*****************BUTTONS*****************/
    .box_w{
    z-index:50;
position: fixed;left: 30px;bottom: 20px;
display:none;
  cursor:pointer;
}
.box_scroll{
    display:none;
    z-index:50;
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
    background-color: rgba(142,58,32,0.9);
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
 .btn_general_style_princ{
         cursor:pointer;font-family:'Poiret One';
         text-align:center;padding:20px;
         color:white;
         background:#dc802f;
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
       background-image:linear-gradient(rgba(220,128,47,0.7),rgba(220,128,47,0.7)),url(./assets/images/slider/slide3.jpg);background-repeat: no-repeat;background-size:100% 100%;background-attachment:fixed;position:relative;

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
.about_us-qualifications-text{
   font-family:'Poppins';
   font-size:20px;
   list-style:none
}
.about_us-qualifications-text ul{
   
   list-style:none
}
.about_us-qualifications-text ul i{
   
  margin-right:10px;
}
.txtmet{
    position:relative;
}
 
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
    width:500px;
     height:700px;
     
     position:relative;top:20px;left:20px;
 }
 .aboutUs_image_container .aboutUs_image_container-img-first{
    width:500px;
     height:600px;
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
   width:240px;
   float:right;
   margin-top:100px;color:#495057;font-family:'Montserrat Alternates';
   text-align: right;
 }
 .aboutUs_title::after{
   content:'';
   position:absolute;
   width:80px;
   background:#8e3a20;
   height:3px;
   top:50%;
   right:-90px;
   
 }
  .aboutUs_title::before{
   content:'';
   position:absolute;
   width:80px;
   background:#8e3a20;
   height:3px;
   top:50%;
   left:-45px;
   
 }
 .aboutUs_title-info{
     padding-top: 50px;
 }
 .aboutUs_text{
         float:right;
  
     font-size:20px;
     line-height:2.2rem;
     font-weight:900; 
     font-family: 'Montserrat Alternates';
     
}
.img-hire{
    display:block;
}
 .img-hire-up{
        display:none;
    }
     .container-card{
         padding-top:100px;
     }
     
     .card-team{
        max-width:400px;
        min-width:300px;
        height:490px;
        border-radius:10px;
         box-shadow: 5px 5px 10px #696969;
         overflow:hidden;
         position:relative;
          cursor:pointer;
          margin-bottom:50px;
          
          background:white;
    }
    .card-team .card-team_circle {
        position:absolute;
        top:-190px;
        left:50%;
        transform:translateX(-50%);
        width:500px;
        height:500px;
        clip-path:circle();
        
    }
     .card-team .card-team_circle::before {
     content:'';
     position:absolute;
     top:-8px;
     left:-16px;
     width:100%;
         height:100%;
         border-radius:50%;
         z-index:1;
         pointer-event:none;
         box-shadow: 0 0 0 20px  rgba(220,128,47,0.8);
         
        
    }
   .card-team .card-team_circle .card-team_imgbox{
       position:absolute;
       left:50%;
           bottom:0;
       height:310px;
        width:400px;
        margin-top:100px;
        transform:translateX(-50%);
        
    }
    .card-team .card-team_imgbox img{
       
        position:absolute;
        top:0;
        left:0;
        object-fit:cover;
        width:100%;
        height:350px;
        transition:all 0.5s;
    }
    .card-team:hover .card-team_imgbox img{
    transform:scale(1.2);
   
    }
    .card-team .card-team_text{
        width:350px;
       position:absolute;
    bottom:40px;
    left:50%;
    transform:translateX(-50%);
    text-align:center;
    
    }
      .card-team .card-team_text h2 div{
     width:200px;
     border-bottom: solid 5px #617e51;
    
    }
    
    .card-team_text_socialMedia{
        width:60%;
        display:flex;
        justify-content:space-around;
        margin:auto;
    }
     .card-team_text_socialMedia i{
       font-size:30px;
       background:#ceaf78;
       color:white;
       border-radius:50%;
       border: solid 2px #ceaf78;
       padding:5px;
       width:40px;
       height:40px;
    }     
    .principal_equipo-title h1{
         color:#08445c
     }
      .line-background_team{
         margin-bottom:-38px;background:#ceaf78;height:24px;width:220px;
     }
     .text-team{
        padding: 0px 40px;
         font-size:20px;
         font-family:'Poppins';
         font-weight:400;
     }
/*******SERVICE*******/

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
#service{
  padding-bottom:50px;  
}
.title_services{
  color:#495057;font-family:'Montserrat Alternates';  
  
} 
.service_container-info{
    width:80%;
    max-width:1000px;
    font-family: 'Montserrat Alternates';
    font-size:20px;
    font-weight: 900;
}
.service_items{
    width:90%;
    position:relative;
}
.service_container_items{
    position:relative;
    height:350px;
    background:none;
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
    height:350px;
}
.service_item-over{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:350px;
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
  background:#8e3a20 !important;
  font-size:15px;
}
.service_item2-text{
    position:absolute;
    left:50%;
    bottom:5px;
    background:#dc802f;
    border-radius:15px;
    transform:translate(-50%,-5px);
    padding:15px;
    width:130px !important;
    height:50px;
    color:white;

}
.service_item2-over{
    position:absolute;
    top:0;
    right:-100%;
    width:100%;
    height:350px;
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
    width:80%;height:10px;background:#8e3a20;
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
   background:#8e3a20;
   height:3px;
   top:50%;
   
 }
  .projects_title::before{
   content:'';
   position:absolute;
   width:80px;
   background:#8e3a20;
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
         background:#dc802f;
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
.grid_fake .galery-text p{
    display:none;
}
.content-img{
    background-size: 500px 100%;
    background-position: center;
    height:500px;
    width:90%;
        max-width:500px;
    
}

/*************PROYECTS_***************/
.text_projects-principal{
    text-shadow: 5px 10px #dc802f;font-size:100px;font-weight:700;font-family:'Montserrat Alternates';color:white;position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);
}
.principal_projects{
    height:80vh;background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(assets/images/aboutUs/aerial-view-of-business-team.jpg);background-repeat:no-repeat;background-position:center top;
    background-size:1950px 750px;background-attachment:fixed;position:relative;
}

.search_FAQ2{
    text-align:center;
   font-weight:700;font-family:'Montserrat Alternates';color:white;position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);
}
 /**OUR COSTUMERS**/
 .ourCostumer{

 } 
 .ourCostumer_header{
background:white;
 height:50vh;   
 }
  .ourCostumer_title-container{
     position:relative;height:auto;
     padding-top:50px;
     
 }
    .ourCostumer_title{
   
   width:440px;
 margin:auto;
   
   text-align: right;
  z-index:2;
   color:#495057;
font-family:'Montserrat Alternates';

  
 }
 .ourCostumer_title-background{
height:24px;
width:440px;
background:#ceaf78;
margin:auto;
margin-bottom:-37px;
 }
 .ourCostumer_image-container{
     width:90%;
     min-width:300px;
 }
 .ourCostumer_image{
     
 }
 .ourCostumer_text{
         font-family: 'Montserrat Alternates';
    font-size: 20px;
    padding-top:50px;width:60%;
    font-weight:900;
   
 }
 .slider-ourCostumers{
 max-height:250px;
 overflow:hidden;
 }
 .ourCostumer_image-img{
     width:300px;
     height:300px;
     margin:auto;
 }
  .ourCostumer_image-img img{
     height:180px;
     width:100%;object-fit:contain 
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
  color:#1e2d3c;
    
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
   background:#869791; 
}
.dotsbox{
    width:250px;
}   
.owl-stage-outer{
 padding-bottom:50px;   
}

 /**BLOG**/
 .blog 
 .blog_container{
     padding-top:50px;width:80%;min-width:350px;
 }
 .blog_container_post{
  height:600px;
  margin:auto;
  width:400px;
 }
 .blog_container-imagen{
     width:350px;
     height:350px;
 }
  .blog_container-imagen img{
     object-fit: cover;
     width:100%;
     height:100%;
 }
 .blog_container-text{
     width:350px;
     margin:auto;
     position:relative;
     padding-bottom:50px;
     max-height:290px;
     min-height:290px;
     font-family:'Poppins';
 }
 .blog_container-text h3{
     font-family:'Poppins';
     font-size:15px;
     color:#8e3a20;
     margin-top:15px;
 }
  .blog_container-text h2{
     
     font-size:25px;
     
     margin-top:5px;
 }
  .blog_container-text p{
font-family:'Poppins';
color:#869791;
   font-size:15px;
 }
 .badge{
     background:#dc802f !important;
         color:white;
         border:solid 1px #ceaf78 !important; 
         position:absolute;
         bottom:10px;
         left:10px;
         font-size:17px;
         text-align:center; 
         font-family:'Poppins';
 } 
 
  /***FOOTER***/
  .site-footer{
      background:#dc802f;
      height:auto;
      min-height:70px;
  }
 .site-footer__bottom{
   width:90%;padding-top:80px;   
 }

 .content_icon_contact-icon i{
    font-size:22px; background:rgba(220,128,47,1);
    color:white;
    padding:15px;
    
            transition: all ease 0.3s;
            cursor:pointer;
           

}
.content_icon_contact-icon i:hover{
    border:solid 1px #041c5c;
   background:white;color:#ceaf78;
   transform:scale(1.1);
}
.footer-contact{
    margin-left:70px;padding-left:0px;
    margin-bottom:10px;
}
.footer-contact-container{
    min-width:180px;color:white;display:flex;justify-content: space-between;float:left;
}
.footer-contact-container i{font-size:19px;padding:15px;background:#dc802f;color:white;}
.footer-contact-container div{
    margin-left:15px;font-family:'Poppins';color:#c9c9c9;font-size:15px;margin-top:15px;
}
.img-footer{
    width:200px;
    
}

.social_media-container{
    float:right;width:300px;min-width:300px;
}
.container_acercade {
    color:white;
    
}
.container_acercade p{
    font-family:'Poppins';color:#c9c9c9;font-size:15px;padding-right:100px;
}
.container_menu h5{
    color:white;
}
.container_menu {
    
    font-size:20px;
}

.list-icon{
    list-style: none;
}
.list-icon li {
    text-decoration: none;
}
.list-icon li a{
    color:gray;
}
.list-icon li a span{
    margin-left:10px;
}

.mail-form{
     font-family:'Poppins';color:#c9c9c9;font-size:15px;margin-top:15px;
 }
/**TESTIMONIALS**/
.gradient-custom {
  background: radial-gradient(50% 123.47% at 50% 50%, #dc802f  0%, #8e3a20 100%),
    linear-gradient(121.28deg, #dc802f 0%, #8e3a20 100%),
    linear-gradient(360deg, #8e3a20 0%, #dc802f 100%),
    radial-gradient(100% 164.72% at 100% 100%, #8e3a20 0%, #8e3a20 100%),
    radial-gradient(100% 148.07% at 0% 0%, #8e3a20 0%, #51d500 100%);
  background-blend-mode: screen, color-dodge, overlay, difference, normal;
}
.carousel-indicators {
  border-radius: 50%;
  width: 10px;
  height: 10px;
}
.carousel-item-testimonials{
    max-width:95%;margin:auto;
}

.slide-testimonials{
max-width:90%;margin:auto;
}
   

.contact-info li{
   font-size:18px; 
}
@media(max-width: 1600px){
     .home{
   
background-size: 1550px 600px;
}
 .info_text{
  
     font-size:19px;
  
     
 }
.about_us-objectives{
   background-size:1500px 100%;
}

  .card-team{
        max-width:350px;
        margin-top:100px;
    }
    .text-team{
       
         font-size:17px;
        
     }
}
@media(max-width:1400px){
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

}
@media (min-width: 1000px){
         .navbr{
 
 max-height:1000px;
 
}
    .navbar-expand-custom {
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-custom .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-custom .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-custom .nav-link {
        padding-right: .5rem;
        padding-left: .5rem;
    }
    .navbar-expand-custom > .container {
        flex-wrap: nowrap;
    }
    .navbar-expand-custom .navbar-collapse {
        display: flex!important;
        flex-basis: auto;
    }
    .navbar-expand-custom .navbar-toggler {
        display: none;
    }
}


@media(min-width:1001px){
    .wide {
    grid-column: span 2;
    
  }

  .tall {
    grid-row: span 2;
  }  
}

@media (max-width:1290px){
    .grid_fake{
        display:none;
    }
}
@media (max-width: 1200px) {
     .navbr{
 
 max-height:1000px;
 
}
}
@media (max-width: 1125px) {
 .aboutUs_title{
   float:none;
   position:relative;
   width:220px;
   font-size:25px;
   
 }
 .aboutUs_title::after{
   
   width:40px;
   right:-45px;
   
 }
  .aboutUs_title::before{

   width:60px;
 
   left:35px;
   
 }
 .aboutUs_text{
        
   width:300px;
     font-size:18px;
   
     
}
 .aboutUs_title-info{
     margin-top:100px;
 }
 .title_services{
  
  font-size: 25px;
} 
.service_container-info{
     font-size:18px;
    font-weight: 900;
}
.contact-button{
    display:block;
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
   width:55px;
   
 }
  .projects_title::before{
  width:55px;
 
   left:-25px;
   
 }
 .projects_text{
        
   width:300px;
     font-size:18px;
     
}
  .ourCostumer_title{
 
   font-size:25px;
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
    @media(min-width:1001px){
        
 
    .wide {
    grid-column: span 2;
    
  }

  .tall {
    grid-row: span 2;
  }  
}
    
@media (max-width: 1000px) {
           .container_menu {
    
    font-size:18px;
}
    .navbr ul li{
       
font-size:18px;

    } 

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
     font-family:'Montserrat Alternates';
    
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
     margin-top:0px;
 }
 .aboutUs_title::after{
   
   width:30px;
   
   
 }
  .aboutUs_title::before{

   width:30px;

   
 }
 .contact-button{
    display:none;
}
  .wide {
    grid-column: span 2;
    grid-row: span 1;
  }

  .tall {
    grid-column: span 2;
    grid-row: span 1;
  }
  .site-footer__bottom{
  padding-top:20px;   
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
.testimonials_title-text{
padding-top:50px;width:60%;color:black;
}
.galery-text h3{
  width:100%;
  
}
.galery-text p{
  width:100%;
}

 
} 
@media (max-width:800px){
    
    .text_projects-principal{
    font-size:50px
    }
    .info_text{
  
 
     font-family:'Montserrat Alternates';
    
 
 }
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
   
   .container_aboutUs{
         width:100%;
         
     }
	.principal_projects{
    height:80vh;
    background-size:1650px 750px;background-attachment:fixed;position:relative;
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
.testimonials{
background-size:1000px 100%;

}
.testimonials_title-text{
width:90%;
}
.contact{
background-size:1000px 100%;

}
.blog_container{
    width:95%;
}
 .principal_aboutUs{
background-position:center;
background-size:1000px 100%;


 }
  .ourCostumer_header{
  
background-size:1000px 100%;
 
 }
   .principal_service{
  
background-size:1000px 100%;
 
 }
 .img-footer{
    display:block;
    
}
}
@media (max-width:991px){
    .img-hire{
        display:none;
    }
    .img-hire-up{
        display:block;
    }
}
@media (max-width:700px){
      .principal_aboutUs-title h1{
      
         font-size:50px;
     }
      .line-background_aboutUs{
         margin-bottom:-45px;background:#ceaf78;height:30px;width:240px;
     }
     .container_acercade {
    text-align: center;
}
.container_acercade p{
   padding-right:0px;
   text-align:center;
}
.container_menu h5{
    padding-top:50px;
    text-align:center;
}
.social_media-container{
    margin-top:50px;
}
.secondary_aboutUs-title h1{
      
         font-size:35px;
         margin-top:-30px;
         
     }
      .secondary_line-background_aboutUs{
         margin-top:-80px;
         height:19px;width:270px;
     } 
     .container_service{
         margin-top:-100px;
     }
     .contact-info li{
   font-size:16px; 
}
}
@media (max-width:600px){
    
    .text_projects-principal{
    font-size:40px
    }
}
@media(max-width:500px){   
    
    .contact_title{
   
   width:340px;

   text-align: center;
 font-size:30px;

 }
 .contact_title-background{
height:18px;
width:260px;

margin-bottom:-27px;
 }
 .slider-ourCostumers{
 max-height:200px;

 }
     .blog_datos{
font-size:13px;
}
.navbr #logo{
    
    
    max-height: 100px;   
    
    }
.aboutUs_title-container{
margin-top: 200px;
}
 .aboutUs_title{
 
   width:270px;
  
  
   
 }
  .aboutUs_title-background{
height:20px;
width:170px;
background:#ceaf78;
float:none;
position:absolute;
left:50%;
top:11px;
z-index:1;
transform:translateX(-50%);
 }
    .aboutUs_text-secondary{
   
    width:300px;
}
    
    .aboutUs_image{
        padding-right: 0px;
    padding-left: 0px;
    }
          .aboutUs_image_container{
    width:350px;
     height:500px;
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
     .ourCostumer_title{
   
   width:300px;


  
 }
  .slider-testimonials-card{

max-width:300px;

 }
 .ourCostumer_image-container{
     width:100%;
    
 }
 .ourCostumer_title-background{

width:240px;

 }
      .ourCostumer_title{
   
   width:300px;


  
 }
 
 .contact_image-container{
     width:100%;
    
 }
 .contact_title-background{

width:240px;

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
 .blog_container_post{
  
  width:350px;
 }
  .mail-form{
     margin-left:5px;font-size:12px;
 }
}
@media(max-width:420px){
    .secondary_aboutUs-title h1{
      
         font-size:30px;
         margin-top:-25px;
         
     }
      .secondary_line-background_aboutUs{
         margin-top:-70px;
         height:13px;width:230px;
     } 
     .container_service{
         margin-top:-100px;
     }
        .contact_title{
   
   width:240px;


 }
 .contact_title-background{
height:18px;
width:260px;

margin-bottom:-27px;
 }
 .contact-info li{
   font-size:15px; 
}
}


/* 14. blog styles
*/
.blog-one {
  padding-top: 120px;
  padding-bottom: 120px;
}
.blog-one__single {
  margin-bottom: 30px;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.blog-one__single:hover {
  -webkit-box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.05);
          box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.05);
}
.blog-one__single:hover .blog-one__image > img {
  opacity: 0.6;
}
.blog-one__single:hover .blog-one__plus {
  opacity: 1;
  -webkit-transform: perspective(20px) translateZ(0px) translate(-50%, -50%);
          transform: perspective(20px) translateZ(0px) translate(-50%, -50%);
}
.blog-one__plus {
  font-size: 46px;
  color: #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: perspective(20px) translateZ(10px) translate(-50%, -50%);
          transform: perspective(20px) translateZ(10px) translate(-50%, -50%);
  -webkit-transition: opacity .4s ease, color .3s ease, -webkit-transform .3s ease;
  transition: opacity .4s ease, color .3s ease, -webkit-transform .3s ease;
  transition: opacity .4s ease, transform .3s ease, color .3s ease;
  transition: opacity .4s ease, transform .3s ease, color .3s ease, -webkit-transform .3s ease;
}
.blog-one__plus:hover {
  color: #4a6de1;
}
.blog-one__image {
  background-color: #012237;
  position: relative;
  overflow: hidden;
}
.blog-one__image > img {
  width: 100%;
  opacity: 1;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.blog-one__content {
  padding: 0 42px;
  padding-top: 50px;
  padding-bottom: 40px;
  border-style: solid;
  border-width: 2px;
  border-color: #f1f1f1;
  background-color: white;
}
.blog-one__meta {
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
  margin-bottom: 30px;
}
.blog-one__meta a {
  width: 40px;
  height: 40px;
  background-color: #f1f1f1;
  border-radius: 50%;
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
  position: relative;
}
.blog-one__meta a:before {
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 1px solid #f1f1f1;
  left: -5px;
  top: 0;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
  z-index: 9;
}
.blog-one__meta a:after {
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #f1f1f1;
  left: 0px;
  top: 0;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
  z-index: 10;
}
.blog-one__meta a + a {
  margin-left: 15px;
}
.blog-one__meta a:hover {
  background-color: #4a6de1;
  color: #fff;
}
.blog-one__meta a:hover i {
  color: #fff;
}
.blog-one__meta a:hover:before {
  left: 0;
  border-color: #4a6de1;
}
.blog-one__meta a:hover:after {
  background-color: #4a6de1;
}
.blog-one__meta a i {
  font-size: 16px;
  color: #81868a;
  position: relative;
  z-index: 11;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.blog-one__title {
  font-size: 30px;
  font-weight: bold;
  color: #012237;
  margin-bottom: 38px;
}
.blog-one__title a {
  color: inherit;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.blog-one__title a:hover {
  color: #4a6de1;
}
.blog-one__text {
  font-size: 16px;
  line-height: 34px;
  color: #81868a;
  font-weight: 500;
  margin: 0;
  margin-bottom: 30px;
}
.blog-one__link {
  font-size: 12px;
  color: #012237;
  text-transform: uppercase;
  letter-spacing: .2em;
  font-weight: bold;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
  line-height: 1em;
}
.blog-one__link:hover {
  color: #4a6de1;
}
.blog-one .post-pagination {
  margin-top: 30px;
}
.blog-one__home-two {
  padding-bottom: 90px;
}

.blog-details {
  padding: 120px 0;
}
.blog-details .blog-one__single {
  margin-bottom: 0;
}
.blog-details .blog-one__title {
  font-size: 50px;
  margin-bottom: 28px;
}
.blog-details .blog-one__text {
  margin-bottom: 0;
}
.blog-details .blog-one__text + .blog-one__text {
  margin-top: 30px;
}
.blog-details__content-title {
  margin: 0;
  color: #012237;
  font-size: 30px;
  font-weight: 600;
  margin-bottom: 40px;
}
.blog-details .share-block {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding-top: 40px;
  padding-bottom: 40px;
  padding-left: 50px;
  padding-right: 50px;
  border: 2px solid #f1f1f1;
  border-top: 0;
}
.blog-details .share-block .left-block p {
  margin: 0;
  color: #012237;
  font-size: 16px;
  font-weight: 600;
}
.blog-details .share-block .left-block p a {
  color: #4a6de1;
  font-size: 16px;
  font-weight: 500;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
  margin-left: 5px;
  letter-spacing: 0;
}
.blog-details .share-block .left-block p a:hover {
  color: #012237;
}
.blog-details .share-block .social-block {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.blog-details .share-block .social-block a {
  display: inline-block;
  vertical-align: middle;
  text-align: center;
  color: #81868a;
  font-size: 18px;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.blog-details .share-block .social-block a + a {
  margin-left: 38px;
}
.blog-details .share-block .social-block a:hover {
  color: #4a6de1;
}
.blog-details__author {
  border: 2px solid #f1f1f1;
  padding: 60px 60px;
  margin-top: 50px;
  margin-bottom: 60px;
}
.blog-details__author-image, .blog-details__author-content {
  display: table-cell;
  vertical-align: top;
}
.blog-details__author-image {
  width: 169px;
}
.blog-details__author-image > img {
  width: 100%;
}
.blog-details__author-content {
  padding-left: 40px;
}
.blog-details__author-content h3,
.blog-details__author-content p {
  margin: 0;
}
.blog-details__author-content h3 {
  color: #012237;
  font-size: 22px;
  margin-bottom: 20px;
  font-weight: 600;
}
.blog-details__author-content p {
  font-size: 16px;
  line-height: 30px;
  color: #81868a;
  margin-bottom: 0px;
}
.blog-details__author-content a {
  font-size: 16px;
  font-weight: 500;
  color: #4a6de1;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.blog-details__author-content a:hover {
  color: #012237;
}

/* 16. sidebar styles
*/
@media (max-width: 991px) {
  .sidebar {
    margin-top: 50px;
  }
}
.sidebar__title {
  margin: 0;
  color: #012237;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 30px;
}
.sidebar__single:not(.sidebar__search) {
  padding: 50px;
  background-color: #f1f1f1;
}
.sidebar__single + .sidebar__single {
  margin-top: 30px;
}
.sidebar__post__single + .sidebar__post__single {
  margin-top: 30px;
}
.sidebar__post-image, .sidebar__post-content {
  display: table-cell;
  vertical-align: middle;
}
.sidebar__post-image {
  width: 60px;
}
.sidebar__post-image .inner-block {
  width: 100%;
}
.sidebar__post-image .inner-block > img {
  width: 100%;
}
.sidebar__post-content {
  padding-left: 20px;
}
.sidebar__post-title {
  margin: 0;
  font-size: 16px;
  line-height: 26px;
  font-weight: 500;
  color: #012237;
}
.sidebar__post-title a {
  color: #012237;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.sidebar__post-title a:hover {
  color: #012237;
}
.sidebar__category-list {
  margin: 0;
  padding: 0;
  list-style: none;
}
.sidebar__category-list-item {
  line-height: 1em;
}
.sidebar__category-list-item a {
  color: #7B7F85;
  font-size: 16px;
  font-weight: 500;
  display: block;
  position: relative;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.sidebar__category-list-item a:before {
  content: '\f105';
  font-family: 'Font Awesome 5 Free';
  color: #012237;
  font-weight: 900;
  font-size: 14px;
  position: absolute;
  top: 50%;
  right: 0;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.sidebar__category-list-item a:hover {
  color: #012237;
}
.sidebar__category-list-item + .sidebar__category-list-item {
  margin-top: 27px;
}
.sidebar__tags-list {
  margin: 0;
  padding: 0;
  list-style: none;
  margin-top: -10px;
}
.sidebar__tags-list-item {
  display: inline-block;
  vertical-align: middle;
  line-height: 1em;
}
.sidebar__tags-list-item a {
  display: block;
  color: #7B7F85;
  font-size: 16px;
  font-weight: 500;
  line-height: 1em;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.sidebar__tags-list-item a:hover {
  color: #012237;
}
.sidebar__search-form {
  width: 100%;
  height: 79px;
  background-color: #f1f1f1;
  position: relative;
}
.sidebar__search-form input {
  width: 100%;
  height: 100%;
  background-color: transparent;
  border: none;
  outline: none;
  color: #81868a;
  padding-left: 40px;
  padding-right: 40px;
}
.sidebar__search-form input::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #81868a;
}
.sidebar__search-form input::-moz-placeholder {
  /* Firefox 19+ */
  color: #81868a;
}
.sidebar__search-form input:-ms-input-placeholder {
  /* IE 10+ */
  color: #81868a;
}
.sidebar__search-form input:-moz-placeholder {
  /* Firefox 18- */
  color: #81868a;
}
.sidebar__search-form button[type=submit] {
  width: 41px;
  height: 41px;
  border-radius: 50%;
  background-color: #4a6de1;
  border: none;
  outline: none;
  position: absolute;
  top: 50%;
  right: 40px;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  cursor: pointer;
  padding: 0;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.sidebar__search-form button[type=submit] i {
  font-size: 14px;
  color: #fff;
  line-height: 41px;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.sidebar__search-form button[type=submit]:before {
  content: '';
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 1px solid #4a6de1;
  position: absolute;
  left: -5px;
  top: 0;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.sidebar__search-form button[type=submit]:hover:before {
  left: 0;
}


/**********PRICING*************/

    :root{
    --g-color1: #dc802f;
    --g-color2: #FFCC68;
}
.pricingTable{
    background: linear-gradient(to left bottom,var(--g-color1),var(--g-color2));
    font-family: 'Poppins', sans-serif;
    padding: 40px 0 35px;
    border-radius: 50px;
    box-shadow: 0 0 15px -2px rgba(0,0,0,0.2);
}
.pricingTable .pricingTable-header{
    color: #fff;
    text-align: left;
    padding: 10px;
    margin: 0 0 25px;
}
.pricingTable .title{
    color: var(--g-color1);
    background-color: #fff;
    
    font-weight: 400;
    text-transform: uppercase;
    font-size:14px;height:50px;
    padding:15px;
    margin-top: 0;
    border-radius: 50px 0 0 50px;
}
.pricingTable .price-value{
    text-align: center;
    display: inline-block;
}
.pricingTable .price-value .currency{
    font-size: 23px;
    line-height: 23px;
    vertical-align: top;
    display: inline-block;
}
.pricingTable .price-value .amount{
    font-size: 75px;
    font-weight: 500;
    line-height: 58px;
    display: inline-block;
}
.pricingTable .duration{
    font-size: 15px;
    font-weight: 400;
    letter-spacing: 2px;
    display: block;
}
.pricingTable .pricing-content{
    text-align: left;
    padding: 0 15px 0 35px;
    margin: 0 0 25px;
    list-style: none;
    display: inline-block;
}
.pricingTable .pricing-content li{
    color: #fff;
    font-size: 20px;
    font-weight: 300;
    line-height: 35px;
    letter-spacing: 0.5px;
    padding: 0 15px 0 40px;
    margin: 0 0 10px;
    position: relative;
}
.pricingTable .pricing-content li:last-child{ margin: 0; }
.pricingTable .pricing-content li:before{
    content: "\f00c";
    color: #fff;
    background-color: rgba(255,255,255,0.2);
    font-family: "Font Awesome 5 free";
    font-size: 17px;
    font-weight: 900;
    text-align: center;
    line-height: 31px;
    height: 30px;
    width: 30px;
    border-radius: 50%;
    position: absolute;
    top: 3px;
    left: 0;
}
.pricingTable .pricing-content li.disable:before{
    content: "\f00d";
    color: rgba(255,255,255,0.6);
}
.pricingTable .pricingTable-signup a{
    color: var(--g-color2);
    background-color: #fff;
    font-size: 22px;
    font-weight: 400;
    text-align: center;
    letter-spacing: 0.5px;
    text-transform: capitalize;
    padding: 5px 18px;
    margin: 0 35px;
    border-radius: 50px;
    display: block;
    transition: all 0.3s;
}
.pricingTable .pricingTable-signup a:hover{
    color: var(--g-color1);
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
}
.pricingTable.green{
    --g-color1: #98C944;
    --g-color2: #E8CC88;
}
.pricingTable.blue{
    --g-color1: #54B2E5;
    --g-color2: #F67AA6;
}

@media only screen and (max-width: 990px){
    .pricingTable{ margin: 0 0 40px; }
}
table tr td{
    text-align:center;
    color:white;
}

@media(max-width:1202px){
    .pricingTable .title{
   height:70px;
   display: flex;
  align-items: center;
    
}
}
@media(max-width:702px){
    .pricingTable .title{
   height:100px;
    
}
}
</style>

   