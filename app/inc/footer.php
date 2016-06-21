<hr>
<br>
<?php if($this->isLoggedIn()) : ?>
    <a href = "/userHome"><?=$this->authenticated_user['username']?>'s Homepage</a>
<?php endif; ?>
<br>
<br>
<?php if($this->isLoggedIn()) : ?>
    <a href="/signout/">Sign out</a>
<?php endif; ?>

<pre>
    <?php
//        print_r($params);
//        print_r($this);
//        print_r($_SESSION);
//        print_r($_REQUEST);
        print_r($this->controller);
        print_r($this->model);
    ?>
</pre>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
