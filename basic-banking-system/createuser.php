<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Successfully created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>
  <nav class="navbar navbar-expand-md">
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li>
                <a class="link" href="index.php">Home</a>
              </li>
              <li>
                <a class="link" href="createuser.php">Create User</a>
              </li>
              <li>
                <a class="link" href="transfermoney.php">Transfer Money</a>
              </li>
              <li>
                <a class="link" href="transactionhistory.php">Transaction History</a>
              </li>
          </div>
       </nav>
<form method="post">
<div id="wrapper">
<div class="form_div">
<p class="form_label">CREATE USER</p>
<p><input placeholder="NAME" type="text" name="name" required></p>
<br>
<p><input placeholder="EMAIL" type="email" name="email" required></p>
<br>
<p><input  placeholder="BALANCE" type="number" name="balance" required></p>
<br>
<input type="submit" value="CREATE" name="submit"></input>&nbsp&nbsp&nbsp&nbsp
<input type="reset" value="RESET" name="reset"></input>
</form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>