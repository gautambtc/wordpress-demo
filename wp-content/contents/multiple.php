<?php

  //Declaration of PHP Trait
  trait my_firt_trait
  {
    //Fuction traitFunction is the function which will be available in your trait
    public function traitFunction()
    {
      echo "This is callable by your class object";
    }
  }
  
  //Declaring class where traits will be used
  class helloWorld
  {
    use my_firt_trait; //Adding things from the trait
  }

  echo "<b>1. Trait Example</b><br>";
  $objTest = new HelloWorld();
  $objTest->traitFunction();// Print This is callable by your class object
  echo "<br><br>";
?>

<?php
  trait trait1 //declaration of first trait
  {
    public function hello1()
    {
      echo 1;
    }
  }
  trait trait2 //second trait
  {
    function hello2()
    {
      echo 2;
    }
  }
  class cls_class
  {
  use trait1 , trait2;
  
  }
  echo "<br><b>2. use multiple traits in class</b><br>";
  $obj = new cls_class();
  $obj->hello2();
  echo "<br><br>";

?>




<?php
  class parent_class
  {
    public function sayHello()
    {
      echo "say hello from base";
    }
  }
  trait trt
  {
    public function sayHello()
    {
      echo "say hellow from trait";
    }
  }
  class main_child extends parent_class
  {
    use trt;
    public function sayHello()
    {
      echo "hello from main child class";
      parent::sayHello();
    }
  }
  echo "<br><b>3. Precedence in traits</b><br>";
  $objCls = new main_child();
  $objCls->sayHello();
  echo "<br><br>";

?>



<?php
  trait t1
  {
    function cnfl()
    {
      echo "this is t1 cnfl";
    }
  }
  trait t2
  {
    function cnfl()
    {
      echo "this is t2 cnfl";
    }
  }
  class test
  {
    use t1,t2{
      t2::cnfl insteadof t1;
    }
  }
  echo "<br><b>4. Conflict Resolution in PHP Traits</b><br>";
  $objT = new test();
  $objT->cnfl();
  echo "<br><br>";
?>


<?php
  trait visible
  {
    public function pub()
    {
      echo "this is public method";
    }
    private function priv()
    {
      echo "this is private";
    }
    protected function proc()
    {
      echo "echo this is protected function";
    }
  }
  class cls
  {
    use visible;
    function callPriv()
    {
      $this->priv();
    }
  }
  echo "<br><b>5. Method Visibility</b><br>";
  $objCls = new cls();
  $objCls->pub();//echo this is public method
  // $objCls->priv();//Fatal error
  echo "<br>";
  $objCls->callPriv(); //this is private
  echo "<br><br>";
?>



<a href= ' http://www.techflirt.com/php-traits-tutorial/' target='_blank'> Reference </a>