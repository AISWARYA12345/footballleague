<?php
   include 'league_header.php';
?>
  <div class="section-content">
    <div class="container">
      <h1 class="sec-main-title">
      Team List</h>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sec-des">
            <?php
            include('connect.php');
            echo "TEAM TABLE";
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
            echo '<table class="res-table table-w-100"  border=1 align=center><tr>';
              while ($i < mysql_num_fields($result))
              {
              $meta = mysql_fetch_field($result, $i);
              echo '<th>' . ucfirst($meta->name) . '</th>';
              $i = $i + 1;
              }
              echo '<th>Delete</th></tr>';
              $i = 0;
              while ($row = mysql_fetch_row($result))
              {
              echo '<tr>';
                $count = count($row);
                $y = 0;
                $idval='1';
                while ($y < $count)
                {
                $c_row = current($row);
                if($y==0)
                $idval=$c_row;
                echo '<td>' . $c_row . '</td>';
                next($row);
                $y = $y + 1;
                }
                echo '<td><a class=btn-tbl-del href=delComplaint.php?id='.$idval.'>Delete</a></td>';
              echo '</tr>';
              $i = $i + 1;
              }
            echo '</table>';
            mysql_free_result($result);
            }
            mysql_close ($con);
            
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <footer id="footer" class="footer">
    <div class="footer-bottom">
      <div class="container">
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