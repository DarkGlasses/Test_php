<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['p_number'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Center Text</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex items-center justify-center bg-gray-100">

    <div class="text-center">
        <p class="text-7xl font-semibold">Welcome <?php echo $name . " " . $last_name; ?></p><br><br>
        <p class="text-4xl">You email is : <?php echo $email; ?></p><br>
        <p class="text-4xl">You password is : <?php echo $password; ?></p><br>
        <p class="text-4xl">You phone number is : <?php echo $phone; ?></p><br>
    </div>

</body>
</html>
