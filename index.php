<?php
print "Hello, World! php version is " . PHP_VERSION . "\n";
?>

<?php if($_ENV["HOSTNAME"]) {?><h3>My hostname is <?php echo $_ENV["HOSTNAME"]; ?>
