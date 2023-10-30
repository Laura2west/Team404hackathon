<?php
    require("connection.php");
    session_start();
    

    $sqc="SELECT * FROM chatt";
    
    $all_chatt=$conn->query($sqc);
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
    <body >
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

        </nav>
       
        
        <section class="page-section bg-light" id="2">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Request Payment</h2>
                    
                </div>

                <div>
                <form action="borrow.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                <label for="" class="form-label">Name </label>
                <input type="text" class="form-control"  name="name" id="name" placeholder="Enter your name" >
                                           
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Date given</label>
                <input type="date" class="form-control"  name="dg" id="DG" required >
                                           
            </div>
            

            <div class="mb-3">
                <label for="" class="form-label">Peer ID </label>
                <input type="text" class="form-control"  name="pi" id="pi" placeholder="Enter peer identification number" >
                                           
            </div>
            

            
            
            <button type="submit"  name="re_category_btn" class="btn btn-primary">Submit</button>
        </form>
                </div>
                
            </div>
        </section>

    
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
