<?php

// conecta com o banco de dados 
include("conecta.inc");

// coleta os dados dos formulario 
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
// seta o comando 
$sql="SELECT*FROM tabela_login WHERE usuario='$usuario' AND senha='$senha'";
$res=mysqli_query($con,$sql);
$linhas=mysqli_affected_rows($con);

 




if($linhas==1){
    echo("login realizado com sucesso   nh");
    $num=rand(100000,900000);
    setcookie("numloguin",$num,time()+3600);
    header("Location:confere.php? nun1=$num");
}else{
header("Location:t2_loguinFalha.html ");
exit();

}



mysqli_close($con);

?>
