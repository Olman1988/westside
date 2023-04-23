<?php
?>
<section id="principal" style='max-height:65vh;'>
    <div class="principal_projects" style="background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(assets/images/general/faq.png);height:65vh;">
        <h2 class="text_projects-principal" style="">FAQ</h2>
        <div style="position:absolute;bottom:50px;left:50%;transform: translate(-50%,0%);max-width:90%;">
  <div class="form-outline" style="">
      <form id="searchFAQ" action="<?=base_url?>?pag=FAQ" type="POST">
          <input type="hidden" name="pag" value="FAQ">
    <input id="search-focus" name="text-search" type="search" class="form-control" style="width:800px;max-width:90%;margin:auto;" />
    <div class='mt-3' style='margin:auto;width:100%;text-align: center;'>
    <button style='width:200px;text-align: center;font-size:20px;' type="submit" class="btn btn-secondary text-center">
    <i class="fas fa-search ml-3"></i> Search
  </button>
  
    </div>
    </form>
  </div>
 
</div>
    </div>
</section>


