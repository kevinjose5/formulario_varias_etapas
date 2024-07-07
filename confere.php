<?php
include("conecta.inc");
if(isset($_COOKIE["numloguin"])){
    $n2=$_COOKIE["numloguin"];
    
    $n1=$_GET["nun1"];
    
    
        if($n1==$n2){
            echo("login efetuado");
            
            echo("</br> 
            <a href='t2.html'>ENVIAR</a>");

        }else{
            echo("login foi efetuado");
           
        
        }
        
}else{
    echo("login não efetuado");
   
    

}

   
 
?>