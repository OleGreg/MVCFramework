<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/4/2016
 * Time: 11:36 AM
 */
?>
<div class="jumbotron">
    <h2>Please sign in</h2>
    <form action="/login/authenticate" method="post">
        Name:  <input autofocus required="required" placeholder="Enter your username" type="text" name="username" />
        Password:  <input required="required" placeholder="Enter your password" type="password" name="password" />
        <input class="btn btn-default" type="submit" name="submit" value="Sign In" />
    </form>
</div>

<?php if( isset($_SESSION['login_error']) && $_SESSION['login_error'] == TRUE ) : ?>
<p style="color:red;">Please enter a valid username and password.</p>
<?php endif; ?>

<br>

<p>Don't have an account? <a href="/signup">Sign up!</a></p>

<br>

