<html>
<head>
    <meta charset="utf-8" />
</head>
<?php
session_start();
session_destroy();

unset($_COOKIE['permission']);
    setcookie('permission', null, -1, '/');


//setcookie("permission", "", time() - (86400 * 30));
echo "  <script>
        alert('Ðăng xuất thành công');
        window.location = 'index.php';
        </script>";              
?>
</html>