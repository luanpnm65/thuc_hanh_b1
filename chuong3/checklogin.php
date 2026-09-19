<?php
$username = $_POST['user'];
$password = $_POST['password'];
if($username == 'admin' && $password == '12345'){
    echo "<font color = red> Welcome to, " .$username."<font>";
}else{
    echo "<font color = red>Sai username hoặc password vui lòng nhập lại!","<font>";
}
?>