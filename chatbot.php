<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Team 404</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/icon.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/pstyle.css" rel="stylesheet">
</head>

<body style="background-color:#353936;">
    <!-- Topbar Start -->
    <div>
        <div>
            <h4 style="padding-top:50px; color: #701a75;">Ask me anything<a href="index.php"><img src="img/404.jpg" alt="404" style="width:50px; height:50px;"></a></h4>
    
<?php
require_once 'connection.php';


    if(isset($_GET['search'])){
        $filtervalues=$_GET['search'];
        $query ="SELECT * FROM chatt  WHERE CONCAT(question, replies) LIKE '%$filtervalues%' ";
        $query_run= mysqli_query($conn, $query); 


        if(mysqli_num_rows($query_run)>0){
                   
            foreach($query_run as $items){
                ?>
                    <div class="container-fluid pt-5" style="border: 5px outset #701a75; border-style: dashed; border-top-left-radius: 40%; border-bottom-right-radius: 40%; border-bottom-left-radius: 40%; border-top-right-radius: 40%;">
                        <div class="row px-xl-5">
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1" >

                        <div class="card product-item mb-4" style="background-color:#701a75; border: 5px outset gold; border-top-left-radius: 20%;" >
                            
                                <h6 class="text-truncate mb-3" style="padding-top:10px; padding-bottom:5px;"><?=$items['question'];?></h6>
                        </div>

                                <div class="card product-item mb-4" style="background-color:gold; border: 5px outset #701a75; border-bottom-right-radius: 20%; position:relative; left:170%;">
                                    <h6 style="color:#701a75; padding-top:10px; padding-bottom:5px; font-size: 20px;"><?=$items['replies'];?></h6>
                                </div>
                            
                    </div>
                    </div>
        </div>
    </div>
                <?php
                    
            }
        }
        }
                ?>
        <div class="mb-4" >
            <form action="chatbot.php" method="GET" id="search" style="width:100%; padding-top: 30%;">
            <div class="input-group">
                            <input type="text" class="form-control" name="search" value="<?php if(isset($GET['search'])){echo $_GET['']; }?>" placeholder="Ask with specific keywords">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-question-circle" aria-hidden="true"></i></button>
                                </span>
                            </div>
                        </div>
                    </form>
                        </div>
        </div>
    </div>
</body>
</html>