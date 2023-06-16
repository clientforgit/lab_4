<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo '
        <form action="" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="submit" value="Submit">
        </form>
    ';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from $_POST
    $name = $_POST['name'];
    $email = $_POST['email'];

    setcookie('name', $name, time() + 3600);
    setcookie('email', $email, time() + 3600);

    // Store data in session
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    // Redirect to another page
    header('Location: welcome.php');
    exit();
}