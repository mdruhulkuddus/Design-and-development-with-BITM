<?php


function myTest()
{
    $i = 5;
    echo "<b> php is not dead</b>";
    echo "<p> variable i is : $i</p>";
}

myTest();

$j = 100;
function GlobalTest()
{
    global $i;
    echo "<b> php is not dead</b>";
    echo "<p> variable i is : $i</p>";
}

GlobalTest();

echo '<h1>its time to prepare your self</h1>';
echo('<h1>its time to prepare your self</h1>');
print '<br>';
print "something";
echo print (5);
print '<br>';
echo print (''); // print return something not echo
print '<br>  <br>';

print "<h1> class and object</h1> <hr>";

class Fruit
{
    public $jack = 'kathal';

    public function nationalFruit()
    {
//       return $NaFa = '<br> mango';
        echo "<br> from method <br>";
    }
}

$exp = new Fruit();
echo $exp->jack;
echo $exp->nationalFruit();
$exp->nationalFruit();

class Building{
    public $color;
    public $height;
    public $area;

    function setName($area){
        $this->area = $area;
    }
    function getName(){
       return $this -> area;
    }
}
$go = new Building();
$go->setName('Panthapath');
echo 'Area Name: '.$go->getName();



?>