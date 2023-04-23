<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    include("admin/conn.php");
      $sqlPrincipal = "select * from galerias where id='$id'";
               $queryPrincipal = $mysqli->query($sqlPrincipal);
               if ($queryPrincipal->num_rows < 1) {
                 echo "<section><div class='text-center mt-4' style='font-size:20px;margin:auto;'>No se encontraron datos.<div class='container'><button class='mx-auto btn btn-primary'><a style='text-decoration:none;color:white;' href='".base_url."proyectos.php'>Volver</a></button></div></div>"
                   . ""
                         . "</section>";
               } else{
             while($rowPrincipal = $queryPrincipal->fetch_assoc()) {
                 ?>
                     <section style='margin-top:200px;width:100%;padding-bottom:100px;'>
            <div class='container mx-auto'>
        <h1 class=" text-center " style="color:#495057;font-family:'Montserrat Alternates';"><?=$rowPrincipal['titulo']?><div class="mx-auto mt-2" style="width:100px;border-bottom: solid 5px #dc802f"></div></h1>
<div class='text-center mx-auto' style='width:50%; min-width:300px;'><?=$rowPrincipal['descripcion']?></div>
                     
                     <?php
             
           
               
                 
?>
        
    <div id="gallery"> 
        <?php
           //Connection
        $mysqli -> close();
               include("admin/conn.php");
               $sql = "select i.* from imagenes i INNER JOIN galerias g ON i.idGaleria=g.id where g.id='$id' order by i.id DESC";
               $query = $mysqli->query($sql);              
        if ($query->num_rows > 0) {
            
               while($row = $query->fetch_assoc()){ 
                     
        ?>
        	<img alt="<?=$row['titulo']?>" src="<?=base_url?>assets/images/general/<?=$row['imagen']?>"
				data-image="<?=base_url?>assets/images/general/<?=$row['imagen']?>"
				data-description="<?=$row['titulo']?>">
		<?php
               }
        ?>	
			
    </div>
            </div>
                         
                                <?php
                 } else { echo "<div class='text-center mt-4' style='font-size:20px;margin:auto;'>No se encontraron datos.<div class='container'><button class='mx-auto btn btn-primary'><a style='text-decoration:none;color:white;' href='".base_url."proyectos.php'>Volver</a></button></div></div>";}
                 ?></section><?php
           }
}
} else {
    echo "<div class='text-center mt-4' style='font-size:20px;margin:auto;'>No se encontraron datos.</div>";
                                } ?>


<script type="text/javascript">
				
				jQuery(document).ready(function(){
					
					jQuery("#gallery").unitegallery({
                                            	tile_enable_shadow:false,
	tile_enable_border:true,
	tiles_space_between_cols:15,
	tiles_justified_space_between:15,
	tiles_col_width:335,
	tile_border_color: "#ffffff",
	tile_enable_outline:true,
        tile_enable_textpanel:true,
	tile_textpanel_title_text_align: "center",
						
					});
				});
				
				</script>
