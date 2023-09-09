<!-- This file will contain our vulnerable class:
     This class has a __destruct method which will evaluate any code in the 
     $command property when an object of this class is destroyed. This is our vulnerable entry point. -->

<?php

class VulnerableClass {
    public $command;

    function __destruct() {
        eval($this->command);
    }
}
?>
