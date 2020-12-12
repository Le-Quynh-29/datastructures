<?php
include_once("Dancer.php");

$girl = new SplQueue();
$girl1 = new Dancer("Quynh", "nu");
$girl2 = new Dancer("Trinh", "nu");
$girl3 = new Dancer("Thuy", "nu");

$girl->enqueue($girl1);
$girl->enqueue($girl2);
$girl->enqueue($girl3);


$boy = new SplQueue();
$boy1 = new Dancer("Quan", "nam");
$boy2 = new Dancer("Nam", "nam");
$boy3 = new Dancer("Tuan", "nam");
$boy4 = new Dancer("Nghia", "nam");

$boy->enqueue($boy1);
$boy->enqueue($boy2);
$boy->enqueue($boy3);
$boy->enqueue($boy4);

function pairing($girl, $boy)
{
    if ($girl->count() == 0 || $boy->count() == 0) {
        echo "So nguoi vao hang doi la: " . ($girl->count() + $boy->count());
    } else {
        echo $girl->dequeue()->getName() . " va " . $boy->dequeue()->getName() . "<br/>";
    }
}


pairing($girl, $boy);
pairing($girl, $boy);
pairing($girl, $boy);
pairing($girl, $boy);
