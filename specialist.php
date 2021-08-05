<?php
ob_start();
?>
<!doctype html>
<html lang="en">

<head>
<?php include('./includes/dbconnection.php'); 
$sql = "SELECT id, Marque, Model, VYear, Miles, Sold, Description1, Description2, Price, Pic1 FROM tbloutwoodlist WHERE Category = '5' ORDER BY Price DESC";

$result = $conn->query($sql);


?>    
    <title>Outwood Cars — Specialist Vehicles</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Icon css -->
    <link href="assets/css/icon.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/purecookie.css" async />
    <script src="assets/js/purecookie.js" async></script>
    <link href="assets/css/outwood.css" rel="stylesheet" type="text/css">
    <meta name="google-site-verification" content="F0iHs5sDK-Z29EbhAuOQTLNLn02fJ5R45l8pnsCjwg8" />
</head>

<body>
  <div class="mywrapper">
    <div id="banner-pic">
        <img id="mbg" src="assets/images/specialist-header.png" alt="" style="width:100%" />
    </div>
    <div id="headerM" class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-7 text-center text-md-left">
                <div id="logo"> <a href="./index.php"><img src="assets/nav-images/outwood-cars.png" width="368" height="103" alt="Outwood Cars" /></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 pl-md-4 pt-4">
                <div class="call-to-action">
                    <p>FOR FURTHER INFORMATION OR TO DISCUSS<br>
                        YOUR REQUIREMENTS PLEASE CALL US ON</p>
                    <h2 style="color:#4492C0"><a href="tel:01794367800" style="color:#4492C0">
                            <h2>07736 360360</h2>
                            <p style="margin-bottom:0px"><a href="mailto:sales@outwoodcars.com?subject=Website Enquiry">E: SALES@OUTWOODCARS.COM</p>
                        </a>
                </div>
            </div>
        </div>
    </div>

    <nav id="navm" class="navbar navbar-expand-sm navbar-light bg-transparent mt-md-4">
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 w-100">
      <li class="nav-item" id="menu">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item" id="menu">
        <a class="nav-link" href="classic.php">CLASSIC</a>
      </li>
      <li class="nav-item active" id="menu">
        <a class="nav-link" href="specialist.php">SPECIALIST</a>
      </li>
      <li class="nav-item" id="menu">
        <a class="nav-link" href="selling.php">SELLING</a>
      </li>
      <li class="nav-item" id="menu">
        <a class="nav-link" href="buying.php">PERSONAL SEARCH</a>
      </li>
      <li class="nav-item" id="menu">
        <a class="nav-link" href="contact.php">CONTACT US</a>
      </li>
    </ul>
  </div>

</nav>


<div class="container-fluid mt-5">

  <div id="page-frame">
            <H2>Specialist Vehicles</H2>
            <div class="row">
<?php
      function decodeString($str) {
        $str = str_replace('&!@#&', "'", $str);
        $str = str_replace('*!@#*', '"', $str);
        return $str;
      }
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $Pic1 = './admin' . substr($row["Pic1"], (strripos($row["Pic1"], '/upload/')), strlen($row["Pic1"]) );
          // $Pic2 = '.' . substr($row["Pic2"], (strripos($row["Pic2"], '/upload/')), strlen($row["Pic2"]) );
          // $Pic3 = '.' . substr($row["Pic3"], (strripos($row["Pic3"], '/upload/')), strlen($row["Pic3"]) );
          // $Pic4 = '.' . substr($row["Pic4"], (strripos($row["Pic4"], '/upload/')), strlen($row["Pic4"]) );

        
    ?>                
            <div class="onethird col-md-4 col-sm-6 mb-3">
                <div class="onethird-banner">
                    <p><?php echo decodeString($row["Marque"]); ?><span style="float:right; font: 18px/18px 'gothammediumregular', sans-serif; color:#000000"><?php echo decodeString($row["VYear"]); ?></span></p>
                </div>
                <a class="btn btn-link p-0 m-0 border-0" href='vehicle.php?id=<?php echo $row["id"]; ?>' target="_blank"><img class="img-fluid" src='<?php echo $Pic1; ?>' alt='<?php echo decodeString($row["Model"]); ?>' /></a>
                <h2><?php echo decodeString($row["Model"]); ?></h2>
                <p><?php echo decodeString($row["Description1"]); ?>,&nbsp;<?php echo decodeString($row["Description2"]); ?>&#8230;</p>
                <p style="font-family:gothamboldregular, sans-serif; font-size:18px; margin-top:0px; padding:0;"><?php echo decodeString($row["Price"]); ?></p>
                <a class="btn" href='vehicle.php?id=<?php echo $row["id"]; ?>' target="_blank">
                    Find out more...
                </a>
            </div>
            
            <?php
                    }
                }
            ?>
          </div>

        </div>
  
</div>

</div>

<div style="height: 50px; margin-top: 100px;"></div>
<?php require_once('footer.php')?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ed130bdb7da77ef"></script>


</body>

</html>












