<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['user_name']);
    $password = $_POST['password'];

    if ($username === App::get('database')->selectAll('login') && $password === App::get('database')->selectAll('password')) {
        $_SESSION['user_name'] = $username;
    } else {
        $status = "Incorrect credentials.";
    }
}

require_once "frags/head.php" ?>

<div class="wrapper">
    <form class="form-signin" action="login" method="post">
        <h2 class="form-signin-heading">Please login</h2>
        <input type="text" class="form-control" name="user_name" placeholder="Username" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
        <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
        </label>
        <input type="submit" value="Login">
    </form>
    
</div>

<?php require_once "frags/foot.php" ?>
