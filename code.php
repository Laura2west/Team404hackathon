<?php


if(isset($_POST['add_category_btn'])){
    $name=$_POST['name'];
    
    $description=$_POST['description'];
    $twitter=$_POST['twitter'];
    $facebk=$_POST['facebk'];
    $linked=$_POST['linked'];
    

    
    $image=$_FILES['image']['name'];
    
    $path="../images";
    $image_ext=pathinfo($image, PATHINFO_EXTENSION);
    $filename=time(). '.'.$image_ext;

    $conn=new mysqli('localhost', 'root', '','bltechnologies');
if($conn-> connect_error){
    die('connection failed :' .$conn-> connect_error);
}else{
    $stmt=$conn->prepare("insert into teamsection(name, description, twitter, facebk, linked, image)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss", $name, $description, $twitter, $facebk, $linked, $image);
    $stmt-> execute();
    header("location: adminindex.php");
    move_uploaded_file($_FILES['image']['tmp_name'], $path. '/'.$image);
    $stmt ->close();
    $conn->close();

}
}

?>

<?php
require("connection.php");
if(isset($_POST['user_delete'])){
    $id=$_POST['user_delete'];

    $query="DELETE FROM `acct` WHERE `acct`.`id` = $id";
    $query_run= mysqli_query($conn, $query); 

    if($query_run){
        echo "success";
        header("location: adminindex.php");
        
        
    }
    else{
        
        echo "error";
    }
    
}
?>