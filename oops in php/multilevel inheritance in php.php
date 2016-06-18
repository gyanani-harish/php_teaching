<?php
    class a
    {
      function show()
      {
        echo "show function defined in a class<br />";
      }
    }
    class b extends a
    {
      function display()
      {
        echo "display function defined in b class<br />";
      }
    }
    class c extends b
    {
      function showoff()
      {
        echo "showoff function defined in c class<br />";
      }
    }
    echo "now class a<br />";
    $obj1 = new a;
    $obj1->show();
    $obj2 = new b;
    echo "now class b<br />";
    $obj2->show();
    $obj2->display();
    echo "now class c<br />";
    $obj3 = new c;
    $obj3->show();
    $obj3->display();
    $obj3->showoff();


?>