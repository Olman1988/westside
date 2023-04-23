<?php
include("admin/conn.php");
$id = $_GET['id'];
$sql = "select * from servicios where id = " . $id;
$query = $mysqli->query($sql);

$row = $query->fetch_assoc();

?>
     
        <section class="blog-details" style="margin-top:150px;">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets/images/services/<?php echo $row['imagen']?>" alt="Servicios">

                            </div><!-- /.blog-one__image -->
                            
                            <div class="blog-one__content">
                                                 <h1 class=" text-center title_services" style="color:#495057;font-family:'Montserrat Alternates';"><?=$row['titulo']?><div class="mx-auto mt-2" style="width:100px;border-bottom: solid 5px #8e3a20"></div></h1>

                        
                               <?php echo $row['descripcion']?>
                                                 <a href="<?=base_url?>?pag=contact" style="text-decoration:none;margin:auto;"  ><div class="btn_general_style_princ" style="width:200px;margin:auto">Contact Us!</div></a>
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                       
                     
                 
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                           
     <a class='contact-button' href="<?=base_url?>?pag=contact" style="text-decoration:none;margin:auto;"  ><div class="btn_general_style_princ" style="width:200px;margin:auto">Contact Us!</div></a>                            <div class="sidebar__single sidebar__category">
                                

                                <h3 class="sidebar__title">Other Services</h3><!-- /.sidebar__title -->
                                <ul class="sidebar__category-list">

                                <?php 
                                $sql2 = "select * from servicios where id <> " . $id;
                                $quey2 = $mysqli->query($sql2);
                                while($row2 = $quey2->fetch_assoc()){ 
                                ?>
                                    <li class="sidebar__category-list-item"><a href="<?=base_url?>?pag=services&&id=<?=$row2['id']?>"><?php echo $row2['titulo']?></a></li>
                                <?php } ?>    
                                </ul><!-- /.sidebar__category-list -->
                            </div><!-- /.sidebar__single -->
                          
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-details -->
