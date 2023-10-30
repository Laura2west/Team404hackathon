<?php


if(isset($_POST['add_category_btn'])){
    $name=$_POST['name'];
    
    $story=$_POST['story'];
    
    

    
    $image=$_FILES['image']['name'];
    
    $path="../images";
    $image_ext=pathinfo($image, PATHINFO_EXTENSION);
    $filename=time(). '.'.$image_ext;

    $conn=new mysqli('localhost', 'root', '','bltechnologies');
if($conn-> connect_error){
    die('connection failed :' .$conn-> connect_error);
}else{
    $stmt=$conn->prepare("insert into blogsection(name, story, image)
    values(?,?,?)");
    $stmt->bind_param("sss", $name, $story, $image);
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

    $query="DELETE FROM `personal` WHERE `personal`.`id` = $id";
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

<?php
require("connection.php");
if(isset($_POST['user_delete'])){
    $id=$_POST['user_delete'];

    $query="DELETE FROM `other` WHERE `other`.`id` = $id";
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
<?php
require("connection.php");
if(isset($_POST['request_delete'])){
    $id=$_POST['request_delete'];

    $query="DELETE FROM `request` WHERE `request`.`id` = $id";
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