<?php
if(!isset($_COOKIE['name'])){
    setcookie('name', "unknwon");
}
?>

<a id="username"><?php echo $_COOKIE['name']; ?>