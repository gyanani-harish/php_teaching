

<?php
    class abc
    {
        function __construct()
        {
          echo "created";
        }
        function __destruct()
        {
          echo "deleted";
        }
    }
    $a= new abc;

?>


