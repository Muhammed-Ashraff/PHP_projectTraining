<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include_once("user.php");
    $user = new User();
    $allUser = $user->getAllUser();
    session_start();
    $name = $_SESSION['firstname'];
    ?>
    <h1>Good Morning, <?php echo $name ?> </h1>

    <table>
        <thead>
            <th>S/N</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th colspan="2">Actions</th>
        </thead>

        <tbody>
            <?php 
            $number = 1;
            foreach($allUser as $users){
            ?>
            <tr>
                <td><?php echo $number++ ?></td>
                <td><?php echo $users["first_name"] ?></td>
                <td><?php echo $users["last_name"]?></td>
                <td><?php echo $users["email"]?></td>
                <td><?php echo $users["phone_number"]?></td>
                <td><a href="editUser.php?id= <?php echo $users["id"] ?>">Edit</td>
                <td><a href="processDelete.php?id= <?php echo $users["id"] ?>">Delete</td>
                
            </tr>
            <?php
              }
            ?>
        </tbody>
    </table>
</body>
</html>