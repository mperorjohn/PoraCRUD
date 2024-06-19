<?php
include 'config.php';
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    //inserting data into the database
    $sql="insert into `registration` (firstname,lastname,dob,gender,
    email,phone,password)
    values('$firstname','$lastname','$dob','$gender','$email','$phone','$password')";
    $result=mysqli_query($con,$sql);

    if($result){
        echo"Data inserted successfully";
    }else{
        die(mysqli_error($con));
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<link rel="stylesheet" href="style.css">
<!create a html register page( first name, lastmname, email, dob=date, phone= tel, gender =select,password= password, and confirm password)
style it use nice colour combination
create a php and initiate a connectio to the database


include config.php-->
<body>
    <h1 class="header">PoraTech Academy Registration</h1>

    <div class="container"> 
     <form method="post">
          <label for="fname">First name:</label><br>
          <input type="text" id="fname" placeholder="Enter your first name" name="firstname" autocomplete="off"><br><br>

          <label for="lname">Last name:</label><br>
          <input type="text" id="lname" placeholder="Enter your last name" name="lastname" autocomplete="off"><br><br>       

          <label for="dob">Date of Birth:</label><br>
          <input type="text" id="dob" placeholder="Enter your date of birth" name="dob" autocomplete="off"><br><br>

          <label for="gender">Gender:</label><br>
          <input type="text" id="gender" placeholder="Select your gender" name="gender" autocomplete="off"><br><br>
          
          <label for="email">Email:</label><br>
          <input type="email" id="email" placeholder="Enter your email" name="email" autocomplete="off"><br><br>
          
          <label for="phone">phone</label><br>
          <input type="text" id="phone" placeholder="Enter your phone number" name="phone" autocomplete="off"><br><br>

          <label for="password">Password:</label><br>
          <input type="password" id="password" placeholder="Enter your password" name="password" autocomplete="off"><br><br>

          <label for="cpassword">Confirm Password:</label><br>
          <input type="password" id="cpassword" placeholder="confirm password" name="cpassword" autocomplete="off"><br><br>
          
          <input type="submit" value="Submit" class="btn" name="submit">
        </form> 
        </div>
</body>
</html>