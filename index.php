<!-- This is the main file of our application. It will take POST data, unserialize it, and print a message -->

<?php
include('class.vulnerable.php');

if(isset($_POST['payload']) && !empty($_POST['payload'])) {
    $data = trim($_POST['payload']);
    
    if (@unserialize($data) !== false || $data === 'b:0;') {
        $injection = unserialize($data);
        echo "Object unserialized!";
    } else {
        echo "The provided payload is not a valid serialized string!";
    }
} else {
    echo "Submit the form with payload to see the magic!";
}

?>

<form action="" method="post">
    <label for="payload">Payload:</label>
    <input type="text" name="payload" id="payload">
    <input type="submit" value="Submit">
</form>


