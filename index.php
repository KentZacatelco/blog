<?php
    require_once(__DIR__ . "/controller/login-verify.php");
    require_once(__DIR__ . "/view/header.php");
    if(authenticateUser()) {
        require_once(__DIR__ . "/view/navigation.php");
    }
    else {
        ?><a href="<?php echo $path . "/view/login-form.php"?>">Login</a> <?php
    }
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/view/footer.php");
    require_once(__DIR__ . "/controller/read-post.php");
?>
<!--    Index only has don't have much code. Only have links to other files    -->