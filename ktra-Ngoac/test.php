<?php
function check($sym)
{
    $stack = new SplStack();
    $stack1 = new SplStack();
    $arr = str_split($sym);
    for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] === ")" && $stack === null && $stack1 === null){
            return false;
        } elseif ($arr[$i] === "(" && $stack == null){
            $stack->push($arr[$i]);
        } elseif ($arr[$i] === ")" && $stack !== null){
            $stack1->push($arr[$i]);
        }   elseif ($stack->count() === $stack1->count()){
            return true;
        }else{
            return false;
        }
    }
}
var_dump(check("s *s – a) *( s( – b) * (s – )   "));