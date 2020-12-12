<?php
$q = new SplStack();

$q[] = 1;
$q[] = 2;
$q[] = 3;
//
//var_dump($q);
$q->push(4);
$q->add(4,5);

$q->rewind();
while ($q->valid()){
    echo $q->current(),"\n";
    $q->next();
}