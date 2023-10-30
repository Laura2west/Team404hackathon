<?php
    require("connection.php");
    session_start();
    if(!isset($_SESSION['LoginId'])){
        header("location: login.php");
    }

    $sqa="SELECT * FROM acct";
    $all_acct=$conn->query($sqa);
    $sqc="SELECT * FROM chatt";
    $all_chatt=$conn->query($sqc);
    $sqp="SELECT * FROM personal";
    $all_per=$conn->query($sqp);
    $sqo="SELECT * FROM other";
    $all_other=$conn->query($sqo);
    $sqr="SELECT * FROM request";
    $all_request=$conn->query($sqr);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Team 404</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/icon.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->

    <link href="css/cat.css" rel="stylesheet">
</head>

<body style="color:gold;" >

<nav class="navbar navbar-expand-lg  fixed-top" id="mainNav" style="color:#fff; background-color:violet;">
<ul class="navbar-nav text-uppercase ms-auto py-4" style=" color:#fff; border-color:#fff; border-style: dotted; border-width: 2px;">
    <li class="nav-item"><a class="nav-link" href="#1">Customer account details</a></li>
    <li class="nav-item"><a class="nav-link" href="#2">Set Replies for chatbot</a></li>
    <li class="nav-item"><a class="nav-link" href="#3">Chatbot</a></li>
    <li class="nav-item"><a class="nav-link" href="#4">Peer Loan</a></li>
    <li class="nav-item"><a class="nav-link" href="#5">Other Information</a></li>
    <form  method="POST" enctype="multipart/form-data">
        <button type="submit"  name="log_out" class="spbutton" style="background-color:blueviolet">Logout</button>
            
    </form>
</ul>

</nav>

    

<?php
if(isset($_POST['log_out'])){
    
        session_destroy();
       
        header("location: login.php");
    }

    
?>
    <!-- JavaScript Libraries -->

    <!-- Template Javascript -->

    
    <script src="js/main.js"></script>

<section class="page-section" id="1">
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="row g-5">
            <h2>Customer account details</h2>
        </div>
        <div class="mb-3">
        <table style="width:100%">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Account Number</td>
                <td>Peer Identification Number</td>
                <td>Airtime</td>
                <td>Money Sent</td>
                <td>ATM Withdrawal</td>
                <td>Utility bills</td>
                <td>Balance</td>

                </tr>
                <?php
                    while($row=mysqli_fetch_assoc($all_acct)){
                ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["cname"];?></td>
                <td><?php echo $row["anum"];?></td>
                <td><?php echo $row["pi"];?></td>
                <td><?php echo $row["jan"];?></td>
                <td><?php echo $row["feb"];?></td>
                <td><?php echo $row["mar"];?></td>
                <td><?php echo $row["apr"];?></td>
                <td><?php echo $row["may"];?></td>
                <td>
                    
                    <td><?php echo $row["created_at"];?></td>
                    <td>
                        <form action="code.php" method="POST">
                        <button type="submit" name="user_delete" value="<?php echo $row["id"];?>">Delete</button>
                        </form>
                    </td>
                    
            </tr>
                
                <?php
                    }
                ?>
        </table>

                    </div>
                </div>
            </div>
