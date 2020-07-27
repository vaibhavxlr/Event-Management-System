<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Login</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form action="dashboard.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="adminun" class="form-control" placeholder=" " required="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="adminps" class="form-control" placeholder=" " required="">
                    </div>
       
                    <button type="submit" name="login" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Login</button>
                </form>
                
            </div>

        </div>
    </div>
<?php
include('db.php');
if(isset($_POST['login']))
{
    $u=$_POST['adminun'];
    $ps=$_POST['adminps'];
    $qry=mysqli_query($con,"SELECT * from admin where username='$u' and password='$ps'");
    $res=mysqli_fetch_array($qry);
    if($res['username']==$u)
        {
            if($res['password']==$ps)
            {
              echo "
              <script>
              alert('login succesfull');
              window.location='dashboard.php';
              </script>
              ";
            }
            else
            {
              echo "
              <script>
              alert('unsuccesfull');
              window.location='adminlogin.php';
              </script>
              ";
            }
        }
        else
        {
              echo "
              <script>
              alert('wrong username and password');
              </script>
              ";
        }
}
?>

    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>