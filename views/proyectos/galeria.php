<?php
?>
<section id="galerias" style="padding-top:50px;">
    <h1 class=" text-center " style="color:#495057;font-family:'Montserrat Alternates';">Proyectos<div class="mx-auto mt-2" style="width:100px;border-bottom: solid 5px #dc802f "></div></h1>
<!--            <div class="service_container-text">
                <p class="text-center service_container-info mx-auto mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>-->
    <div class="row mx-auto" style='max-width:90%'>
        <?php 
        
                 //Connection
               include("admin/conn.php");
               $sql = "select * from galerias order by id DESC";
               $query = $mysqli->query($sql);
            
               while($row = $query->fetch_assoc()){ 
             //  tall / wide / tall / wide
                   
        ?>
        <div class='col-lg-4 col-md-6 col-sm-12 mx-auto'>
          <div class="box" style="">
            
            <div class="slide-img">
                <img class="img-fluid" src="<?=base_url?>assets/images/galerias/<?=$row['imagen']?>">
                
                </div>
              <div class="" style='margin-top:-300px;z-index:100;position:absolute;width:90%;'>
                    <div class="p-3" style="color:white;">
                      <h3 class='text-center'  style="font-family:'Poppins' ;font-size:25px;text-shadow:3px 3px #60719a;max-width:100%"><?=$row['titulo']?></h3>
                      <div class="p-3"></div>
                      <a style="text-decoration: none;font-family:'Poiret One'" href="<?=base_url?>?pag=gallery&&id=<?=$row['id']?>" class="room-btn" >Ver</a>
                    </div>
            </div>
         
            </div>
            
        </div>
       <?php 
                   }
       ?>
        
      
      
        
   
    </div>
</section>

