<?php

?>
<!--SLIDER-->
    <div id="sliderI" class="slider">
          <?php 
               //Connection
               include("config/conexion.php");
               $sql = "select * from sliders order by id DESC";
               $query = $mysqli->query($sql);
               $contSlider = 0;
               while($row = $query->fetch_assoc()){ 
                   $contSlider++;
               ?>
        <div class="myslider fdd" style="display:block">
            <div class="image_slider home" style="background-image:url(assets/images/slider/<?=$row['imagen'] ?>);"></div>
                    <div class="txt_slider" style="margin-bottom:50px">
                        <div class="div_slider">  
                            <h1 class="animate__animated" ><?=$row['titulo'] ?></h1>
                            
                                                        <div class="slider_title-line" style=''></div>


<!--                    <p class="info_text animate__animated animate__fadeInUp" id=""><?=$row['texto'] ?><br><br></p>-->
<!--Así como cada faro emite una señal lumínica única para que los navegantes sepan donde está tierra firme, RH Mentor direcciona en procesos las empresas en procura del bienestar organizacional.-->
                    <div class="slider_container-buttons" style=''>
                             
                        <a class='href_contact' style='text-decoration: none' href="<?=base_url?>?pag=contact"><div class='animate__animated animate__fadeInUp btn_general_style_sec' style="margin-top:50px;">Contact Us</div>   </a>            
                    </div>
                    <!--  <img class="animate__animated animate__fadeInRight animate__delay-1s" style="" src="<?=base_url?>images/productos/varios2.png"> --> 
                    
                        </div>
            </div>
            
        </div>
    
   
     <?php }//while ?>
        
     
        <div class="p_n">
        <a class="prev" onclick="plusSlides(-1)">&#10094</a>
        <a class="next" onclick="plusSlides(1)">&#10095</a>
        </div>
        <div class="dotsbox" style="text-align:center">
            <?php
           
            if($contSlider>0){
                for($i=0;$i<$contSlider;$i++){
            ?>
             <span class="dot" onclick="currentSlide(<?=$i+1?>)"></span>
             
             <?php
                }
            }
             ?>
       
        </div>    
    </div>
<script>
    const myslide=document.querySelectorAll('.myslider');
const text=document.querySelectorAll('.txt_slider');
dot = document.querySelectorAll('.dot');
let counter=1;
slidefun(counter);
let timer=setInterval(autoslide,15000);
function autoslide(){
    counter+=1;
    slidefun(counter);
}
function plusSlides(n){
    counter+=n;
    slidefun(counter);
    resetTimer();
}


function currentSlide(n){
    counter=n;
    slidefun(counter);
    resetTimer();
    
}
function resetTimer(){
    clearInterval(timer);
    timer=setInterval(autoslide,15000);
}
function slidefun(n){
    let i;
    for(i=0;i<myslide.length;i++){
        myslide[i].style.display="none";
        
    }
    for(i=0;i<dot.length;i++){
        dot[i].classList.remove('actives');
    }
    if(n>myslide.length){
        counter=1;
    }
    if(n<1){
        counter=myslide.length
    }
    myslide[counter-1].style.display='block';
    //myslide[counter-1].img.classList.add='animate_zoomIn';
    myslide[counter-1].firstChild.nextSibling.classList.add('animate__fadeIn');
    text[counter-1].firstChild.nextSibling.classList.add('animate__fadeInLeft');
    dot[counter-1].classList.add('actives');
}

</script>


