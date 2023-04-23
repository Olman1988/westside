<?php

include("admin/conn.php");
$id = (int)($_GET['id']);
if($id<=0 or $id==""){
    
}
$sql = "select * from blogs where id = " . $id;
$query = $mysqli->query($sql);
$row = $query->fetch_assoc();

?>

<section>
    <div class='row mx-auto' style='margin-top:50px;width:90%;margin-top:200px;'>
        <div class='col-lg-8 col-sm-12'>
            <div class='col-lg-10 mx-auto'> <img class='img-fluid' src="<?=base_url?>assets/images/blog/<?=$row['imagen']?>" alt="alt"/></div>
        <div class='col-lg-10 mx-auto mt-3'>
            <h1 style="font-family:'Poppins'"><?=$row['titulo']?></h1>
            <h5 style='color:gray'><?=$row['autor']?>|<?=$row['fecha']?></h5>
            <div style="margin-top:20px"><?=$row['contenido']?></div>
           </div>
            
           
    </div>
     <div class='col-lg-4' style="margin-bottom:50px;">
                <div style='background:whitesmoke;color:gray;'>
                    <h2 class="text-center" style='padding:10px'>More content</h2>
                 <ul class="list-group p-4">
                     <?php
            
            $sqlAll = "select * from blogs order by id DESC LIMIT 10";
                $queryAll = $mysqli->query($sqlAll);
                while($row = $queryAll->fetch_assoc()){
            ?>
  <li class="list-group-item">
    <div><?=$row['titulo']?><br/><strong><?=$row['autor']?> | <?=$row['fecha']?></strong></div>
      <a style="text-decoration:none;position:absolute;right:20px;bottom:10px;border-radius:10px;padding:10px;color:white;background:#dc802f" href="<?=base_url?>?pag=blog&&id=<?=$row['id']?>" class="">See</a>
  </li>
 <?php
                }
                $mysqli -> close();
 ?>
</ul><div class="text-center p-4">
    <button type="button" class="btn btn-secondary text-center"><a style="text-decoration:none;color:white" href="<?=base_url?>/?pag=blog">See more</a></button>
                    </div>
                </div>
            </div>
</section>
