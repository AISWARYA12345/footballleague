<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php?msg='Login please'");
}

?>

<div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a href="index.php">Home</a></li>
                                          <li><a href="coachviewteams.php">Team</a></li>

                                          <li><a href="coachviewpoint.php">Point table</a></li>

                                         
                                          <li><a href="predictionform.php">prediction</a></li>
                                          <li><a href="viewprediction.php">prediction result</a></li>
                                          
                                          <li><a href="logout.php">Logout</a></li>
                                       </ul>
                                    </div>
