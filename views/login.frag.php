<?php require_once "frags/head.php" ?>

<div class="wrapper">
    <form class="form-signin" action="">
        <h2 class="form-signin-heading">Please login</h2>
        <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
        <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>

    <div class="register">
        <button class="btn btn-warning"><a href="register">Register</a></button>
    </div>
</div>

<?php require_once "frags/foot.php" ?>