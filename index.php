<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Contact Application</title>
</head>
<body>
    <header>
    <h1>Contact App</h1>
    </header>
    <form action="adddata.php" method="post">
    <div class="main">
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name" required><br>
    <label for="contact">Number:</label><br>
    <input type="number" name="contact" id="contact" required><br>
    <label for="address">Address:</label><br>
    <input type="text" name="address" id="address" required><br>
    <label for="email">Email:</label><br>
    <input type="text" name="email" id="email" required><br><br>
    <input type="submit" value="Save">
    </div>
    </form>
    <hr>
    <h2>List of Contact</h2>
    <table>
    <tr>
    <th>Name</th>
    <th>Phone Number </th>
    <th>Address </th>
    <th>Email </th>
    <th>Action </th>
    </tr>
    <?php 
    include 'database.php';
    $sql ="SELECT * FROM contactdetail";
    $result = mysqli_query($conn, $sql);
    if ($result) {
       while ($row = mysqli_fetch_assoc($result)) {
           $id = $row['id'];
           $name = $row['name'];
           $phone = $row['contact'];
           $address = $row['address'];
           $email = $row['email'];
           ?>
            <tr>
                <td><?php  echo $name?></td>
                <td><?php echo $phone?></td>
                <td><?php  echo $address?></td>
                <td><?php echo $email?></td>
                <td>
                    <a href="edit.php?id=<?php echo $id?>">Update</a>
                    <a href="delete.php?id=<?php echo $id?>">Delete</a>
                </td>
            </tr>

           <?php


       }
    }
    ?>
   
    </table>

</body>
</html>