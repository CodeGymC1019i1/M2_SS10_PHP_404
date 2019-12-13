<?php

include_once "Dancer.php";

$queueMale = new SplQueue();
$queueFemale = new SplQueue();

$dancer1 = new Dancer("Tung", true);
$dancer2 = new Dancer("Hai", true);
$dancer3 = new Dancer("Dan", true);
$dancer10 = new Dancer("An", true);
$dancer4 = new Dancer("Sook kun", false);
$dancer5 = new Dancer("Crush dan", false);
$dancer6 = new Dancer("Undefine", false);
$dancer7 = new Dancer("someone", false);
$dancer8 = new Dancer("someone1", false);
$dancer9 = new Dancer("someone2", false);

$queueMale->enqueue($dancer1);
$queueMale->enqueue($dancer2);
$queueMale->enqueue($dancer3);
$queueMale->enqueue($dancer10);

$queueFemale->enqueue($dancer4);
$queueFemale->enqueue($dancer5);
$queueFemale->enqueue($dancer6);


while (!$queueMale->isEmpty() && !$queueFemale->isEmpty()) {
    echo $queueMale->dequeue()->name . " and " . $queueFemale->dequeue()->name . "<br>";
}
echo "There is not anyone to get couple, please wait!"."<br>";

$queueFemale->enqueue($dancer7);
$queueFemale->enqueue($dancer8);
$queueFemale->enqueue($dancer9);

while (!$queueMale->isEmpty() && !$queueFemale->isEmpty()) {
    echo $queueMale->dequeue()->name . " and " . $queueFemale->dequeue()->name . "<br>";
}
echo "There is not anyone to get couple, please wait!"."<br>";

echo "Numbers of waitting people: ";
if ($queueMale->isEmpty())
    echo $queueFemale->count();
else
    echo $queueMale->count();