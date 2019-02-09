<html>
<head>
<title>Hello World!</title>
</head>
<body>
<?php echo "Hello World! This is the Version 2 App and Deployed by Jenkins CI Tools ...llllllll "; ?>
<?php if($_ENV["HOSTNAME"]) {?><h3>My hostname is <?php echo $_ENV["HOSTNAME"]; ?><br /><br />
<?php
}
?>
</body>
</html>
