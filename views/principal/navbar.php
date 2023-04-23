<?php
  
 
?>

<div class=''>
 
<nav id="navbr" class="navbar navbar-dark navbr navbar-expand-xl" style="box-shadow: 2px 2px 15px gray;">
   
    <a class="navbar-brand" href="<?=base_url?>" style=""><img id="logo" src="<?=base_url?>/assets/images/general/logo.jpg" style=""></a>
  <button class="navbar-toggler" style=" color:#dc802f;border: solid 1px #dc802f;background:#dc802f" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span style='' class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
      
    <ul class="navbar-nav mx-auto p-3 navbar_ul">
      <li class="nav-item">
          <a class="nav-link" style=""  href="<?=base_url?>">HOME</a>
      </li>
       <li style="" class="nav-item">
                     <div style="position:relative" onmouseover="abrirLista('dropService')" onmouseleave="cerrarLista('dropService')">

          <a class="nav-link" style="cursor:pointer" id='' >SERVICES</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropService" style="left:-22px;top:100%;overflow:hidden;">
    <a class="dropdown-item" href="<?=base_url?>?pag=services">SERVICES</a>
    <a class="dropdown-item" href="https://www.nachi.org/code_of_ethics.htm">STANDARDS OF PRACTICE</a>
     <a class="dropdown-item" href="<?=base_url?>?pag=pricing">PRICING</a>
              </div></div>
        
     
      </li>
      <li style="" class="nav-item">
                     <div style="position:relative" onmouseover="abrirLista('dropNosotros')" onmouseleave="cerrarLista('dropNosotros')">

          <a class="nav-link" style="cursor:pointer" id=''  >ABOUT US</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropNosotros" style="left:-22px;top:100%;overflow:hidden;">
    <a class="dropdown-item" href="<?=base_url?>?pag=aboutUS">ABOUT US</a>
   
    <a class="dropdown-item" href="<?=base_url?>?pag=knowUs">KNOW US</a>
     <a class="dropdown-item" href="<?=base_url?>?pag=FAQ">FAQ</a>
              </div></div>
        
     
      </li>
        <li class="nav-item">
            <div style="position:relative" onmouseover="abrirLista('dropPro')" onmouseleave="cerrarLista('dropPro')">
        <a class="nav-link" style="cursor:pointer;"  >GALLERY</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropPro" style="left:-22px;top:100%;overflow:hidden;">
<!--    <a class="dropdown-item" href="<?=base_url?>?pag=gallery">GALLERY</a>-->
    <a class="dropdown-item" href="<?=base_url?>?pag=gallery&&video=videos">VIDEOS</a>
  </div></div>
      
        </li>
      <li style="" class="nav-item">
                     <div style="position:relative" onmouseover="abrirLista('dropDownload')" onmouseleave="cerrarLista('dropDownload')">

          <a class="nav-link" style="cursor:pointer" id='' >DOWNLOADABLE</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropDownload" style="left:-22px;top:100%;overflow:hidden;">
   
                  <a CLASS='dropdown-item' style="max-height:300px;overflow:hidden;">Agreements</a>
   <ul class="dropdown-menu" id=agreements" onmouseover="abrirLista('lista1')" onmouseleave="cerrarLista('lista2')" style="left: 100%;">
                  <?PHP
       include("admin/conn.php");
                $sql = "select * from descargables order by id DESC";
                $query = $mysqli->query($sql);
                while($row = $query->fetch_assoc()){ 
                    $ext = explode(".",strtoupper($row['archivo']));
                    var_dump($ext);
                    var_dump($row);
   ?>
                  <a CLASS='dropdown-item' style="max-height:300px;overflow:hidden;" href="assets/descargables/<?php echo $row['archivo']?>"><?php echo $row['titulo']?></a>
   
             <?PHP
                }
             ?>
                  </ul>
              </div></div>
        
     
      </li>
        <li class="nav-item">
        <a class="nav-link" style="" id=''  href="<?=base_url?>?pag=blog">BLOG</a>
      </li>
  
      <li class="nav-item">
          <a class="nav-link" style="" id=''  href="<?=base_url?>?pag=contact">CONTACT US</a>
      </li>
         <li class="row">
             <form action="<?=base_url?>" style="margin:0px;position:relative;">
  <div class="form-outline col-10">
      <input name="pag"  type="hidden" value="search" />
    <input name="search-input"  type="search" class="form-control" />
    
    <label class="form-label" for="form1">SEARCH</label>
  </div>
             
             <div class="col-1" style="position:absolute;top:5px;right:10px;">
  <button class="" style="height:40px;width:40px;border-radius:15px;color:white;background:#dc802f;border-color:#dc802f" id="search-button" type="submit" class="btn">
    <i class="fas fa-search"></i>
  </button>
                 </div>
                 </form>
</li> 
    </ul>
    
  </div>
</nav>

</div>
<script>
 function abrirLista(lista){
        $("#"+lista).css("display","block");
    }
     function cerrarLista(lista){
        $("#"+lista).css("display","none");
    }
</script>
