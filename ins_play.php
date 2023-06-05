<html>
    <head>
      <title>Play Song</title> 
      <link rel="stylesheet" href="style7.css">
      <link rel="shortcut icon" href="images/p1.ico" type="image/x-icon">       
    </head>  
   <body>
    <div class="i">
    <?php
    @$i=$_GET['id'];
    @$n=$_GET['name'];
    @$loc=$_GET['l'];

	
    @$conn=@mysqli_connect("localhost","root","","db_project");
    @$ins="SELECT * FROM tb_ins WHERE ins_id='$i'";
    @$result=@mysqli_query($conn,$ins);
    while($value=@mysqli_fetch_array($result))
    {
	
?>
 <div class="player">
       <div class="wrapper">
           <div class="details">
               <div class="track-art"></div>
               <div class="track-name"><?php echo $value['ins_name'];?></div>
               <div class="track-artist">Instrumentals</div>
           </div>
        <audio id="song1">
            <source src="Instrumental_/<?php echo $loc;?>"></source>
        </audio>  
       <div class="playpause-track">
                    <button class="btn_play" onclick="Play1()">Play</button>
                    <button class="btn_play" onclick="Pause1()">Pause</button>
        </div>
              <div id="wave">
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
            </div>  
        </div>
   </div>
   <?php } ?>
   </body>
   <script>
            function Play1()
            {
                var x=document.getElementById("song1");
                x.play();
            }
            function Pause1()
            {
                var x=document.getElementById("song1");
                x.pause();
            }
        </script>
</html>