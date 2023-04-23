<?php
?>
        <footer class="site-footer" style="">
           
            <div class="site-footer__bottom row mx-auto" style="">
                <div class="container col-lg-2 col-md-12" style="">
                    <a class="mx-auto" href="<?=base_url?>" style=""><img class="mx-auto img-footer" style="" id="logo" src="<?=base_url?>assets/images/general/logo.jpg" style="min-height:80px;"></a>                    

                  
                    
                </div>
                <div class='container container_acercade col-lg-4 col-md-12' style=''>
                   
                    </div>
                <div class='container container_menu col-lg-4 col-md-12' style=''>
                    <h5>Menu</h5>
                    <ul style='list-style: none;height:100px;width:50%' class='float-left'>
                        <li><i class="fa-solid fa-angle-right mr-3 mt-3" style='color:white'></i><a style="color:white;text-decoration: none;" href="<?=base_url?>?pag=aboutUS">About Us</a></li>
                        <li><i class="fa-solid fa-angle-right mr-3 mt-3" style='color:white'></i><a style="color:white;text-decoration: none;" href="<?=base_url?>?pag=FAQ">FAQ</a></li>
                        <li><i class="fa-solid fa-angle-right mr-3 mt-3" style='color:white'></i><a style="color:white;text-decoration: none;" href="<?=base_url?>?pag=services">Services</a></li>
<!--                        <li><i class="fa-solid fa-angle-right mr-3 mt-3" style='color:white'></i><a style="color:white;text-decoration: none;" href="<?=base_url?>?pag=gallery">Gallery</a></li>-->
                       <li><i class="fa-solid fa-angle-right mr-3 mt-3" style='color:white'></i><a style="color:white;text-decoration: none;" href="<?=base_url?>?pag=gallery&&video=videos">Videos</a></li>
                    </ul>
                        <ul style='list-style: none;height:100px;width:50%' class='float-right'>
                        
                        <li><i class="fa-solid fa-angle-right mr-3 mt-3" style='color:white'></i><a style="color:white;text-decoration: none;" href="<?=base_url?>?pag=contact">Contact Us</a></li>
                         <li><i class="fa-solid fa-angle-right mr-3 mt-3" style='color:white'></i><a style="color:white;text-decoration: none;" href="<?=base_url?>?pag=blog">Blog</a></li>
                    </ul>
                </div>
                
<!--                <div class="container mx-auto col-lg-4" style="padding-top:30px;min-height:30px;padding-bottom:10px">
                    <p class="text-center" style="color:white">&copy; Copyright <?php echo date("Y")?> &copy; <a href="./">Seguridad AngFer</a>&nbsp; Slogan de la empresa</p>
                   
                    
                </div>
                <div class="container col-lg-4 text-center" style="padding-top:10px;padding-bottom:10px">
<a class="mx-auto" href="<?=base_url?>" style=""><img class="mx-auto" style="width:100px" id="logo" src="<?=base_url?>images/principal/RH MENTOR_LOGO-02.png" style="min-height:80px;"></a>                    
                </div>-->
                
            </div>
            <div class="row mx-auto" style='width:90%;padding-top:80px;'>
                <div class="col-lg-2 " style="" >
                                        <div class="footer-contact-container" style=""><i style="" class="fa-solid fa-phone"></i><div style="">(424) 280-4019</div></div>
                </div>
                <div class="col-lg-4" style="">
                                        <div style="color:white;display:flex;justify-content: space-around;float:left;"><i style="font-size:19px;padding:15px;background:#dc802f;color:white;" class="fa-solid fa-envelope"></i><div class='mail-form' style=""> info@westsidehomeinspections.com</div></div>

                </div>
                <div class="col-lg-4">
                     <div class='row mx-auto justify-content-around social_media-container' style=''>
                            
                            <div class='content_icon_contact'>
                                <div class='content_icon_contact-icon mx-auto' >
                                    <a href="https://www.instagram.com/westsidehome.inspections/" target="_blank"><i style="background:#E1306C"  class="fa-brands fa-instagram"></i>  </a>
                                </div>
                               
                            </div>
                             <div class='content_icon_contact'>
                                <div class='content_icon_contact-icon mx-auto'>
                                    <a href="https://www.facebook.com/profile.php?id=100083357799967&mibextid=ZbWKwL" target="_blank"><i style="background:#4267B2" class="fa-brands fa-facebook-f"></i></a>
                                </div>
                               
                            </div>
                            
                            
                            
                        </div>
                </div>
                
            </div>
                        <div class="mx-auto" style='width:80%;margin-top:40px;height:1px;background:#c9c9c9;;'>
