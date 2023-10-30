<?php


if(isset($_POST['re_category_btn'])){
    $name=$_POST['name'];
    $dg=$_POST['dg'];
    $pi=$_POST['pi'];
    
    $conn=new mysqli('localhost', 'root', '','chatty');
if($conn-> connect_error){
    die('connection failed :' .$conn-> connect_error);
}else{
    $stmt=$conn->prepare("insert into request(name,dg, pi)
    values(?,?,?)");
    $stmt->bind_param("sis", $name, $dg, $pi);
    $stmt-> execute();
    header("location: index.php");
    move_uploaded_file($_FILES['image']['tmp_name'], $path. '/'.$image);
    $stmt ->close();
    $conn->close();

}
}
?>
<?php


if(isset($_POST['loan_category_btn'])){
    $surname=$_POST['surname'];

    $ona=$_POST['ona'];
    $nin=$_POST['nin'];
    $address=$_POST['address'];
    $pn=$_POST['pn'];
    $email=$_POST['email'];
    $image=$_FILES['image']['name'];
    
    $path="./images";
    
    $image_ext=pathinfo($image, PATHINFO_EXTENSION);    
    $filename=time(). '.'.$image_ext;

    $conn=new mysqli('localhost', 'root', '','chatty');
if($conn-> connect_error){
    die('connection failed :' .$conn-> connect_error);
}else{
    $stmt=$conn->prepare("insert into personal(surname, ona, nin, address, pn, email, image)
    values(?,?,?,?,?,?,?)");
    $stmt->bind_param("ssisiss", $surname, $ona, $nin, $address, $pn, $email, $image);
    $stmt-> execute();
    header("location: loan.php");
    move_uploaded_file($_FILES['image']['tmp_name'], $path. '/'.$image);
    $stmt ->close();
    $conn->close();

}
}
?>

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


if(isset($_POST['employ_category_btn'])){
    $aye=$_POST['aye'];

    $cj=$_POST['cj'];
    $ms=$_POST['ms'];
    
    $image=$_FILES['image']['name'];
    
    $path="../images";
    $image_ext=pathinfo($image, PATHINFO_EXTENSION);    
    $filename=time(). '.'.$image_ext;

    $conn=new mysqli('localhost', 'root', '','chatty');
if($conn-> connect_error){
    die('connection failed :' .$conn-> connect_error);
}else{
    foreach($aye as $item){
    $stmt=$conn->prepare("insert into employ(aye, cj, ms, image)
    values(?,?,?,?)");
    $stmt->bind_param("ssis", $item, $cj, $ms, $image);
    $stmt-> execute();
    header("location: fin.php");
    move_uploaded_file($_FILES['image']['tmp_name'], $path. '/'.$image);
    $stmt ->close();
    $conn->close();
    }
}
}
?>

<?php


if(isset($_POST['other_category_btn'])){
    $loan=$_POST['loan'];

    $colleteral=$_POST['colleteral'];
    $bvn=$_POST['bvn'];
    $pi=$_POST['pi'];
    


    $conn=new mysqli('localhost', 'root', '','chatty');
if($conn-> connect_error){
    die('connection failed :' .$conn-> connect_error);
}else{
    
    $stmt=$conn->prepare("insert into other(loan, colleteral, bvn, pi)
    values(?,?,?,?)");
    $stmt->bind_param("ssis", $loan, $colleteral, $bvn, $pi);
    $stmt-> execute();
    header("location: index.php");

    move_uploaded_file($_FILES['image']['tmp_name'], $path. '/'.$image);
    $stmt ->close();
    $conn->close();
    
}
}
?>