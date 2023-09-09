<!-- Serialized instance of the VulnerableClass that contains a command you want to execute.-->

<!-- Run this script in a browser or via command line to get the serialized string. -->

<?php
include('class.vulnerable.php');

$object = new VulnerableClass();
$object->command = 'echo "Hello, World!";';
echo serialize($object);
?>