</div>
            <div class="container mx-auto col-lg-4" style="padding-top:30px;min-height:30px;padding-bottom:10px">
                    <p class="text-center" style="color:white">&copy; Copyright <?php echo date("Y")?> &copy; <a href="./">Westside Home Inspections Inc.</a></p>
                   
                    
                </div>
            
            <!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->
     
<script>


    $(document).ready(function(){
    
    $(window).scroll(function(){
        let elemento=document.getElementById("sliderI");
        <?php
        if(!isset($_GET['pag'])){
        ?>
        let pos=elemento.getBoundingClientRect().bottom;
        <?php
        } else {
        ?>
        let pos = 10;
        <?php
        }
        ?>
       if(pos<=0){
           
         $('#box_w').css('display','block');
      $('#box_scroll').css('display','block');
        $('#box_w').addClass('animate__bounceIn');
         $('#box_w').removeClass('animate__bounceOut');
         $('#box_scroll').addClass('animate__fadeIn');
         $('#box_scroll').removeClass('animate__fadeOut');
         //$('#logo').attr("src","images/icon/logo FORESTAL Costa Rica-02.png");

       }else{
         
      $('#box_w').removeClass('animate__bounceIn');
      $('#box_w').addClass('animate__bounceOut');
         $('#box_scroll').removeClass('animate__fadeIn');
        $('#box_scroll').addClass('animate__fadeOut');
       // $('#logo').attr("src","images/icon/logo FORESTAL Costa Rica-01.png");
       }     
    });
 $('.navbr ul li a').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });
 $('.href_contact').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });


  $("#js-top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });  
});





 $(document).ready(function(){
     $('.slider-ourCostumers').owlCarousel({
        pagination:true,
       autoplay:true,
       autoplayTimeout: 4000,
       autoplayHoverPause:true,
       loop:true,
       dots:true,
       nav:false,
       center:true,
       
       responsive:{
                0:{
                    items:1
                },
                800:{
                    items:1
                },
                1000:{
                    items:2
                },
                1200:{
                    items:3
                },
                1400:{
                    items:4
                }
      }
   });
   
       $('.slider-testimonials').owlCarousel({
        pagination:true,
       autoplay:true,
       autoplayTimeout: 3000,
       autoplayHoverPause:true,
       loop:true,
       dots:true,
       nav:false,
       center:true,
       
       responsive:{
                0:{
                    items:1
                },
                800:{
                    items:1
                },
                1200:{
                    items:1
                },
                
                1400:{
                    items:2.95
                }
      }
   });
   
    $('.slider-blog').owlCarousel({
        pagination:true,
       autoplay:true,
       autoplayTimeout: 3000,
       autoplayHoverPause:true,
       loop:true,
       dots:true,
       nav:true,
       center:true,
       
       responsive:{
                0:{
                    items:1
                },
                800:{
                    items:1
                },
                1000:{
                    items:2
                },
                1200:{
                    items:2
                },
                1400:{
                    items:3
                }
      }
   });
    });
    
        $('.carousel-inner').owlCarousel({
          autoHeight: true,
    autoHeightClass: 'owl-height',
    items:1,
        pagination:true,
       autoplay:true,
       autoplayTimeout: 4000,
       autoplayHoverPause:true,
       loop:true,
       dots:true,
       nav:false,
       center:true,
       
       responsive:{
                0:{
                    items:1
                },
                800:{
                    items:1
                },
                1200:{
                    items:1
                },
                
                1400:{
                    items:1
                }
      }
   });
    

</script>
</body>
</html>