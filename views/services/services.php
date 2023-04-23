<?php
function ver_mas_services($texto,$cantidad,$id=0){
$arr_texto=explode(" ",strip_tags($texto));
if(count($arr_texto)>$cantidad){
$n_texto="";
for($i=0;$i<$cantidad;$i++){
$n_texto.=$arr_texto[$i]." ";
}
}else{
$n_texto=$texto;
}
return $n_texto;
}
?>
<section id='services' style="padding-top:100px;background:whitesmoke;padding-bottom:50px;">
            <h1 class=" text-center title_services" style="color:#495057;font-family:'Montserrat Alternates';">Services<div class="mx-auto mt-2" style="width:100px;border-bottom: solid 5px #8e3a20"></div></h1>

    <div class="service_container-text">
        <p class="text-justify service_container-info mx-auto mt-4">Westside Home Inspections Inc, is here to serve all of your residential inspectionn needs in the Greater Los Angeles area. We provide home inspection services for buyers and sellers, and we offer a $10,000 Honor Guarantee!</p>
            </div>
            <div class='row mx-auto'>
                
                  <?php 
               //Connection
               include("admin/conn.php");
               $sql = "select * from servicios order by id DESC";
               $query = $mysqli->query($sql);
               $cont = 0;
              
               while($row = $query->fetch_assoc()){ 
                  
                   if($cont<6){ 
               ?>
                <div class=' col-lg-4 col-md-6 col-sm-12 mx-auto service_container-box'>
                    <div class='service_container_items'>
                        <img class="service_item-image" src="assets/images/services/<?=$row['imagen']?>" alt="alt"/>
                    <div class="service_item-over">
                        <h3 class=""><?=$row['titulo']?></h3>
                        <button class="badge rounded-pill bg-primary"> More <i class="fa-solid fa-circle-arrow-right ml-4"></i></button>
                    </div>
                    <div class="service_item2-over" style="">
                        <h3 class="text-center"><?=$row['titulo']?></h3>
                        <div class='text-center mx-auto'><?=ver_mas_services(strip_tags($row['descripcion']),35)?></div>
                        <div class="text-center service_item2-text" style=""><a style='color:white;text-decoration:none;' href='<?=base_url?>?pag=services&&id=<?=$row['id']?>' onclick='fn_agregar_servicio("<?=$row['titulo']?>")'>SEE MORE</a></div>

                    </div>
                    
                   </div>
<div class='mx-auto service_container_items-footer' style=''></div>  

                </div> 
          
                
<?php 
 } else{
      ?>
          <div class='col-lg-4 col-md-6 col-sm-12 mx-auto service_container-box' style='display:none;'>
                    <div class='service_container_items'>
                        <img class="service_item-image" src="assets/images/services/<?=$row['imagen']?>" alt="alt"/>
                    <div class="service_item-over">
                        <h3 class=""><?=$row['titulo']?></h3>
                        <button class="badge rounded-pill bg-primary" > More <i class="fa-solid fa-circle-arrow-right ml-4"></i></button>
                    </div>
                    <div class="service_item2-over">
                        <h3 class="text-center"><?=$row['titulo']?></h3>
                        <div class='text-center mx-auto'><?=ver_mas_services(strip_tags($row['descripcion']),35)?></div>
                         <div class="text-center service_item2-text" style=""><a style='color:white;text-decoration:none;' href='<?=base_url?>?pag=services&&id=<?=$row['id']?>' onclick='fn_agregar_servicio("<?=$row['titulo']?>")'>SEE MORE</a></div>

                    </div>
                    
                   </div>
<div class='mx-auto service_container_items-footer' style=''></div>  
                </div> 
                
          
          
          
          <?php
   
 }//while 
// 
     $cont++;        }
?>                

            </div>
            
            <?php
 if($cont>6){
            ?>
                              <div style='margin-top:60px;padding-bottom:60px;'> 
                                  <div style='margin-top:60px;padding-bottom:60px;'><div onclick='cargarServicios(6)' class='mx-auto animate__animated animate__fadeInUp btn_general_style_princ' style="width:200px;">More Services</div></div>
</div>
    <?php
 }
    ?>
</section>
<script>
    
     var posicion=6;
function cargarServicios(num){
    posicion=posicion+num;
    let todosServicios=document.querySelectorAll(".service_container-box");
   
    for(let i=0;i<todosServicios.length;i++){
        if(i<posicion){
            todosServicios[i].style.display="block";
        } else {
            todosServicios[i].style.display="none";
        }
        
    }
    
}

</script>