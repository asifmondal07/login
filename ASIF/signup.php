<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
 
<?php include 'partials/_navbar.php';?>

    <div class="container">
        <h1 class="my-3">SignUp Our Website</h1>
        <form action="/ASIF/partials/_handelsignup.php" method="POST">
        <div class="mb-3 my-3">
            <label for="email" class="form-label">User Name</label>
            <input type="text" class="form-control" id="signupemail" name="signupemail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="signuppass" name="signuppass">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="csignuppass" name="csignuppass">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
