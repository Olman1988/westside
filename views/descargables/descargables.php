<?php
?>
<section id='services' style="padding-top:150px;background:whitesmoke;padding-bottom:150px;">
            <h1 class=" text-center title_services" style="color:#495057;font-family:'Montserrat Alternates';">DOWNLOADABLE<div class="mx-auto mt-2" style="width:100px;border-bottom: solid 5px #8e3a20"></div></h1>

    <div class="service_container-text">
<!--                <p class="text-center service_container-info mx-auto mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
            </div>
            <div class='row mx-auto'>
          
                <?php 
                include("admin/conn.php");
                $sql = "select * from descargables order by id DESC";
                $query = $mysqli->query($sql);
                while($row = $query->fetch_assoc()){ 
                    $ext = explode(".",strtoupper($row['archivo']));
                ?>
                    <div class="col-lg-3 mx-auto" style="">
                        <div style="margin:15px 5px;">
                    <a style="max-height:300px;overflow:hidden;" href="assets/descargables/<?php echo $row['archivo']?>"><img src="assets/descargables/<?php echo $row['imagen']?>" class="mb-4" alt="Imagen" style="width:100%;"></a>
                    <h5><?php echo $row['titulo']?></h5>
                    <p style="margin-top: -20px !important;"><?php echo $row['descripcion']?></p>    
            </div>
                    </div><!-- /.col-lg-6 -->
                    <?php }//while?>
                
          
          
          

            </div>
            <div style="padding-bottom:50px;"></div>
            

</section>


      

