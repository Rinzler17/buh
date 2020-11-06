<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'main');
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>buh</title>
</head>
<body>
<?php include header.php; ?>
<?php include main.php; ?>
<?php include footer.php; ?>
</body>
</html>
