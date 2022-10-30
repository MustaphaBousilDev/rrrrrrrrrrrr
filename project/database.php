
    
    
<?php 
$data_source_name='mysql:host=localhost;dbname=gggg';
$user='root';
$pass='';
$option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try{
    $conn=new PDO($data_source_name,$user,$pass,$option);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "succecc connect database";
}catch(PDOException  $e){
    echo "Failed to connect" .$e->getMessage();
}

?>
    