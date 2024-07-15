<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>SIGN IN</h1>
    <form action="processlogin.php" method="POST">
    <p>
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </p>
        <p>
            <label>password</label>
            <input type="password" name="password" class="form-control">
        </p>
        <p>
            <label>Remember me</label>
            <input type="checkbox" name="remember_me">
        </p>
        <button type="submit" class="btn btn-success" >LOGIN</button>
    </form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>