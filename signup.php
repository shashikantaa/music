<!DOCTYPE html>
<head>
	<title>Registration-Page</title>
	<style>
		body
		{
			background-color:black;
		}
		.item1
		{
    			background-color: #1db954;
    			padding:20px;
    			transform: translate(300px,10px);
    			border-radius: 6px;
    			position: fixed;  /*Stay in place */
    			z-index: 1; /* Sit on top */
    			left: 0;
    			top: 0;
    			width: 900px; /* Full width */
    			height: 900px; /* Full height */
    			overflow: scroll; /* Enable scroll if needed */
   			padding-top: 20px;
		}

		.heading
		{
			transform:translate(5px,-30px);
    			margin-bottom:10px;
    			text-align: center;
    			font-size: 40px;
		}
		.textbox
		{
			transform:translate(5px,-35px); 	
   			 width: 100%;
    			padding: 12px 20px;
    			margin: 20px 0;
    			display: inline-block;
    			border: 1px solid #ccc;
    			box-sizing: border-box;
    			font-size:26px;
		}
		.button
		{
    			background-color: black;
    			color: white;
			padding:12px 2px;
    			border: none;
    			cursor: pointer;
    			width: 50%;
    			font-size:20px;
			display:inline;
			transform:translate(200px,-25px);
		}
		.button:hover{
    			background-color: transparent;
    			border:1px solid black;
		}
		.log_out
		{
			color:red;
		}
	</style>
</head>
<div class="item1"  id="login_modal">
    <h1 class="heading">Registration</h1>
        <form action="sign.php" method="POST">
            <input type="text" name="txtname" placeholder="Enter FullName" class="textbox" required><br> 
		<input type="text" name="txtcon" placeholder="Enter Contact Number" class="textbox" maxlength="10" required><br>--> 
	    <input type="email" name="txtemail" placeholder="Enter Email" class="textbox" required><br> 
            <input type="password" name="txtpass" placeholder="Enter Password" class="textbox" required><br>
	<input type="password" name="txtconpass" placeholder="Confirm Password" class="textbox" required><br>
            <input type="submit" value="Register" class="button">
        </form>
	<br><button onclick="window.location.href='home.php';" class="button">Close</button>
          </div></a>
</html>
