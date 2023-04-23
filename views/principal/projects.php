<?php
function ver_mas_p($texto,$cantidad,$id){
$arr_texto=explode(" ",strip_tags($texto));
if(count($arr_texto)>$cantidad){
$n_texto="";
for($i=0;$i<$cantidad;$i++){
$n_texto.=$arr_texto[$i]." ";
}
}else{
$n_texto=$texto;
}
return $n_texto."</br><div class='btn-project'><a href='".base_url."?pag=gallery&&id=$id'>More</a></div>";
}
?>
<section id='projects' style="">
    <div class='mx-auto row' style='width:90%'>
         <div class='col-lg-4 col-md-12' style=''>
                <h1 class="projects_title" style="">Projects</h1>
                <div class='projects_text' style='margin-top:20px;'>
                    <div>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                  <a class='href_contact mt-4' style='text-decoration: none;' href="<?=base_url?>?pag=contact"><div class='animate__animated animate__fadeInUp btn_project-contact' style="">Contact Us</div> </a>            

                    </div>
                </div>

        </div>
        <div class='col-lg-8 col-md-12' style="margin-top:100px;"><div class="grid-container">
   <?php 
               //Connection
               include("admin/conn.php");
               $sql = "select * from galerias order by id DESC";
               $query = $mysqli->query($sql);
            $grids=["tall","wide","grid_fake","tall","wide"];
          $contador=0;
             while($row = $query->fetch_assoc()){
         
                 if($contador<5){
                   
             //  tall / wide / tall / wide
                   
               ?>
               
  <div class="grid-item <?=$grids[$contador]?> "
        style="background-image: url('assets/images/galerias/<?=$row['imagen']?>');"><div class="galery-text" style="background:rgba(142,58,32,0.5)">
              <h3 class="" style=""><?=$row['titulo']?></h3> 
              <p><?=ver_mas_p($row['descripcion'],10,$row['id'])?></p>
          
          </div></div>
                
               
    <?php
                   
            $contador++;   
                 }
                }
    ?>
    </div></div>
    </div>
</section>