</section>
<section class="page-section" id="3">
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="row g-5">
                        <h2>Chatbot</h2>
                    </div>
                    <div class="mb-3">
                        <table style="width:100%">
                            <tr>
                              <td>Id</td>
                              <td>Question</td>
                              <td>Replies</td>
                        
                            </tr>
                            <?php
                         while($row=mysqli_fetch_assoc($all_chatt)){
                            ?>
                            <tr>
                              <td><?php echo $row["id"];?></td>
                              <td><?php echo $row["question"];?></td>
                              <td><?php echo $row["replies"];?></td>

                              <td>
                                <form action="notcode.php" method="POST">
                                    <button type="submit" name="user_delete" value="<?php echo $row["id"];?>">Delete</button>
                                </form>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                          </table>

                    </div>
                </div>
            </div>
</section>


<section class="page-section" id="2">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Set Replies</h2>
                    
        </div>

        <div>
            <form action="chatt.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                <label for="" class="form-label">Question </label>
                <input type="text" class="form-control"  name="question" id="question" placeholder="Enter your question" >
                                           
            </div>
                <div class="mb-3">
                <label for="" class="form-label">Replies </label>
                <input type="text" class="form-control"  name="replies" id="replies" placeholder="Enter your replies" >
                                           
            </div>
                       
            
            <button type="submit"  name="rep_category_btn" class="btn btn-primary">Submit</button>
        </form>
                </div>
                
            </div>
        </section>


        <section class="page-section" id="2">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Account numbers</h2>
                    
                </div>

                <div>
            <form action="chatt.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                <label for="" class="form-label">Name </label>
                <input type="text" class="form-control"  name="cname" id="cname" placeholder="Enter client's name" >
                                           
            </div>
                <div class="mb-3">
                <label for="" class="form-label">Account Number</label>
                <input type="text" class="form-control"  name="anum" id="anum" placeholder="Enter account number of client" >
                                           
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Peer Identification Number(PIN)</label>
                <input type="text" class="form-control"  name="pi" id="pi" placeholder="Enter PIN" >
                                           
            </div>
            <div class="mb-3">
                <label for="" class="form-label">January:</label>
                <input type="text" class="form-control"  name="jan" id="jan" placeholder="Enter January expenses" >
                                           
            </div>
            <div class="mb-3">
                <label for="" class="form-label">February:</label>
                <input type="text" class="form-control"  name="feb" id="feb" placeholder="Enter February expenses" >
                                           
            </div>
            <div class="mb-3">
                <label for="" class="form-label">March:</label>
                <input type="text" class="form-control"  name="mar" id="mar" placeholder="Enter March expenses" >
                                           
            </div>
            <div class="mb-3">
                <label for="" class="form-label">April:</label>
                <input type="text" class="form-control"  name="apr" id="apr" placeholder="Enter April expenses" >
                                           
            </div>
            <div class="mb-3">
                <label for="" class="form-label">May:</label>
                <input type="text" class="form-control"  name="may" id="may" placeholder="Enter May expenses" >
                                           
            </div>
                       
            
            <button type="submit"  name="acc_category_btn" class="btn btn-primary">Submit</button>
        </form>
                </div>
                
            </div>
        </section>

<section class="page-section" id="4">
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="row g-5">
            <h2>Loan Details</h2>
        </div>
        
        <div class="mb-3">
        <table style="width:100%">
            <tr>
                <td>Surname</td>
                <td>Other Names</td>
                <td>NIN</td>
                <td>Address</td>
                <td>Phone</td>
                <td>Email</td>
                <td>Image</td>
                <td>Created at</td>
                
                </tr>
                <?php
                    while($row=mysqli_fetch_assoc($all_per)){
                ?>
            <tr>
                <td><?php echo $row["surname"];?></td>
                <td><?php echo $row["ona"];?></td>
                <td><?php echo $row["nin"];?></td>
                <td><?php echo $row["address"];?></td>
                <td><?php echo $row["pn"];?></td>
                <td><?php echo $row["email"];?></td>
                
                <td>
                    <img src="../images/<?php echo $row["image"];?>" alt="Image" width=50 height=50></td>
                    <td><?php echo $row["created_at"];?></td>
                    <td>
                <td>
                <form action="willcode.php" method="POST">
            <button type="submit" name="user_delete" value="<?php echo $row["id"];?>">Delete</button>
        </form>
                </td>
                
                </tr>
                <?php
                    }
                ?>
                
        </table>

                    </div>
                </div>
            </div>
    </section>

<section class="page-section" id="5">
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="row g-5">
            <h2>Other Information</h2>
        </div>
        
        <div class="mb-3">
        <table style="width:100%">
            <tr>
                <td>Loan use</td>
                <td>Collateral</td>
                <td>BVN</td>
                <td>PIN</td>
                
                <td>Time Ordered</td>
                </tr>
                <?php
                    while($row=mysqli_fetch_assoc($all_other)){
                ?>
            <tr>
                <td><?php echo $row["loan"];?></td>
                <td><?php echo $row["colleteral"];?></td>
                <td><?php echo $row["bvn"];?></td>
                <td><?php echo $row["pi"];?></td>
                
                <td><?php echo $row["created_at"];?></td>
                <td>
                <form action="willcode.php" method="POST">
            <button type="submit" name="user_delete" value="<?php echo $row["id"];?>">Delete</button>
        </form>
                </td>
                
                </tr>
                <?php
                    }
                ?>
                
        </table>

                    </div>
                </div>
            </div>
</section>
<section class="page-section" id="5">
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="row g-5">
            <h2>Request Payment</h2>
        </div>
        
        <div class="mb-3">
        <table style="width:100%">
            <tr>
                <td>Name</td>
                <td>Date given</td>
                <td>PIN of borrower</td>
                
                

                </tr>
                <?php
                    while($row=mysqli_fetch_assoc($all_request)){
                ?>
            <tr>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["dg"];?></td>
                <td><?php echo $row["pi"];?></td>

                
                
                <td>
                <form action="willcode.php" method="POST">
            <button type="submit" name="request_delete" value="<?php echo $row["id"];?>">Delete</button>
        </form>
                </td>
                
                </tr>
                <?php
                    }
                ?>
                
        </table>

                    </div>
                </div>
            </div>
</section>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</body>

</html>