<?php
print "Hello, World! php version is " . PHP_VERSION . "\n";
?><br />

<?php if($_ENV["HOSTNAME"]) {?><h3>My hostname is <?php echo $_ENV["HOSTNAME"]; ?><br />
