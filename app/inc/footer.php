    <hr>
    <br>
    <?php if($this->isLoggedIn()) : ?>
        <a href = "/userHome"><?=$this->authenticated_user['username']?>'s Homepage</a>
    <?php endif; ?>
    <br>
    <br>

<!--    <pre>-->
<!--     --><?php
////                print_r($params);
////                print_r($this);
//                print_r($_SESSION);
//                print_r($_REQUEST['url']);
////                print_r($this->controller);
////                print_r($this->model);
//            ?>
<!--        </pre>-->
    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
