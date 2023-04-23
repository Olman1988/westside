<?php
function ver_mas($texto,$cantidad,$id){
$arr_texto=explode(" ",strip_tags($texto));
if(count($arr_texto)>$cantidad){
$n_texto="";
for($i=0;$i<$cantidad;$i++){
$n_texto.=$arr_texto[$i]." ";
}
$n_texto.="...";
}else{                           

$n_texto=$texto;
}
return $n_texto."</br><button class='badge rounded-pill bg-primary'><a style='text-decoration:none;color:white;' href='".base_url."?pag=blog&&id=$id'>See More</a><i class='fa-solid fa-circle-arrow-right ml-4'></i></button>";
}
?>
<section class='blog' id='blog' style='padding-top:150px;background:whitesmoke;padding-bottom:50px;'>
    
    <div><h1 class='text-center' style="font-family:'Montserrat Alternates'">Our Blog<div class="mx-auto mt-2" style="width:100px;border-bottom: solid 5px #8e3a20"></div></h1></div>
<!--    <div class='text-center mx-auto' style="width:50%;min-width:300px;font-family:'Montserrat Alternates'">Lorem Ipsum is simply dummy text of the printing and typesetting industry.. -->
    </div>
     <div class='blog_container mx-auto slider-blog2 owl-carousel owl-theme' style=''>
           <?php 
               //Connection
               include("config/conexion.php");
               $sql = "select * from blogs order by id DESC";
               $query = $mysqli->query($sql);
               $cont = 1;
               while($row = $query->fetch_assoc()){ 
                  
                   if($cont==1){$activo = "active";}else{$activo = "";}
                   $cont++;
                   $contenido=ver_mas($row['contenido'],30,$row['id']);
                           $date = date_create($row['fecha']);
                            $mes=intval(date_format($date,"m"));
                            $day=date_format($date,"d");
                            $year=date_format($date,"Y");
                            $meses = array("January","February","March","April","May","June","July","August","September","October","November","December");
$dateToWrite= $meses[$mes-1]." ".$day.", ".$year;
               ?>
       
        <div class='blog_container_post mx-auto' style=''>
            <div class='blog_container-imagen mx-auto'><img class='' src="<?=base_url?>/assets/images/blog/<?=$row['imagen']?>" alt="alt"/></div>
            <div class='blog_container-text'>
                <h3><?=$row['autor']?> - <?=$dateToWrite?></h3>
                <h2><?=$row['titulo']?></h2>
                <p><?=$contenido?></p>

            </div>
        </div><!-- comment -->
     <?php
               }
     ?>
        
        
    </div>
    
</section>
<script>
function delete_img(){
    var elemento=document.querySelectorAll(".blog_container-text img");
    console.log(elemento);
    for(let i=0;i<elemento.length;i++){
        elemento[i].remove();
    }
}
delete_img();

    $('.slider-blog2').owlCarousel({
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
</script>

