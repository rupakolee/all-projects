<!DOCTYPE html>
<html>
<body>
<?php
$data = data();

$xml=simplexml_load_string($data) or die("Error: Cannot create object");
print_r($xml);

?>
</body>
</html>