<?php 

include("conn.php");


if(isset($_POST['action'])&&$_POST['action']=="add"){
    

    //get values
    $nombre = addslashes($_POST['nombre']);
    $titulo = addslashes($_POST['titulo']);
    $texto = addslashes($_POST['texto']);
    //insert
    $sql = "insert into sliders(nombre,titulo,texto)
                        values(
                            '".$nombre."','".$titulo."','".$texto."'
                        )";

                                               

    if($mysqli->query($sql)){ 
        $idgen = $mysqli->insert_id;

                        
       $archivo = $_FILES['imagen']['name'];
       if (isset($archivo) && $archivo != "") {
           $tipo = $_FILES['imagen']['type'];
           $tamano = $_FILES['imagen']['size'];
           $temp = $_FILES['imagen']['tmp_name'];
           if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 200000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                if (move_uploaded_file($temp, '../assets/images/slider/'.$nombrefinal)) {
                    chmod('../assets/images/slider/'.$nombrefinal, 0777);
                    $sqlima = "update sliders set imagen = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
       ?><script> window.open('sliders.php?ok','_self');</script><?php
       
       
    }else{ 
        ?><script> window.open('sliders.php?err','_self');</script><?php
    }

}//ADD


if(isset($_POST['action'])&&$_POST['action']=="edit"){
    

    //get values
    $nombre = addslashes($_POST['nombre']);
    $id = (int)addslashes($_POST['id']);
 $titulo = addslashes($_POST['titulo']);
    $texto = addslashes($_POST['texto']);
    //insert
    $sql = "update sliders set 
                    nombre = '".$nombre."',titulo = '".$titulo."',texto = '".$texto."'
                    where id = " . $id;


    if($mysqli->query($sql)){ 
        $idgen = $id;

                        
       $archivo = $_FILES['imagen']['name'];
       if (isset($archivo) && $archivo != "") {
           $tipo = $_FILES['imagen']['type'];
           $tamano = $_FILES['imagen']['size'];
           $temp = $_FILES['imagen']['tmp_name'];
           
if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 200000000))) {              
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                if (move_uploaded_file($temp, '../assets/images/slider/'.$nombrefinal)) {
                    chmod('../assets/images/slider/'.$nombrefinal, 0777);
                    $sqlima = "update sliders set imagen = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
       ?><script> window.open('sliders.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('sliders.php?err','_self');</script><?php
    }

}//EDIT


if(isset($_GET['del'])){ 


    $sql = "delete from sliders where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('sliders.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('sliders.php?err','_self');</script><?php
     }

}//DELETE

$mysqli->close();
?>