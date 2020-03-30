<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php?msg='Login please'");
}

?>


<div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a href="playerhome.php">Home</a></li>
                                          <li><a href="viewschedule.php">View Schedule</a></li>

                                          <li><a href="viewpredict.php">view Performance</a></li>

                                       
                                          <li><a href="viewpointtable.php">Point Table </a></li>
                                          <li><a href="logout.php">Logout</a></li>
                                       </ul>
                                    </div>
