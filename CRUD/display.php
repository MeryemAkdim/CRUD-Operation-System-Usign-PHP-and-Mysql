<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="table-responsive">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add Employee</a> </button>
        <button class="btn btn-primary my-5"><a href="admin.php" class="text-light">Logout</a> </button>
        <table class="table">
        <thead>
        <tr>
           <th scope="col">ID</th>
           <th scope="col">CIN</th>
           <th scope="col">Email Address</th>
           <th scope="col">First Name</th>
           <th scope="col">Last Name</th>
           <th scope="col">Deparetemnet</th>
           <th scope="col">Salary</th>
           <th scope="col">Home Address</th>
           <th scope="col">Mobile Phone</th>
           <th scope="col">Operation</th>
      </tr>
  </thead>
  <tbody>

<?php

$sql = "SELECT * FROM `record`";
$result = mysqli_query($conn, $sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $Id = $row['Id'];
        $cin = $row['cin'];
        $email = $row['email'];
        $Fname = $row['Fname'];
        $Lname = $row['Lname'];
        $Dept = $row['Dept'];
        $salary = $row['salary'];
        $homeaddress= $row['homeaddress'];
        $phonenumber = $row['phonenumber'];

        echo '<tr>
        <th scope="row">'.$Id.'</th>
        <td>'.$cin.'</td>
        <td>'.$email.'</td>
        <td>'.$Fname.'</td>
        <td>'.$Lname.'</td>
        <td>'.$Dept.'</td>
        <td>'.$salary.'</td>
        <td>'.$homeaddress.'</td>
        <td>'.$phonenumber.'</td>
        <td>
       <button class="btn btn-primary"><a href="Update.php? updateid='.$Id.'" class="text-light">Update</a></button>
       <button class="btn btn-danger"><a href="delete.php? deleteid='.$Id.'" class="text-light">Delete</a></button>
       </td>
      </tr>';
    }

}

?>
   
  </tbody>
</table>

    </div>
    
</body>
</html>