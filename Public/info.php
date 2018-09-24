<?php //don't close php tag

$foo = "bar";
$bar = 'bit';
$bit = 'baz';

echo $foo;
echo $bar;

$one = 'ONE';

echo "The value is {$one}.\n";
echo "The value is " . $one;

class Animal
{
  public $name = 'Pig';
}

$wilber = new Animal();
echo $wilber->name . "\n";

$myArr = [
  'first' => 'Jake',
  'last' => 'McCarty'

];

$people = [

  0 => 'Tom',
  1 => 'Phil',
  2 => 'Midge'
];

var_dump($myArr);
print_r($people);

/*
$n = 0;

if(isset($_GET['id'])) {
  $n = $_GET['id']
}

// This means the same thing
$n = isset($_GET['id']) ? $_GET['id']:0;
*/

//This also means the same thing:
$n = $_GET['id'] ?? 0;

echo '$n= ' . $n . "\n";
