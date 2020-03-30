<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php?msg='Login please'");
}

?>

<div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a href="indexmenu.php">Home</a></li>
                                          <li><a href="approveteam.php">Approve Team</a></li>

                                          <li><a href="approveplayer.php">Approve players</a></li>

                                          <li><a href="approvecoach.php">Approve Coach</a></li>
                                          <li><a href="logout.php">Logout</a></li>
                                       </ul>
                                    </div>
