<html>
<head>
    <meta charset="utf-8" />
</head>
<?php
session_start();
session_destroy();
echo "  <script>
        alert('Ðăng xuất thành công');
        window.location = 'a_index.php';
        </script>";              
?>
</html>