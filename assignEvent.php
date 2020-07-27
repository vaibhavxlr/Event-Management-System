
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SV Events LLC | Home </title>
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
    <!-- Bars Css -->
    <link rel="stylesheet" href="css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
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
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="dashboard.php">SV Events</a>
                </h1>
                <span>SV</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                 <li class="active">
                    <a href="viewEvent.php">
                        <i class="fas fa-th-large"></i>
                        View Event
                    </a>
                </li>
                <li class="active">
                   <a href="assignEvent.php">
                       <i class="fas fa-th-large"></i>
                       Assign Event
                   </a>
               </li>
               <li class="active">
                  <a href="createEmployee.php">
                      <i class="fas fa-th-large"></i>
                      Employee
                  </a>
              </li>
              <li class="active">
                  <a href="viewEmployee.php">
                      <i class="fas fa-th-large"></i>
                      View Employee Details
                  </a>
              </li>
              <li class="active">
                  <a href="userDetails.php">
                      <i class="fas fa-th-large"></i>
                      Registered accounts
                  </a>
              </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="sv.png" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">SV Events LLC</h3>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="adminlogin.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
            <center>
        <div class="card bg-light mb-3" style="max-width: 50rem;">
        <div class="card-header"><font color="black" size="10" face="Times New Roman"><i> ASSIGN EVENT FORM</i></font></h1><br> </div>
        <div class="card-body">
        <h5 class="card-title">Enter details here!</h5>
        <p class="card-text">
        <form method="post">
        <p><center>
        <table border="2" cellpadding="20" style="width:30rem">
        <tr>
        <td><font size="5">Event Id: </font>
        <input type="text" name="eid" class="form-control"/></td>
        </tr>
        <tr>
        <td><font size="5">Event title: </font>
        <input type="text" name="title" class="form-control"/></td>
        </tr>
        <tr>
        <td><font size="5">Event manager :</font>
        <input type="text" name="emanager" class="form-control"/></td>
        </tr>
        <tr>
        <td><font size="5">Catering head: </font>
        <input type="text" name="cathead" class="form-control"/></td>
        </tr>
        <tr>
        <td><font size="5">Media head: </font>
        <input type="text" name="mhead" class="form-control"/></td>
        </tr>
        <tr>
        <td><font size="5">Hall Incharge:</font>
        <input type="text" name="hincharge" class="form-control"/></td>
        </tr>
        <tr>
        <td><font size="5">Total Cost: </font>
        <input type="text" name="cost" class="form-control"/></td>
        </tr>
        </table><br>
        <div>
        <input class="btn btn-primary" type="submit" name="assign" value="Assign">
        </div>
        </center>
        </p>
        </form>
        </p>
        </div>
        </div>
        </center>
        </div>
    </div>

    <?php
      include('db.php');

      if(isset($_POST['assign']))
      {
        $e=$_POST['eid'];
        $t=$_POST['title'];
        $em=$_POST['emanager'];
        $ch=$_POST['cathead'];
        $mh=$_POST['mhead'];
        $hi=$_POST['hincharge'];
        $c=$_POST['cost'];

        $sql=mysqli_query($con,"INSERT INTO `assignevent`(`eid`,`title`,`emanager`, `cathead`, `mhead`, `hincharge`,`cost`) VALUES ('$e','$t','$em','$ch','$mh','$hi','$c')") or die(mysqli_error($con));

        if($sql==true)
        {
            echo "
                 <script>
                   alert('assigned successfully!!');
                   window.location='assignEvent.php';
                 </script>
            ";
        }
        else
        {
            echo "
                 <script>
                   alert('unsuccessfull!!');
                 </script>
            ";
        }

      }
    ?>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->



    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>
