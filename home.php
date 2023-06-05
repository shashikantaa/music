<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/p1.ico" type="image/x-icon">
    <title>Music Player</title>
    <link rel="stylesheet" href="style4.css">
   <script>src="home_1.js"</script>
    <script
      src="https://kit.fontawesome.com/9d4aef4753.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo">
        <a href="#" style="text-decoration : none"><h2>MUSIC PLAYER</h2></a>
      </div>
      <div class="navigation" id="upper">
        <ul>
          <li>
            <a href="#" onclick="window.location.href='home.php';">
              <i class="fa-solid fa-home"></i>
              <span>Home</span>
            </a>
          </li>

          <li>
            <a href="search.php">
              <i class="fa fa-search"></i>
              <span>Search</span>
            </a>
          </li>
        <li>
        <?php
		if(!empty($_SESSION['id']))
		{
			
?>
          <a href="playlist_demo.php">
              <i class="fa fas fa-plus-square"></i>
              <span>Add Songs</span>
            </a>
          </li>
          <?php } else {?>
            <a>
              <i class="fa fas fa-plus-square"></i>
              <span>Add Songs</span>
            </a>
          </li>
          <?php } ?>
          <li>
          <a href="disp_play.php">
              <i class="fa fa fa-heart"></i>
              <span>My Playlist</span>
            </a>
          </li>
          <ul>
        <li><a href="#">Cookies</a></li>
          <li><a href="#">Privacy</a></li>
        </ul>
        </ul>
      </div>

      <!-- <div class="policies">
        
      </div> -->
    </div>


    <?php
		if(!empty($_SESSION['m']) && !empty($_SESSION['p']))
		{
			echo "<h2 align='center'>","Welcome, ",$_SESSION['m'],"</h2>";
?>
    <div class="main-container">
      <div class="topbar">
        <div class="prev-next-buttons" id="msg">
        </div>
        <div class="navbar">
          <ul>
            <li>
              <a
                href="playlist_demo.php">Premium</a>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="#">Support</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="payment-form.php">Download</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
          <button onclick="window.location.href=Pren=<?php } else { 
	echo "<h2 align='center'>","Login For Better Experience","</h2>"
  ?>
<div class="main-container">
      <div class="topbar">
        <div class="prev-next-buttons" id="msg">
        </div>
        <div class="navbar">
          <ul>
            <li>
              <a
                href="#"
                onclick="window.location.href='payment-form.php';">Premium</a>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="#">Support</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="payment-form.php">Download</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button onclick="document.getElementById('login_modal').style.display='block'">
            LogIn
          </button>
	<button onclick="window.location.href='signup.php';">
            Sign-In
          </button>
        </div>
      </div>
<?php } ?>
    
      <div class="spotify-playlist">
        <!--<h2>Songs</h2>-->
        <div class="list">
          <div class="item">
            <a href="disp_songs.php" style="text-decoration:none"><img src="images/songs.png" alt="" />
            <h2>SONGS</h2>
          </div>
        </a>
          <div class="item">
            <a href="disp_artist.php" style="text-decoration:none"><img src="images/artist1.png" alt=""/>
            <h2>ARTISTS</h2>
          </div></a>
          <div class="item">
            <a href="language.php" style="text-decoration:none"><img 	src="images/lang.jpeg" alt="" />
            <h2>LANGUAGE</h2>
          </div></a>

          </div>
      </div>
<div class="spotify-playlist">
<div class="list">
          
	<div class="item">
            <a href="disp_ins.php" style="text-decoration:none"><img 	src="images/ins.jpeg" alt="" />
              <h2>INSTRUMENT</h2>
              </div></a>
    <!--Login Modal -->
    <div class="item1"  id="login_modal"> 
    <h1 class="heading">Login</h1>
        <form action="login.php" method="POST">
            <input type="email" name="txtemail" placeholder="Enter Username" class="textbox"><br> 
            <input type="password" name="txtpass" placeholder="Enter Password" class="textbox"><br><br>
            <input type="submit" value="Submit" class="button" onclick="document.getElementById('msg').style.display='block'">
        </form>
        <button class="button"  onclick="document.getElementById('login_modal').style.display='none'">Close</button>
          
  </body>
</html>
