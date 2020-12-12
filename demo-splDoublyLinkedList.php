<?php
$dList = new SplDoublyLinkedList();

$dList->push("Hello");
$dList->push("world");

//var_dump($dList);

$dList->unshift(1);
$dList->unshift(2);

$dList->pop();

$dList->add(3,5);
//var_dump($dList);

for($dList->rewind();$dList->valid();$dList->next()){
    echo $dList->current()."<br/>";
}
echo "<br/>";

$dList->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

for($dList->rewind();$dList->valid();$dList->next()){
    echo $dList->current()."<br/>";
}
