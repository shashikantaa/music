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

       <div class="policies">
        
      </div>
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
            <li><a href="RazorPay/payment-form.php">Download</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
          <button onclick="window.location.href='logout.php'">Logout
          </button>
        </div>
      </div>
<?php } else { 
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
                onclick="window.location.href='RazorPay/payment-form.php';">Premium</a>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="#">Support</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="RazorPay/payment-form.php">Download</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button onclick="document.getElementById('login_modal').style.display='block'">
            LogIn
          </button>
	<button onclick="window.location.href='signup.php';">
            Sign-In
          </button>
        </div>
      </div>
<?php } ?>      <h3 style="text-align:left;color:white">ARTIST</h3>
      <!--SONGS DISPLAY-->
      <?php
   @$conn=@mysqli_connect("localhost","root","","db_project");
   @$ins="SELECT * FROM tb_artist";
   @$result=@mysqli_query($conn,$ins);
  
   while($value=@mysqli_fetch_array($result))
   {
?>
<div >
  <table align="center" width="100%"  style="background-color:black; border-color:white; border-top:none; border-left:none; border-right:none; border-top-color:black; border-right-color:black; border-left-color:black;">
        <tr class="song_disp">
            <td>
            <a class="song_link" href="artist.php?ar=<?php echo $value['artist_id']?>"><?php echo $value['artist_name'];?></a>
            </td>
        </tr>
    </table>
   </div>
    <?php } ?>
  
    <!--Login Modal -->
    <div class="item1"  id="login_modal"> 
    <h1 class="heading">Login</h1>
        <form action="login.php" method="POST">
            <input type="email" name="txtemail" placeholder="Enter Username" class="textbox"><br> 
            <input type="password" name="txtpass" placeholder="Enter Password" class="textbox"><br><br>
            <input type="submit" value="Submit" class="button" onclick="document.getElementById('msg').style.display='block'">
        </form>
        <button class="button"  onclick="document.getElementById('login_modal').style.display='none'">Close</button>
          </div></a>
  </body>
</html>
