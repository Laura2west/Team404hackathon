<?php
    require("connection.php");
    session_start();
    if(!isset($_SESSION['UserLogin'])){
        header("location: userlogin.php");
    }


    $sqc="SELECT * FROM chatt";
    
    $all_chatt=$conn->query($sqc);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Team 404</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/icon.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/my.css" rel="stylesheet" />
    </head>
    <body style="background-color: #701a75;">
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    

        </nav>
        <!-- Masthead-->
    <div>

        <section class="page-section" id="contact">
            <div class="container" >
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">INGRESSIVE FOR GOOD</h2>
                    <h3 class="section-subheading text-muted">HACKATHON<br/> WITH FCMB</h3>
                </div>
                <div>
                    <div class="">
                        <h4 style="color:#701a75;">Nice to meet you, I am B.I.L.I.V What can I help you with?</h4>

                    </div>
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0" style=" border-color:#fff; border-style: dotted; border-width: 2px;">
                        <li class="nav-item"><a class="nav-link" href="#1">Open account</a></li>
                        <li class="nav-item"><a class="nav-link" href="#2">Request a loan</a></li>
                        <li class="nav-item"><a class="nav-link" href="request.php">Request payment</a></li>
                        <li class="nav-item"><a class="nav-link" href="chatbot.php">Chat with us</a></li>
                        <li class="nav-item"><a class="nav-link" href="track.php">Track Finances</a></li>
                        <li class="nav-item"><a class="nav-link" href="pie.php">About</a></li>
                    </ul>
                </div>
                
            </div>
        </section>
    
    
        <section class="page-section bg-light" id="1" style="background-image: url('img/splashyellow.jpg'); background-repeat: no-repeat;
  background-size: 100%" ;>
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Open account</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Do you want to be a part of us, open an account with us</p></div>
                </div>
                <div class="row">
                    <p>Unlock the convenience and security of modern banking from the comfort of your own home. With our hassle-free online banking platform, managing your finances has never been easier. Say goodbye to long queues and paperwork, and say hello to a seamless and efficient banking experience. Join us today and discover a world of financial possibilities at your fingertips!</p>
                </div>

                <a href="https://onlineaccount.fcmb.com/">Open account</a>
                <img src="img/404.jpg" alt="404" style="width:100px; height:100px;">
            </div>
        </section>
        <div >
        <section class="page-section" id="2" style="background-color:black;";>
            <div class="container" style="background-color:black;";>
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Request for Loan</h2>
                    <h3 class="section-subheading text-muted">Do you want to request a loan?</h3>
                </div>
                <div>
                    <p>Find out which loan plan suits you</p>
                </div>
                <div>
                <form action="borrow.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Surname</label>
                <input type="text" name="surname" placeholder="Enter your surname" class="form-control" id="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Other names</label>
                <input type="text" class="form-control"  name="ona" id="ona" placeholder="Enter your other names" required></textarea>
                                           
            </div>
            <div class="mb-3">
                <label for="" class="form-label">NIN</label>
                <input type="text" name="nin" placeholder="Enter your NIN" class="form-control" id="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Address</label>
                <input type="text" name="address" placeholder="Enter your address" class="form-control" id="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone number</label>
                <input type="text" name="pn" placeholder="Enter your Phone number" class="form-control" id="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="Email" name="email" placeholder="Enter your email" class="form-control" id="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Upload Image of yourself</label>
                <input type="file" name="image" class="form-control" id="">
            </div>
            <button type="submit"  name="loan_category_btn" class="btn btn-primary">Submit</button>
        </form>
                </div>
                
            
            </div>
        </section>
        </div>
    
    
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
