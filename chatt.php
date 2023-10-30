

<?php
require("connection.php");
if(isset($_POST['user_delete'])){
    $work_id=$_POST['user_delete'];

    $query="DELETE FROM `worksection` WHERE `worksection`.`work_id` = $work_id";
    $query_run= mysqli_query($conn, $query); 

    if($query_run){
        echo "success";
        header("location: index.php");
        
        
    }
    else{
        
        echo "error";
    }
    
}
?>

<?php


if(isset($_POST['rep_category_btn'])){
    $replies=$_POST['replies'];
    $question=$_POST['question'];

    
    $conn=new mysqli('localhost', 'root', '','chatty');
if($conn-> connect_error){
    die('connection failed :' .$conn-> connect_error);
}else{
    $stmt=$conn->prepare("insert into chatt(question,replies)
    values(?,?)");
    $stmt->bind_param("ss", $question, $replies);
    $stmt-> execute();
    header("location: replies.php");
    move_uploaded_file($_FILES['image']['tmp_name'], $path. '/'.$image);
    $stmt ->close();
    $conn->close();

}
}
?>

<?php


if(isset($_POST['acc_category_btn'])){
    $cname=$_POST['cname'];
    $anum=$_POST['anum'];
    $pi=$_POST['pi'];
    $jan=$_POST['jan'];
    $feb=$_POST['feb'];
    $mar=$_POST['mar'];
    $apr=$_POST['apr'];
    $may=$_POST['may'];

    
    $conn=new mysqli('localhost', 'root', '','chatty');
if($conn-> connect_error){
    die('connection failed :' .$conn-> connect_error);
}else{
    $stmt=$conn->prepare("insert into acct(cname,anum, pi, jan, feb, mar, apr, may)
    values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sissssss", $cname, $anum, $pi, $jan, $feb, $mar, $apr, $may);
    $stmt-> execute();
    header("location: acc.php");
    echo "Submitted";
    move_uploaded_file($_FILES['image']['tmp_name'], $path. '/'.$image);
    $stmt ->close();
    $conn->close();

}
}
?>