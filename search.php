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
    <style>
       .wrapper1 {
    width: 100%;
    margin: 0 auto;
}
#search-container {
  margin-bottom:900px;
  
}
#search-container input[type="text"] {
  background-color: transparent;
  width: 90%;
  border: 2px solid white;
  padding: 1em 0.3em;
  font-size: 30px;
  position:relative;
    bottom:120px;
}

#search-container input:focus {
  border: #6759ff;
  color:white;

}
#search-container .sub1 {
  padding: 1em 2em;
  margin-left: 300px;
  background-color: green;
  color: #ffffff;
  border-radius: 5px;
  margin-top: 2em;
  font-size:20px;
}
#search-container .sub1:hover
{
    background-color:black;
    color:white;
    border-color:green;
}
.sub1-value {
  /* border: 2px solid #6759ff; */
  padding: 1em 2.2em;
  border-radius: 3em;
  margin-top: 2em;
  background-color: transparent;
  color: #6759ff;
  cursor: pointer;
}
        </style>
  </head>
  <body>
  <!--<div class="sidebar">
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
            <a href="Search/search.php">
              <i class="fa fa-search"></i>
              <span>Search</span>
            </a>
          </li>
          <?php 
        	/*if(!empty($_SESSION['id']))
		      {*/
?>
          <a href="playlist_demo.php">
              <i class="fa fas fa-plus-square"></i>
              <span>Add Songs</span>
            </a>
          </li>
          <?php /*} else {*/?>
            <a href="#" style="color:#b3b3b3;text-decoration:none;font-size:12px; font-weight:bold;">
              <i class="fa fas fa-plus-square"></i>
              &nbsp;&nbsp;&nbsp;<span>Add Songs</span>
            </a>
          </li>
          <?php/* }*/ ?>
          <li>
          <a href="disp_play.php">
              <i class="fa fa fa-heart"></i>
              <span>My Playlist</span>
            </a>
          </li>
          </ul>
          <ul>
        <li><a href="#">Cookies</a></li>
          <li><a href="#">Privacy</a></li>
        </ul>
        </ul>
      </div>

       <div class="policies">
        
      </div>
    </div>-->

    <div class="main-container">
      <div class="topbar">
        <div class="prev-next-buttons" id="msg"></div>
        
      <!--<div class="navbar">
          <ul>
            <li>
              <a
                href="home.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </li>
            <li>
              <a
                href="RazorPay/payment-form.php">Premium</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </li>
            <li>
              <a
                href="Search/search.php">Search</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </li>
            <li>-->
            <?php
		if(!empty($_SESSION['m']) && !empty($_SESSION['p']))
		{
?>
    <div class="main-container">
      <div class="topbar">
        <div class="prev-next-buttons" id="msg">
        </div>
        <div class="navbar">
          <ul>
            <li>
              <a
                href="home.php">Home</a>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="#">Support</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="RazorPay/payment-form.php">Download</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
          <button onclick="window.location.href='logout.php'">Logout
          </button>
        </div>
      </div>
<?php } else { 
	
  ?>
<div class="main-container">
      <div class="topbar">
        <div class="prev-next-buttons" id="msg">
        </div>
        <div class="navbar">
          <ul>
            <li>
              <a
                href="home.php">HOME</a>
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
<?php } ?>
</li>
          </button>
        </div>
      </div>-->
      <h3 style="text-align:left;color:white;position:relative;bottom:150px;">SEARCH SONGS...</h3>
      <!--SONGS SEARCH-->
      <div class="wrapper">
      <div id="search-container">
        <form method="POST" action="">
        <input
          type="text"
          id="search-input"
          placeholder="Search Songs name here.."
          name="txtsearch">
          <input type="submit" value="Search" class="sub1" style="position:relative;bottom:150px;left:200px;">
</form>
        
      </div>
</div>
</div>

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
<?php
    @$str=$_POST['txtsearch'];
   @$conn=@mysqli_connect("localhost","root","","db_project");
   @$ins="SELECT * FROM tb_songs S,tb_artist A,tb_language L where S.artist_id=A.artist_id AND S.lang_id=L.lang_id AND S.song_name='$str'";
   @$result=@mysqli_query($conn,$ins);
   while($value=@mysqli_fetch_array($result))
   {
?>
  <div class="spotify-playlist" style="position:absolute;top:500px;">
        <!--<h2>Songs</h2>-->
        <div class="list">
          <div class="item">
            <a href="demo.php?a=<?php echo $value['artist_id'];?>&l=<?php echo $value['loc'];?>&s=<?php echo $value['song_name'];?>" style="text-decoration:none"><img src="songs.png" alt="" />
            <h2 align="center"><?php echo $value['song_name']?></h2>
            <h2 align="center"><?php echo $value['artist_name']?></h2>
          </div>
        </a>
        <?php } ?>