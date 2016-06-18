

<?php
    class abc
    {
      function __construct()
      {
        $sum = 0;
        foreach (func_get_args() as $arg)
        {
            $sum = $sum+$arg;
        }
        echo $sum."<br />";
      }
    }
    $obj1 = new abc(5,6);
    $obj2 = new abc(6,7,8,9);
?>

