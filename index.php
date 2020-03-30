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
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
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
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           <!-- social icon -->
                           <ul class="social-icons pull-left">
                              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                              <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                           <!-- button section -->
                           <ul class="login">
                              <li class="login-modal">
                                 <a href="login.php" class="login"><i class="fa fa-user"></i>Login</a>
                              </li>
                              <li>
                                 <div class="cart-option">
                                    <a href="register.php"><i class="fa fa-shopping-cart"></i>Register</a>
                                 </div>
                              </li>
                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
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
                                <?php //include('indexmenu.php'); ?>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a href="index.php">Home</a></li>
                                          <li><a href="javascript:void(0)" id="player">Players</a></li>

                                          <li><a href="vschedule.php">Matches</a></li>

                                          <li><a href="viewpointtable.php">Point Table</a></li>
                                          <li><a href="javascript:void(0)" id="team">Teams</a></li>
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
            </div>
         </header>
         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>Players</h3>
               <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Players</li>
               </ul>
               
               
              
            </div> 
         </div>
      </section>
      
      <style>
      
     /* @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.col-item
{
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;
}
.col-item .photo img
{
    margin: 0 auto;
    width: 100%;
}

.col-item .info
{
    padding: 10px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}

.col-item:hover .info {
    background-color: #F5F5DC;
}
.col-item .price
{
    /*width: 50%;
    float: left;
    margin-top: 5px;
}

.col-item .price h5
{
    line-height: 20px;
    margin: 0;
}

.price-text-color
{
    color: #219FD1;
}

.col-item .info .rating
{
    color: #777;
}

.col-item .rating
{
    /*width: 50%;
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}

.col-item .separator
{
    border-top: 1px solid #E1E1E1;
}

.clear-left
{
    clear: left;
}

.col-item .separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.col-item .separator p i
{
    margin-right: 5px;
}
.col-item .btn-add
{
    width: 50%;
    float: left;
}

.col-item .btn-add
{
    border-right: 1px solid #E1E1E1;
}

.col-item .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}

      */
      </style>
      
      
      <?php /*?><div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Carousel Product Cart Slider</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Sample Product</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
    
</div><?php */?>
 <div class="container">
  <div class="row">
  <div class="col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
      <?php
include('connect.php');

$query = 'select * from player';
$result = mysql_query($query);
if (!$result)
{
 $message = 'ERROR:' . mysql_error();
 return $message;
}
else
{
 $i = 0;
 
 //
 //echo '<html><body>';
 while ($i < mysql_num_fields($result))
 {
	 
  //$meta = mysql_fetch_field($result, $i);
  //echo '<th>' . ucfirst($meta->name) . '</th>';
  $i = $i + 1;
 }

 $i = 0;
 while ($row = mysql_fetch_row($result))
 {
	 //var_dump($row);
	 echo '<div class="col-md-3" style="text-align:center;">';
	 echo '<img style="    height: 188px;
    width: 100%;" src="uploads/' . $row['0'].'.jpg"><br>';
	 echo '<label>' . $row['1']. '</label>';
	 
	 echo '</div>';
	 
  //echo '<tr>';
  //$count = count($row);
  //$y = 0;
  //$idval='1';
  //while ($y < $count)
  //{
   //$c_row = current($row);
   //if($y==0)
    //$idval=$c_row;
   //echo '<td>' . $c_row . '</td>';
   ///next($row);
   //$y = $y + 1;
  //}
  
  //echo '</tr>';
  //$i = $i + 1;
 }
 //echo '</body></html>';
 mysql_free_result($result);
}
mysql_close ($con);

?>
</div></div></div>
<div class="inner-information-text" style="margin-bottom: 20px;
    margin-top: 20px;">
            <div class="container">
               <h3>Teams</h3>
               <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Teams</li>
               </ul>
               
               
              
            </div> 
         </div>
         
   <div class="container">
  <div class="row">
  <div class="col-md-12" style="margin-top:10px;">
      <?php
include('connect.php');

$query = 'select * from team';
$result = mysql_query($query);
if (!$result)
{
 $message = 'ERROR:' . mysql_error();
 return $message;
}
else
{
 $i = 0;
 
 //
 //echo '<html><body>';
 while ($i < mysql_num_fields($result))
 {
	 
  //$meta = mysql_fetch_field($result, $i);
  //echo '<th>' . ucfirst($meta->name) . '</th>';
  $i = $i + 1;
 }

 $i = 0;
 while ($row = mysql_fetch_row($result))
 {
	 //var_dump($row);
	 echo '<div class="col-md-3" style="text-align:center;">';
	 echo '<img style="    height: 188px;
    width: 100%;" src="uploads/' . $row['0'].'.jpg"><br>';
	 echo '<label>' . $row['1']. '</label>';
	 
	 echo '</div>';
	 
  //echo '<tr>';
  //$count = count($row);
  //$y = 0;
  //$idval='1';
  //while ($y < $count)
  //{
   //$c_row = current($row);
   //if($y==0)
    //$idval=$c_row;
   //echo '<td>' . $c_row . '</td>';
   ///next($row);
   //$y = $y + 1;
  //}
  
  //echo '</tr>';
  //$i = $i + 1;
 }
 //echo '</body></html>';
 mysql_free_result($result);
}
mysql_close ($con);

?>
</div></div></div>      
         
     <div class="inner-information-text">
            <div class="container">
               <h3></h3>
               <ul class="breadcrumb">
                  <li></li>
                 
               </ul>
               
               
              
            </div> 
         </div>    
      <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               
               </div>
               
               
               </div>
             
            </div>
         </div>
         
         </div>
      </footer>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/custom.js"></script>
   </body>
</html>

<script>
$(document).ready(function(e) {
   $('#player').click(function(){
   
   var scrolled=0; 
     scrolled=scrolled+400;
        $('html, body').animate({
          scrollTop:  scrolled
   
   });
	 });
	
	$('#team').click(function(){
   
   var scrolled=0; 
     scrolled=scrolled+800;
        $('html, body').animate({
          scrollTop:  scrolled
   
   });
	 });
	
});


</script>