<?php
function ver_mas($texto,$cantidad,$id=1){
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
return $n_texto;
}

?>
<section style="margin-top:200px;padding-bottom:50px;">
     <h1 class=" text-center title_services" style="color:#495057;font-family:'Montserrat Alternates';">Searching<div class="mx-auto mt-2" style="width:100px;border-bottom: solid 5px #8e3a20"></div></h1>

    <div class="service_container-text">
                <p class="text-center service_container-info mx-auto mt-4">Please find your search results below.</p>
            </div>
    <div class="row">
    <?php
    if(isset($_GET['search-input'])){
      $search = explode(" ",addslashes($_GET['search-input']));
    include("config/conexion.php");
    $hadResult = false;
    foreach ($search as $valueToSearch) {
               $sql = "select * from servicios where titulo LIKE '%$valueToSearch%' OR descripcion LIKE '%$valueToSearch%'" ;
               
               $query = $mysqli->query($sql);
               
               while($row = $query->fetch_assoc()){ 
                   $hadResult =true;
    ?>
        <div class=' col-lg-4 col-md-6 col-sm-12 mx-auto service_container-box'>
                    <div class='service_container_items'>
                        <img class="service_item-image" src="<?=base_url?>assets/images/services/<?=$row['imagen']?>" alt="alt"/>
                    <div class="service_item-over">
                        <h3 class=""><?=$row['titulo']?></h3>
                        <button class="badge rounded-pill bg-primary"> SEE MORE <i class="fa-solid fa-circle-arrow-right ml-4"></i></button>
                    </div>
                    <div class="service_item2-over" style="">
                        <h3 class="text-center"><?=$row['titulo']?></h3>
                        <div class='text-center mx-auto'><?=ver_mas(strip_tags($row['descripcion']),40)?></div>
                        <div class="text-center service_item2-text" style=""><a style='color:white;text-decoration:none;' href='<?=base_url?>#contact' onclick='fn_agregar_servicio("<?=$row['titulo']?>")'>SEE MORE</a></div>

                    </div>
                    
                   </div>
<div class='mx-auto service_container_items-footer' style=''></div>  

                </div> 
               <?php
            }
            
               
       }
       if(!$hadResult){
           ?>
        </div>
        <div class="m-auto">
            <h3 class="text-center">There are not results for this search</h3>
        </div>
               <?php
       }
    }           
               
               ?>
        
</section>

<?php

?>