<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body {
        background-color: blanchedalmond;
      }
      .container {
        background-color: rgb(39, 129, 207);
        border: 2px solid black;
        align-content: center;
        height: 300px;
        width: 350px;
        margin-left: 350px;
        margin-top: 200px;
      }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Payment Form</title>
  </head>
  <body>
    <form action="pay.php" method="post">
      <div class="container">
        <br />
        <br />
        <br />
        Price: Rs <label name="price" id="i">300</label> per months<br /><br />
        Input Price:<input type="text" name="price" id="i" /><br /><br />
        Name: <input type="text" name="customername" id="i" /><br /><br />
        Email: <input type="email" name="email" id="i" /><br /><br />
        Contact No:
        <input type="text" name="contactno" id="i" /><br /><br /><br />
        <input type="submit" name="submit" value="Proceed To Pay" id="=i" />
      </div>
    </form>
  </body>
</html>
