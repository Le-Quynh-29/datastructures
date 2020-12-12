<?php


$arr = [1,3,4,5,"ab"];
echo gettype($arr)."<br/>";
echo gettype(json_encode($arr))."<br/>";

$str = '[helo,rg,111,3]';
echo gettype(json_decode($str))."<br/>";
