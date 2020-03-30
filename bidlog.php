<?php require ("connect.php"); 

?>
<script>



</script>
<style>
body {
font-family: Tahoma;
font-size: 9pt;
}
#demoTable thead th {
white-space: nowrap;
overflow-x:hidden;
padding: 3px;
}
#demoTable tbody td {
padding: 3px;
}
</style>
<meta charset="UTF-8"></head>
<body>
<div id="container">
    <?php
        $id = $_GET['id'];
        $pname = mysql_query("SELECT * FROM player WHERE sid='$id'")or die(mysql_error());
        $pnamea = mysql_fetch_array($pname);
    ?>
    <center><h5><?php echo $pnamea['prodname']; ?> Bidding Log</h5></center>
    <div id="bodycon">
        <table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="700">
            <thead>
                <?php echo '<tr>';
                    echo '<th sort="index" align="center">Bidder</th>';
                    echo '<th sort="date" align="center">Date of Bid Placed</th>';
                    echo '<th sort="description" align="center">Amount</th>';
                    
                echo'</tr>'; ?>
            </thead>
            <tbody>
                <?php
                            $prodid = $_GET['id'];
                            $query = mysql_query("SELECT * FROM team LEFT JOIN player ON player.sid = team.sid LEFT JOIN player ON player.sid = team.sid WHERE player.sid = '$prodid'") or die(mysql_error());
                            while ($prod = mysql_fetch_array($query)){
                                echo
                                "<tr>
                    <td align='center'>".$prod['lastname'].", ".$prod['firstname']."</td>
                    <td align='center'>".$prod['biddatetime']."</td>
                    <td align='center'>P".$prod['bidamount']."</td>
                                </tr>";
                            }
                ?>
            </tbody>
            <tfoot class="nav">
            <tr>
                <td colspan=7>
                    <div class="pagination"></div>
                    <div class="paginationTitle">Page</div>
                    <div class="selectPerPage"></div>
                    <div class="status"></div>
                </td>
            </tr>
            </tfoot>
        </table>
        
        </div> <!-- container -->
    </body>
</html>