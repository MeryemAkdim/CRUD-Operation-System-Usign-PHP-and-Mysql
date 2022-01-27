<?php
include 'config.php';

if(isset($_POST['submit'])){
    $cin = ($_POST['cin']);
    $email = ($_POST['email']);
    $Fname = ($_POST['Fname']);
    $Lname = ($_POST['Lname']);
    $Dept = ($_POST['Dept']);
    $salary = ($_POST['salary']);
    $homeaddress= ($_POST['homeaddress']);
    $phonenumber = ($_POST['phonenumber']);

    $sql = "INSERT INTO `record`(cin, email, Fname, Lname, Dept, salary, homeaddress,phonenumber)
    values ('$cin', '$email', '$Fname', '$Lname', '$Dept', '$salary', '$homeaddress','$phonenumber') ";

    $result = mysqli_query($conn, $sql);

    if($result){
        //echo "The Employee Data Inserted Succefully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <title>Employee Management System</title>

  </head>

   <body>
    <div class = "container">
     <form method="post">
          <button class="btn btn-primary my-5"><a href="display.php" class="text-light">Display Employee Information</a> </button>
          <button class="btn btn-primary my-5"><a href="admin.php" class="text-light">Logout</a> </button>
          <div class="mb-3">
                  <label for="cin" class="form-label">CIN</label>
                  <input type="text" class="form-control" name="cin" placeholder="Enter The Employee CIN " required>
          </div>

         <div class="mb-3">
               <label for="email" class="form-label">Email address</label>
               <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter The Employee Email ">
               <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
         </div>

            <div class="mb-3">
                  <label for="Fname" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="Fname" placeholder="Enter The Employee First Name">
            </div>

            <div class="mb-3">
                  <label for="Lname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" name="Lname" placeholder="Enter The Employee Last Name">
            </div>

            <div class="mb-3">
                  <label for="Dept" class="form-label">Deparetemnet</label>
                  <input type="text" class="form-control" name="Dept" placeholder="Enter The Employee Deparetemnet">
            </div>

            <div class="mb-3">
                  <label for="salary" class="form-label">Salary</label>
                  <input type="text" class="form-control" name="salary" placeholder="Enter The Employee Salary">
            </div>

            <div class="mb-3">
                  <label for="homeaddress" class="form-label">Homa Address</label>
                  <input type="	homeaddress" class="form-control" name="homeaddress" placeholder="Enter The Employee Address">
            </div>

            <div class="mb-3">
                  <label for="phonenumber" class="form-label">Mobile Phone</label>
                  <input type="phonenumber" class="form-control" name="phonenumber" placeholder="Enter The Employee Mobile Phone">
            </div>


            <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" name="Check1">
                   <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>

  </body>
</html>