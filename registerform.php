<?php 







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
    <form action="processregister.php" method="post" class="form form-control">
        <p>
            <label>First name</label>
            <input type="text" name="firstname" class="form-control">
        </p>
        <p>
            <label>Last name</label>
            <input type="text" name="lastname" class="form-control">
        </p>
        <p>
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </p>
        <p>
            <label>password</label>
            <input type="password" name="password" class="form-control">
        </p>
        <p>
            <label>Confirm password</label>
            <input type="password" name="confirmPassword" class="form-control">
        </p>
        <p>
            <label>Phone number</label>
            <input type="number" name="phoneNumber" class="form-control">
        </p>
        <button type="submit" class="btn btn-success">Submit</button>


    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>