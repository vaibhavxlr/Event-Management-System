<html>
<head>
    <title>Event Form</title>
     <link rel="stylesheet" href="frontside/Bootstrap 4/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
     <script src="js/jquery-1.12.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/js.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
</head>
<body background="bg1.jpg">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="home.php">
    <img src="sv.png" alt="logo" style="width:40px;">
  </a>

  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="services.php">Services</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="contact.php">Contact Us</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="register.php">New User? Register</a>
    </li>
  </ul>
</nav>

<br>
<br>
  <center>
<div class="card" style="width: 48rem;">
  <div class="card-body">

    <h1 class="card-title">Event Planning Form </h1>
    <p class="card-text"><h4>Please provide the requested information and complete this form in its entireity for accurate processing of your event planning request at least TWO WEEKS prior to the event time. </h4></p>

    <form method="post" action="insert.php">
    <h3>Planner Information: </h3><br><br>
    Enter Name: <input type="text" name="name" class="form-control"/>
    Email: <input type="email" name="email" class="form-control"/>
    <br>
    <br>
    <h2>Event Information: </h2><br><br> 
    <div class="form-group">
      <label for="sel1">Type of Event</label>
      <select class="form-control" id="type" name="type">
        <option>Wedding </option>
        <option>College/School Event</option>
        <option>Conference</option>
        <option>Party(birthday and other)</option>
        <option>Galas/Fundraiser</option>
        <option>Arts and Exhibits</option>
        <option>Music(Concerts)</option>
        <option>Parade</option>
        <option>Talks and Readings</option>
        <option>Sports</option>
        <option>Health and Wellness</option>
      </select>
      </div>
     <br>
     <label>Event Description:</label>
   <input type="textarea" name="desp" class="form-control"/>
     Start date: <input type="date" name="sdate" class="form-control"/>
     End Date: <input type="date" name="edate" class="form-control"/>
     <!--Set up time: <input type="time" name="stime" class="form-control"/>
     End time: <input type="time" name="etime" class="form-control"/>-->
     <br>
     <br>
     <br>

     <h4>Please include your set-up and breakdown time when requesting a venue. Set-up and breakdowns will be in accordance with this form. </h4>
     <br>
     <br>
     <label>Location</label>
     <input type="text" name="loc" class="form-control"/>
     <label>Number of Anticipated Guests </label>
     <input type="number" name="guest_no" class="form-control"/>
<br><br><br>
     <h3>Set Up Information</h3>

     <div class="form-group">
      <label>Seating Style: </label>
      <select class="form-control" id="seatStyle" name="seatStyle">
        <option>Large Hall </option>
        <option>Theatre Style</option>
        <option>Classroom Style</option>
        <option>Banquet Style(Long Table)</option>
        <option>Banquet Style(Round Table)</option>
        <option>Garden Style(Round Table)</option>
      </select>
      </div>
      <label>No of Chairs: </label>
     <input type="number" name="chairsno" class="form-control"/>
      <label>No of Tables: </label>
     <input type="number" name="tableno" class="form-control"/>

     <br><br><br>
     <h3>Media Information</h3>
     <br>
     <div class="form-group">
     <label>Audio</label>
     <select multiple class="form-control" id="aud" name="aud">
        <option>CD player</option>
        <option>HandHeld music</option>
        <option>Podium with mic</option>
        <option>ipod connection</option>
        <option>Live Music</option>
      </select>
   </div>
<br><br>
   <div class="form-group">
     <label>Video</label>
     <select multiple class="form-control" id="vid" name="vid">
        <option>Laptop</option>
        <option>Projector and Screen</option>
        <option>DVD/VCR</option>
        <option>TV</option>
        <option>Extension Cords</option>
      </select>
   </div>
<br><br>
   <h4>Please note, additional fees may apply. Equipment/staff may be limited depending on whether we have everything on site. </h4>
<br><br>
   <h3>Catering </h3>
   <div class="form-group">
     <label>Choose type of catering service: </label>
     <select class="form-control" id="cat_type" name="cat_type">
        <option>No Food will be served at this event</option>
        <option>In house catering</option>
        <option>Outside catering</option>
        <option>Self catered</option>
      </select>
   </div>

   <div class="form-group">
     <label>Service Requirements: </label>
     <select class="form-control" id="req" name="req">
        <option>Served</option>
        <option>Buffet Style</option>
        <option>Beverages Only</option>
        <option>Boxed</option>
        <option>Pick Up</option>
      </select>
   </div> <br><br>
<input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
  </div>
</div>
</form>

</div>
</div>

</center>

</body>
</html>