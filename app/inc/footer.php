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
