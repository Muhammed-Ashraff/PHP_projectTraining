<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    $id = $_GET["id"];
    include_once('user.php');
    $user = new User();
    $singleUser = $user->getSingleUser($id);

    
    ?>

<form action="processUpdateUser.php" method="post" class="form form-control">
        <p>
            <label>First name</label>
            <input type="text" name="firstname" class="form-control" value="<?php echo $singleUser['first_name'] ?>">
        </p>
        <p>
            <label>Last name</label>
            <input type="text" name="lastname" class="form-control" value="<?php echo $singleUser['last_name'] ?>">
        </p>
        <p>
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $singleUser['email'] ?>" readonly>
        </p>
       
        <p>
            <label>Phone number</label>
            <input type="number" name="phoneNumber" class="form-control" value="<?php echo $singleUser['phone_number'] ?>">
        </p>
        <input type="hidden" name="user_id" value="<?php echo $singleUser['id']?>">
        <button type="submit" class="btn btn-success">Submit</button>


    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>