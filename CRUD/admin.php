<?php
include 'config.php';
/*$host = "localhost";
$user = "root";
$password = "";
$db = "db_em";*/

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM Adlogin where username='".$username."' AND pwd='".$pwd."'
    limit 1";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){
        //echo "You have Succefully Logged in";
        header('location:display.php');

    }else{
        echo "You Have Intered inccorect Password";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <!--<div class="login-form"> 
        <form action="admin.php" method="POST">
            <div class="mb-4">
               <label for="email">Email Address</label>
               <input type="email"  placeholder="Enter Your Email Address" name="email" required>
            </div>
            <div class="mb-4">
               <label for="pwd">Password</label>
               <input type="password" placeholder="Enter Your Password" name="pwd" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>-->
    <div class="center">
  
           <h1>SOCATRAMINE</h1>
           <h2 style="text-align: center;">Login Admine</h2>
          <form method="post">

              <div class="txt_field">
                   <input type="text" name="username" required>
                   <span></span>
                   <label for="username">Username</label>                         
               </div>

               <div class="txt_field">
                   <input type="password" name="pwd" required>
                   <span></span>
                   <label>Password</label>
              </div>
               
                <!--<input type="submit" name="submit" value="Login">-->
                <button type="submit" class="btn btn-primary" class="btn" name="submit">Login</button>


             </div>

      </form>
    </div>
    
</body>
</html>