<?php
?>
<section id="galerias" style="padding-top:50px;">
    <h1 class=" text-center " style="color:#495057;font-family:'Montserrat Alternates';">Videos<div class="mx-auto mt-2" style="width:100px;border-bottom: solid 5px #dc802f"></div></h1>
            <div class="service_container-text">
<!--                <p class="text-center service_container-info mx-auto mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
            </div>
    <div class="container" style='margin-top:50px;'>
                <div class="row mt-4">
                    

                <?php 
                include("admin/conn.php");
                $sql = "select * from videos order by id DESC";
                $query = $mysqli->query($sql);
                while($row = $query->fetch_assoc()){
                ?>
                <div class="col-lg-4 mx-auto">
                        <div class="blog-one__single">
                            <div class="blog-one__image" style="width: 100%;">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $row['video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">                             
                                <p class="blog-one__titles"><?php echo ($row['titulo']);?>
                </p><!-- /.blog-one__title -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <?php }//while ?>



               
                    
                    
                   
                </div><!-- /.row -->
             
            </div>
</section>

