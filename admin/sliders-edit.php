<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Sliders</h1>
                    <p class="mb-4">Editar slider existente</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php 
                    include("conn.php");
                    $id = (int)$_GET['id'];
                    if($id>0){
                        $sql = "select * from sliders where id = " . $id;
                        $query = $mysqli->query($sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>
                    
                        <div class="card-body">
                        <form id="add" method="post" action="sliders-actions.php"  enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre:</label>
                                <input type="text" required class="form-control" value="<?php echo $row['nombre']?>" id="nombre" name="nombre" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Título:</label>
                                <input type="text" required class="form-control" value="<?php echo $row['titulo']?>" id="nombre" name="titulo" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Texto: *Máximo de 35 palabras</label>
                                <textarea class="form-control" name="texto" value=""  cols="30" rows="10"><?php echo $row['texto']?></textarea>
                            </div>
            

                        
                            <?php
                            if($row['imagen']!=""){?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Actual:</label>
                                <img src="../assets/images/sliders/<?php echo $row['imagen']?>" width="100px" alt="Img blog">
                            </div>
                            <?php } ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen: * Recomendado 1280 x 600px</label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>

       
                            
                            <button type="submit" class="btn btn-primary">Editar</button>
                            <a href="sliders.php" class="btn btn-secondary">Regresar</a>
                            <input type="hidden" name="action" id="action" value="edit">
                            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                            </form>
                        </div>
                    </div>

                    <script>  
                CKEDITOR.replace('contenido'); 
                 
            </script>

                <?php 
                $mysqli->close();
                    }else{ 
                        ?><script>window.open('sliders.php','_self');</script><?php 
                    }

                    
                include("footer.php");?>