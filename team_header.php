<?php
   session_start();
     include('connect.php');
?> 
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Game Info</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="css/3dslider.css" />
   <link rel="stylesheet" href="css/style.css">
   <script src="js/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
   <style>
   .inner-page-banner {
   min-height: 106px;
   }
   .section-content{
   padding: 30px 0;
   min-height: 100vh;
   }
   .sec-main-title{
   color: #3a6cb5;
   }
   .main-menu-section .navbar.navbar-inverse .navbar-collapse ul.nav.navbar-nav li.active a{
   color: #d8302f;
   }
   /*Page*/
   </style>
</head>
<body class="game_info" data-spy="scroll" data-target=".header">
   <!-- LOADER -->
   <div id="preloader">
      <img class="preloader" src="images/loading-img.gif" alt="">
   </div>
   <!-- END LOADER -->
   <section id="top">
      <header>
         <div class="container">
            <div class="header-top">
               <div class="row">
                  <div class="col-md-4">
                     <div class="full">
                        <div class="logo">
                           <a href="leaguehome.php"><img src="images/logo.png" alt="#" /></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="right_top_section">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                 <nav class="navbar navbar-inverse">
                                    <div class="navbar-header">
                                       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       </button>
                                       <a class="navbar-brand" href="#">Menu</a>
                                    </div>
                                    <?php //include('leaguemenu.php'); ?>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a href="teamhome.php">Home</a></li>
                                          <li><a href="team_bid_player.php">Add players</a></li>
                                          <li><a href="viewteamschedule.php">View schedule</a></li>
                                          <li><a href="viewplayer.php">View players</a></li>
                                          <li><a href="team_bid_player.php">Bidding</a></li>
                                          <li><a href="logout.php">Logout</a></li>
                                       </ul>
                                    </div> 
                                    <!-- /.nav-collapse -->
                                 </nav>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="inner-page-banner">
         <div class="container">
         </div>
      </div>
   </section>
   <div class="clearfix"></div>
      <div class="breadcrumb-sec">
      <div class="container">
         <div class="bread-box">
            <h3><?php echo $_SESSION['user']; ?></h3>
         </div>
         
      </div>
   </div>