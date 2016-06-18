

<?php
    class abc
    {
      function findSum()
      {
        $sum = 0;
        foreach (func_get_args() as $arg)
        {
            $sum = $sum+$arg;
        }
        return $sum;
      }
    }
    $obj1 = new abc;
    echo $obj1->findSum(3,4)."<br />";
    echo $obj1->findSum(3,4,6,7,8);

?>

