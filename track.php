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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body style="background-color:#353936; color:#701a75;">
    <!-- Topbar Start -->
    <div>
        <div>
            <h4 style="padding-top:50px; color: #fff;">Find out about your finances<a href="index.php"><img src="img/404.jpg" alt="404" style="width:50px; height:50px;"></a></h4>
    
<?php
require_once 'connection.php';
    if(isset($_GET['search'])){
        $filtervalues=$_GET['search'];
        $query ="SELECT * FROM acct  WHERE CONCAT(pi) LIKE '%$filtervalues%' ";
        $query_run= mysqli_query($conn, $query); 


        if(mysqli_num_rows($query_run)>0){
                   
            foreach($query_run as $items){
                ?>
                    <div class="container-fluid pt-5">
                        <div class="row px-xl-5">
                    
                    
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">

                        <div>
                           
                            <div>
                                
                        <form method="POST" action="tr.php?id=<?=$items['id'];?>">
                            <label for="" class="form-label"><b>Airtime:</b></label>
                            <input type="text" name="name" id="name" placeholder="Enter order..." value="N<?=$items['jan'];?>" readonly><br/>
                            <label for="" class="form-label"><b>Money Sent:</b></label>
                            <input type="text" name="price" id="price" placeholder="Enter order..." value="N<?=$items['feb'];?>" readonly><br/>
                            <label for="" class="form-label"><b>ATM withdrawal:</b></label>
                            <input type="text" name="price" id="price" placeholder="Enter order..." value="N<?=$items['mar'];?>" readonly><br/>
                            <label for="" class="form-label"><b>Utility Bills:</b></label>
                            <input type="text" name="price" id="price" placeholder="Enter order..." value="N<?=$items['apr'];?>" readonly><br/>
                            <label for="" class="form-label"><b>Balance:</b></label>
                            <input type="text" name="price" id="price" placeholder="Enter order..." value="N<?=$items['may'];?>" readonly>
                                
                            </form>  
                            </div>
  
                        </div>
                    </div>

        </div>
    </div>                            
                        </div>
                            
                    </div>
                    </div>
        </div>
    </div>
    
<div class="row px-xl-5">
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
<script>
var jan='<?=$items['jan'];?>'
var feb='<?=$items['feb'];?>'
var mar='<?=$items['mar'];?>'
var apr='<?=$items['apr'];?>'
var may='<?=$items['may'];?>'
console.log(jan);
var xValues = ['Airtime', "Money Sent", "ATM Withdrawal", "Utility Bills", "Balance"];
var yValues = [jan, feb, mar, apr, may];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Your expenditures"
    }
  }
});
</script>
</div>
                <?php
                    
            }
        }
        }
                ?>
        
        <div class="mb-4" >
            <form action="track.php" method="GET" id="search" style="width:80%; ">
            <div class="input-group">
                            <input type="text" class="form-control" name="search" value="<?php if(isset($GET['search'])){echo $_GET['']; }?>" placeholder="Input your PIN">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-question-circle" aria-hidden="true"></i></button>
                                </span>
                            </div>
                        </div>
                    </form>
                    <h4 style="color:#fff;">Suggestions:</h4>
                    <p style="color:#fff;"><i>(1.) FCMB saving investment plan: Saving for the rainy days has never been this easy with FCMB saving investment plan customized for you</p></i><br/>
                    <p style="color:#fff;"><i>(2.) Scheduled payment of bills: You benifit 2% interest at the end of the month when you schedule your bills payment and let use handle it automatically</p></i><br/>
                    <p style="color:#fff;"><i>(3.) Life insurance monthly payment plan: This is the most stressfree life insurance plan for the financially wise</p></i>
                        </div>
        </div>
    </div>


</body>
</html>