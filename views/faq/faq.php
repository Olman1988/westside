<?php
$search ='';
$search = isset($_GET['text-search'])?explode(" ",addslashes($_GET['text-search'])):'';
?>

<section id='nosotros' style='padding-top:50px;'>
    <h1 class=" text-center " style="color:#495057;font-family:'Montserrat Alternates';">FAQ<div class="mx-auto mt-2" style="width:100px;border-bottom: solid 5px #dc802f"></div></h1>
<div class="service_container-text">
            </div>
    
        <!-- Page Content-->
        
        <div id="accordion" style="width:80%;margin:auto;">
            
            <?php
            include("config/conexion.php");
            if($search!=''){
                $hadResult = false;
                foreach ($search as $valueToSearch) {
                $sql = "select * from faq where titulo LIKE '%$valueToSearch%' OR descripcion LIKE '%$valueToSearch%'" ;
               $query = $mysqli->query($sql);
               $cont2 = 1;
               while($row = $query->fetch_assoc()){ 
                   $hadResult =true;
                   ?>
               
                        <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?=$cont2?>" aria-expanded="true" aria-controls="collapseOne">
                        <?=$row['titulo']?>
                      </button>
                    </h5>
                  </div>
                    <?php
                    if($cont2<2){
                    ?>
                  <div id="collapse<?=$cont2?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <?=$row['descripcion']?>
                    </div>
                  </div>
               <?php } else {?>
                    
                     <div id="collapse<?=$cont2?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <?=$row['descripcion']?>
                    </div>
                  </div>
                    <?php
               }
                    ?>
                </div>
            <?php
            $cont2++;
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
            } else{
               $sql = "select * from faq order by id DESC";
               $query = $mysqli->query($sql);
               $cont = 1;
               while($row = $query->fetch_assoc()){ 
            ?>
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?=$cont?>" aria-expanded="true" aria-controls="collapseOne">
                        <?=$row['titulo']?>
                      </button>
                    </h5>
                  </div>
                    <?php
                    if($cont<2){
                    ?>
                  <div id="collapse<?=$cont?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <?=$row['descripcion']?>
                    </div>
                  </div>
               <?php } else {?>
                    
                     <div id="collapse<?=$cont?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <?=$row['descripcion']?>
                    </div>
                  </div>
                    <?php
               }
                    ?>
                </div>
  <?php
  $cont++;
               }
            }
  ?>
</div>
    <div class="container pb-3">
  
                  
               
             
          <h3 class="pt-4 mt-4">Do you have any questions?</h3>
            
            <form id="faqForm" class="row" method="post">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="help_name">Your Name</label>
                  <input class="form-control form-control-rounded" name="help_name" type="text" id="help_name" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="help_email">Your Email</label>
                  <input class="form-control form-control-rounded" name="help_email" type="email" id="help_email" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="help_subject">Subject</label>
                  <input class="form-control form-control-rounded" name="help_subject" type="text" id="help_subject" required>
                </div>
              </div>
              
              <div class="col-12">
                <div class="form-group">
                  <label for="help_question">Question </label>
                  <textarea class="form-control form-control-rounded" name="help_question"  id="help_question" rows="8" required></textarea>
                </div>
              </div>
              <div class="col-12 text-right mt-4">
                <button class="btn btn-secondary" style="text-transform:uppercase;font-size:15px;" type="submit">Send Question</button>
              </div>
            </form>
      </div>
</section>

   <script>
$( "#faqForm" ).on( "submit", function( event ) {
  event.preventDefault();
  
  $.ajax({
    type : 'POST',
    url : './email/controllerFAQ.php',
    data : $('#faqForm').serialize(),
   success:function(dat){
      
            if(dat!=false){
          Swal.fire({
                                                   icon: 'success',
                                                   title: 'Sent',
                                                   text: 'We will contact you as soon as possible.'

                                                 });
               
               window.setTimeout(function () {
                            window.location.href = "./?pag=FAQ"
                        }, 2000);
            } else {
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Wrong data, please try again'
              
              })
            }
        } 
})
 
});
</script>