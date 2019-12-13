<?php

function checkSymbol($checkString) {
    $stack = new SplStack();

    $symbols = str_split($checkString,1);

    for ($i=0; $i < count($symbols); $i++) {
        if ($symbols[$i] == "(")
            $stack->push("(");
        elseif ($symbols[$i] == ")") {
            if ($stack->isEmpty())
                return false;
            else
                $stack->pop();
        }
    }

    if ($stack->isEmpty())
        return true;
    else return false;
}

var_dump(checkSymbol("s * (s – a) * (s – b) * (s – c)  "));
var_dump(checkSymbol("(– b + (b2 – 4*a*c)^0.5) / 2*a"));
var_dump(checkSymbol("s * (s – a) * (s – b * (s – c)         "));
var_dump(checkSymbol("s * (s – a) * s – b) * (s – c)     "));
var_dump(checkSymbol("(– b + (b^2 – 4*a*c)^(0.5/ 2*a))  "));
