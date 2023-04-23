<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Downloadable</h1>

                    <?php 
                    if(isset($_GET['ok'])){ 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Successfull
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php } ?>

                    <?php 
                    if(isset($_GET['err'])){ 
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    There is an error, please try again
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php } ?>

                    <p class="mb-4">Add, Edit or Delete</p>
                    <a class="btn btn-primary mb-4" href="descargables-add.php">Add New</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10">
                                    <thead>
                                        <tr>
                                            <th class="col-10">Title</th>
                                            <th class="col-2 text-center">Actions</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("conn.php");
                                        $sql = "select * from descargables order by id DESC";
                                        $query = $mysqli->query($sql);
                                        while($row = $query->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['titulo']?></td>
                                        <td class="text-center">
                                            <a href="descargables-edit.php?id=<?php echo $row['id']?>"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                                            <a href="descargables-actions.php?del=true&id=<?php echo $row['id']?>" onclick="return confirm('Desea continuar? Se eliminará el registro permanetemente')"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                          
                                        </tr>
                                        <?php 
                                        }//while
                                        $mysqli->close();?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                <?php include("footer.php");?>