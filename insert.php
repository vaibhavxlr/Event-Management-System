
<?php
include('db.php');
    if(isset($_POST['submit']))
    {
      $n=$_POST['name'];
      $em=$_POST['email'];
      $t=$_POST['type'];
      $d=$_POST['desp'];
      $sd=$_POST['sdate'];
      $ed=$_POST['edate'];
      $l=$_POST['loc'];
      $g=$_POST['guest_no'];
      $ss=$_POST['seatStyle'];
      $cn=$_POST['chairsno'];
      $tn=$_POST['tableno'];
      $a=$_POST['aud'];
      $v=$_POST['vid'];
      $ct=$_POST['cat_type'];
      $r=$_POST['req'];
      $qry=mysqli_query($con,"INSERT INTO `event`(`name`, `email`, `type`, `desp`, `sdate`, `edate`,`loc`, `guest_no`, `seatStyle`, `chairsno`, `tablesno`, `aud`, `vid`, `cat_type`, `req`) VALUES ('$n','$em','$t','$d','$sd','$ed','$l','$g','$ss','$cn','$tn','$a','$v','$ct','$r')") or die(mysqli_error($con));

      if($qry==true)
      {
        echo "
              <script>
                  alert('registered successfully');
                  window.location='aaa.php';
                  </script>
        ";
      }
      else
      {
        echo "
               <script>
                  alert('failed');
                  </script>
        ";
      }
    }
?>