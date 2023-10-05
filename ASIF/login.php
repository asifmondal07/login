<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'partials/_dbconnect.php';?> 
<?php include 'partials/_navbar.php';?>
    <div class="container">
        <form action="/ASIF/partials/_handellogin.php" method="POST">
        <div class="mb-3 my-3">
            <label for="email" class="form-label">Usern Name</label>
            <input type="text" class="form-control" id="email" name="loginemail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass" name="loginpass">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
</body>
</html>
