<?php
    class abc
    {
      public $height;
      public $width;
      function setWidth($w)
      {
        $this->width=$w;
      }
      function setHeight($h)
      {
        $this->height=$h;
      }
      function area()
      {
        $ans = $this->width*$this->height;
        return $ans;
      }
    }
    $def = new abc;
    $def->$width=60;
    $def->setHeight(7);
    $ar=$def->area();
    echo $ar;
?>