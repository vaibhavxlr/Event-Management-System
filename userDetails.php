<!DOCTYPE html>
<html lang="en">

<head>
    <title>SV Events LLC | Home </title>
      <link rel="stylesheet" href="frontside/Bootstrap 4/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
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
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="css/bar.css">

    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style4.css">
    <link href="css/fontawesome-all.css" rel="stylesheet">
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
                    <a href="index.html">SV Events</a>
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
                        View Events
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
                    <form method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <!--// Search-from -->
                    <button class="btn btn-style my-2 my-sm-0" type="submit"><a href="dashboard.php">Dashboard</a></button>
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

            <center>
            <div class="card bg-light mb-3" style="max-width: 40rem;">
  <div class="card-header"><font color="black" size="10" face="Times New Roman"><i>DETAILS</i></font></h1><br> </div>
  <div class="card-body">
   <table border="1" class="table table-striped table-bordered" width="100%">
    <thead>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Username</th>
    <th>Password</th>
    <th>Date Of Birth</th>
    <th>Address</th>
    </tr>
    </thead>
    <tbody>

    <?php
    include('db.php');
       $qq = mysqli_query($con,"SELECT * FROM `user`");
          while($res=mysqli_fetch_array($qq))
          {
            echo' 
            <tr>
            <td>' .$res['uname']. '</td>
            <td>' .$res['email']. '</td>
            <td>' .$res['username']. '</td>
            <td>' .$res['passwd']. '</td>
            <td>' .$res['dob']. '</td>
            <td>' .$res['addr']. '</td>
            </tr>
            ';
          }
       ?>

        </div>
    </div>
   
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

