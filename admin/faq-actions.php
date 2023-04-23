<?php 

include("conn.php");


if(isset($_POST['action'])&&$_POST['action']=="add"){
    

    //get values
    $titulo = addslashes($_POST['titulo']);
    $contenido = addslashes($_POST['contenido']);
   $categoria = "Categoria";
    //insert
    $sql = "insert into faq(titulo,
                                descripcion,
                                categoria)
                        values(
                            '".$titulo."',
                            '".$contenido."',
                            '".$categoria."'
                        )";

                                     

    if($mysqli->query($sql)){ 
       

       ?><script> window.open('faq.php?ok','_self');</script><?php
       
       
    }else{ 
        ?><script> window.open('faq.php?err','_self');</script><?php
    }

}//ADD


if(isset($_POST['action'])&&$_POST['action']=="edit"){
    

    //get values
    $titulo = addslashes($_POST['titulo']);
    $contenido = addslashes($_POST['contenido']);
   
    $id = (int)addslashes($_POST['id']);

    //insert
    $sql = "update faq set 
                    titulo = '".$titulo."',
                    descripcion = '".$contenido."'
                    where id = " . $id;


    if($mysqli->query($sql)){ 
      
       ?><script> window.open('faq.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('faq.php?err','_self');</script><?php
    }

}//EDIT


if(isset($_GET['del'])){ 


    $sql = "delete from faq where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('faq.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('faq.php?err','_self');</script><?php
     }

}//DELETE

$mysqli->close();
?>

