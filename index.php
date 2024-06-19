<?php

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])){

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phoneNumber'];
    $gender = $_POST['gender'];
    $dob  = $_POST['dateOfBirth'];
    $password = $_POST['passMe'];
    $confirmPassword = $_POST['passMeTwo'];




    if($password == $confirmPassword){
        $password = password_hash($password, PASSWORD_DEFAULT);
    };

    

    
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <h1 class="text-success text-center mt-5 mb-5">Registration Page</h1>
                        <div class="form-group">
                            <label for="firstName">First Name</label><br>
                            <input type="text" name="firstName" id="firstName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label><br>
                            <input type="text" name="lastName" id="lastName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label><br>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label><br>
                            <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control" required> 
                        </div>
                        <div class="form-group">
                            <label for="DOB">Date of Birth</label><br>
                            <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Others</option>
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label><br>
                            <input type="password" name="passMe" id="passMe" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password</label><br>
                            <input type="password" name="passMeTwo" id="passMeTwo" class="form-control" required>
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="btn btn-success form-control">Register</button>
                        </div>
            </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>